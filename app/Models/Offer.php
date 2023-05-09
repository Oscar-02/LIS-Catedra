<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = "Offers";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'offerName', 'discount'];

    public $timestamps = false;
}
