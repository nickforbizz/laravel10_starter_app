<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\Cacheable;
use Carbon\Carbon;

use LdapRecord\Laravel\Auth\HasLdapUser;
use LdapRecord\Laravel\Auth\LdapAuthenticatable;
use LdapRecord\Laravel\Auth\AuthenticatesWithLdap;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $fname
 * @property string|null $lname
 * @property string|null $sname
 * @property string|null $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string $avator
 * @property string $active
 * @property string|null $remember_token
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PostCategory[] $post_categories
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class User extends Authenticatable implements LdapAuthenticatable
{
	use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions;

	use HasLdapUser, AuthenticatesWithLdap;

	use SoftDeletes;

	use Cacheable;
	
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'date',
		'two_factor_confirmed_at' => 'date'
	];

	protected $hidden = [
		'password',
		'two_factor_secret',
		'remember_token'
	];

	// protected $fillable = [
	// 	'fname',
	// 	'lname',
	// 	'sname',
	// 	'name',
	// 	'email',
	// 	'phone',
	// 	'email_verified_at',
	// 	'password',
	// 	'two_factor_secret',
	// 	'two_factor_recovery_codes',
	// 	'two_factor_confirmed_at',
	// 	'avator',
	// 	'active',
	// 	'remember_token'
	// ];
	protected $fillable = [
        'name',
        'username',
        'password',
		'guid',
		'email',
		'domain',
		'active',
    ];

	// override the default guard name for Spatie permissions
	protected $guard_name = 'web';

	

	public function post_categories()
	{
		return $this->hasMany(PostCategory::class, 'created_by');
	}

	public function posts()
	{
		return $this->hasMany(Post::class, 'created_by');
	}

	

	/**
     * Hash the password before saving the user record.
     */
    // public function setPasswordAttribute($password)
    // {   
    //     $this->attributes['password'] = bcrypt($password);
    // }

}
