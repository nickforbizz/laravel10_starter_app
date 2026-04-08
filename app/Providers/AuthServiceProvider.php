<?php

namespace App\Providers;

use LdapRecord\Models\ActiveDirectory\User as LdapUser;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Fortify::authenticateUsing(function ($request) {
            // if username is email reomve string from @
            $username = $request->username;
            if (str_contains($username, '@')) {
                $username = strstr($username, '@', true);
            }
            // 1) Find LDAP user by sAMAccountName
            $ldapUser = LdapUser::where('samaccountname', '=', $username)->first();

            if (! $ldapUser) {
                return null;
            }

            // 2) Bind as that LDAP user (real password check)
            $bound = $ldapUser->getConnection()->auth()->attempt(
                $ldapUser->getDn(),
                $request->password
            );

            if (! $bound) {
                return null;
            }

            // 3) Read email from LDAP
            $email = $ldapUser->getFirstAttribute('mail');

            if (! $email) {
                throw ValidationException::withMessages([
                    'username' => 'Your LDAP account does not have an email address configured.',
                ]);
            }

            // 4) Allow login only if already in app DB
            $localUser = User::where('email', $email)->first();

            if (! $localUser) {
                throw ValidationException::withMessages([
                    'username' => 'User not added in application.',
                ]);
            }

            return $localUser;
        });
    }
}