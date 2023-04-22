<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $post_id
 * @property int $created_by
 * @property string $comment
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Post $post
 *
 * @package App\Models
 */
class Comment extends Model
{
	use SoftDeletes, HasFactory;
	protected $table = 'comments';

	protected $casts = [
		'post_id' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'post_id',
		'created_by',
		'comment'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
