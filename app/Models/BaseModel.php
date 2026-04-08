<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class BaseModel extends Model
{
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->cacheKey = strtolower(class_basename($model)) . '_all';
        });
    }
}
