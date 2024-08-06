<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait Cacheable
{
    protected static function bootCacheable()
    {
        static::created(function ($model) {
            self::revalidateCache(get_class($model));
        });
        static::updated(function ($model) {
            self::revalidateCache(get_class($model));
        });
        static::deleted(function ($model) {
            self::revalidateCache(get_class($model));
        });
    }
    protected static function revalidateCache($modelClass)
    {
        $cacheKey = self::getCacheKey($modelClass);
        Cache::forget($cacheKey);
        Cache::remember($cacheKey, 60, function () use ($modelClass) {
            return $modelClass::all();
        });
    }
    protected static function getCacheKey($modelClass)
    {
        return strtolower(class_basename($modelClass)) . '_all';
    }
}
