<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use DB;
use App\Models\InteriorView;
use Session;

class InteriorViewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(){    
       $r=request(); 
       $image=$r->file('image-img');  
       $image->move('images',$image->getClientOriginalName()); 
       $imageName=$image->getClientOriginalName();

        $addInterior=InteriorView::create([   
            'id'=>$r->ID, 
            'design'=>$r->design, 
            'skill'=>$r->skill,
            'experience'=>$r->experience,
            'certificate'=>$r->certificate,
            'image'=>$imageName,
        ]);
        Return view('uploadinterior'); 
}

public function show(){
    $interiors=InteriorView::paginate(12);
    return view('interiorview')->with('interiors',$interiors);
}

public function showupload()
{
    return view('uploadinterior');   
}
public function showcontact()
{
    return view('contact');   
}
public function showabout()
{
    return view('about');   
}
}
