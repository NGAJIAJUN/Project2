<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorView extends Model
{
    use HasFactory;

    protected $fillable=['design','skill','experience','certificate','image'];  
}
