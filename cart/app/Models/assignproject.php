<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignproject extends Model
{
    use HasFactory; 

    protected $fillable=['ID_detail_id','design_id','designer_name','designer_contact','reserve_price','client_id','client_name','client_contact','rating','review','image','Status','p_status','c_status']; 
 
    public function designerproject()
    {
        return $this->belongsTo('App\Models\Designer');
    }
}

