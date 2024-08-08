<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Events\ProductCreated;
use App\Traits\Cacheable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $price
 * @property string $quantity
 * @property string $color
 * @property string $size
 * @property string $label
 * @property string $photo
 * @property int $created_by
 * @property int $category_id
 * @property string $active
 * @property string $status
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ProductCategory $product_category
 * @property User $user
 *
 * @package App\Models
 */
class Product extends Model
{
	use SoftDeletes, HasFactory;

	use Cacheable;
	protected $table = 'products';

	protected $casts = [
		'created_by' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'title',
		'slug',
		'description',
		'price',
		'quantity',
		'color',
		'size',
		'label',
		'photo',
		'created_by',
		'category_id',
		'active',
		'status'
	];

	public function product_category()
	{
		return $this->belongsTo(ProductCategory::class, 'category_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	protected static function booted()
	{
		static::created(function ($product) {
			event(new ProductCreated($product));
		});
	}
}
