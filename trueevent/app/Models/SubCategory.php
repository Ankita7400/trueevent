<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
      protected $fillable = [
        'service_category_id',
        'name',
        'slug',
          'status',
        'description',
        'image',
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
