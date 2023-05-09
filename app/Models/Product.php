<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "Products";
    protected $primaryKey = "SKU";
    protected $fillable = ['SKU', 'productName', 'description', 'price', 'imageCode', 'categoryID', 'offerID'];

    public $timestamps = true;
    public $incrementing = false;
}
