<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'name',
        'parent',
    ];

    public function product() 
    {
        return $this->belongsToMany(Product::class, 'categories_products_table');    
    }
}
