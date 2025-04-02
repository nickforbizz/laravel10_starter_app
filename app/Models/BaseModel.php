<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class BaseModel extends Model
{
    protected static function booted()
    {
       
    }

   return strtolower(class_basename($modelClass)) . '_all';
    }
}
