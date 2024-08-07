<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Traits\Cacheable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductCategory
 * 
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property int $created_by
 * @property string $active
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class ProductCategory extends Model
{
	use SoftDeletes, HasFactory;

	use Cacheable;
	protected $table = 'product_categories';

	protected $casts = [
		'created_by' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'created_by',
		'active'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function products()
	{
		return $this->hasMany(Product::class, 'category_id');
	}
}
