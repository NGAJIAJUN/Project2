<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidview extends Model
{
    use HasFactory; 
    protected $fillable=['client_id','client_name','client_contact','location','budget','style','description','thumbnail','size','latitude','longitude','b_status']; 

    public function viewbid(){
        return $this->belongsTo('App\Models\BidProject');
    }
}
