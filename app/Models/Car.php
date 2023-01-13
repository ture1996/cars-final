<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'year', 'max_speed', 'number_of_doors', 'is_automatic', 'engine'];

    public $timestamps = false;
}
