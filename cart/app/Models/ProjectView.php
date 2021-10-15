<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectView extends Model
{
    use HasFactory; 

    protected $fillable=['client_id','client_name','client_contact','location','budget','style','description','thumbnail','size','latitude','longitude','status']; 
}