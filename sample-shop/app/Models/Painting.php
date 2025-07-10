<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
     use HasFactory;

   
    protected $fillable = [
        'title',
        'artist',
        'description',
        'price',
        'image_path', 
       
    ];
}
