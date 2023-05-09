<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = "Stocks";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'productSKU', 'quantity'];

    public $timestamps = false;
}
