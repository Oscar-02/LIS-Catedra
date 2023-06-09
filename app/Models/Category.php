<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "Categories";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'categoryName'];

    public $timestamps = false;
}
