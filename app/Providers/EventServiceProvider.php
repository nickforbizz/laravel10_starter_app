<?php

namespace App\Providers;

use App\Events\ProductCreated;
use App\Events\UserRegistered;
use App\Listeners\SendProductCreatedNotification;
use App\Listeners\SendWelcomeEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        ProductCreated::class => [
            SendProductCreatedNotification::class,
        ],

        UserRegistered::class =>  [SendWelcomeEmail::class, ]
    ];
    
    

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        // Event::listen(
        //     UserRegistered::class,
        //     [SendWelcomeEmail::class, 'handle']
        // );
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return true;
    }
}
