<?php

namespace App\Models;

use App\Models\Partner;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = ["name","ean", "image_1", "image_2", "image_3", "image_4", "image_5", "created_at", "updated_at"];

    public function categories() 
    {
        return $this->belongsToMany(Category::class);    
    }
}
