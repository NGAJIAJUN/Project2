<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProjectView;
use App\Models\bidview;
use DB;
use Session;

class InsertProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function insertview(){    
        $r=request(); 
        $thumbnail=$r->file('thumbnail-img');  
        $thumbnail->move('thumbnails',$thumbnail->getClientOriginalName()); 
        $thumbnailName=$thumbnail->getClientOriginalName();
    
         $insertclientproject=BidView::create([   
             'id'=>$r->ID, 
             'location'=>$r->location, 
             'budget'=>$r->budget,
             'style'=>$r->style,
             'description'=>$r->description,
             'size'=>$r->size,
             'thumbnail'=>$thumbnailName,
         ]);
         Return view('admin.insertbidproject');
    }

    //admin view client uploaded
public function showprojectupload(){
    $projects=ProjectView::paginate(12);
    return view('admin.insertproject')->with('projects',$projects);
}
}
