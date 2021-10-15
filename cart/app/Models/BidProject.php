<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class BidProject extends Model
{
    use HasFactory;
    protected $fillable=['ID_detail_id','project_id','bidamount','design_id','designer_name','designer_contact','client_id','client_name','client_contact','comment','status'];  

    public function bidproject()
{
    return $this->HasMany('App\Models\bidview');
}
 
}

