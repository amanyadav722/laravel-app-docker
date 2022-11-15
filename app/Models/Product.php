<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = ["name","ean", "image_1", "image_2", "image_3", "image_4", "image_5", "created_at", "updated_at"];
    
}
