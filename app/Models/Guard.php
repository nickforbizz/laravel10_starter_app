<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Guard
 * 
 * @property int $id
 * @property string $name
 * @property bool $active
 * @property int $created_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Guard extends Model
{
	protected $table = 'guards';

	protected $casts = [
		'active' => 'bool',
		'created_by' => 'int'
	];

	protected $fillable = [
		'name',
		'active',
		'created_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}
}
