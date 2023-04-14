<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected 
    protected $fillable =[
      'name',
      'country',
      'images',
      'date',
      'price',
      'description',
    ];
}