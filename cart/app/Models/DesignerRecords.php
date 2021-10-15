<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerRecords extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_detail_id',
        'design_id',
        'designer_name',
        'client_id',
        'client_name',
        'client_contact',
        'location',
        'style',
        'rating',
        'review', 
        'reserve_price',
        'fee',
        'completeamount',
        'image1',
        'image2',
        'image3',
    ];
}
