<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ProjectView;
use App\Models\bidview;
use App\Models\BidProject;
use App\Models\designer;
use App\Models\assignproject;
use Illuminate\Pagination\Paginator;
use Session;
use Auth;

class ProjectViewController extends Controller

{
    public function boot(){
        Paginator::useBootstrap();
        }
    public function __construct()
    {
        $this->middleware('auth');
    }
 
   public function index(){
       $designers=designer::all();
       $myprojects=assignproject::all();
       return view('viewdesigner')->with('designers',$designers)->with('myprojects',$myprojects);
   }

    public function store(){    
       $r=request(); 
       $thumbnail=$r->file('thumbnail-img');  
       $thumbnail->move('thumbnails',$thumbnail->getClientOriginalName()); 
       $thumbnailName=$thumbnail->getClientOriginalName();

        $addProject=ProjectView::create([   
            'id'=>$r->ID, 
            'client_id'=>Auth::id(), 
            'client_name'=>Auth::user()->name,
            'client_contact'=>Auth::user()->contact,
            'location'=>$r->location, 
            'budget'=>$r->budget,
            'style'=>$r->style,
            'description'=>$r->description,
            'size'=>$r->size,
            'thumbnail'=>$thumbnailName,
            'status'=>'Pending',
        ]);
        Return view('upload');
}
 

public function delete($id){
    $projects=ProjectView::find($id);
    $projects->delete();
    return redirect()->route('modify');
}

public function update(){
    $r=request();
    $projects =ProjectView::find($r->ID);     
    if($r->file('thumbnail-img')!=""){
        $thumbnail=$r->file('thumbnail-img');        
        $thumbnail->move('thumbnails',$thumbnail->getClientOriginalName());                   
        $thumbnailName=$thumbnail->getClientOriginalName(); 
        $projects->thumbnail=$thumbnailName;
        }         
    
    $projects->location=$r->location;
    $projects->budget=$r->budget;
    $projects->style=$r->style;
    $projects->description=$r->description;
    $projects->size=$r->size;
    $projects->save(); 
    return redirect()->route('modify');
    
}

public function edit($id){
    $projects =ProjectView::all()->where('id',$id);
    return view('editproject')->with('projects',$projects); 
                            
}

//client view his own project
public function showupload(){
    $projects=DB::table('project_views')
    ->where('project_views.client_id','=',Auth::id())
    ->paginate(10);
     
    $bids=DB::table('bidviews') 
    ->leftjoin('bid_projects', 'bid_projects.client_id', '=', 'bidviews.client_id')
    ->select(DB::raw('bidviews.*,count(ID_detail_id) as totalbid'))
    ->where('bidviews.client_id','=',Auth::id())
    ->paginate(12);

    $completes=DB::table('assignprojects')
    ->where('assignprojects.client_id','=',Auth::id())
    ->where('assignprojects.p_status','=', '')
    ->paginate(10);

    $myassigns=DB::table('assignprojects')
    ->where('assignprojects.client_id','=',Auth::id())
    ->where('assignprojects.Status','=', '')
    ->paginate(10);

    $rates=DB::table('assignprojects')
    ->where('assignprojects.client_id','=',Auth::id())
    ->where('assignprojects.Status','=', 'Rated')
    ->paginate(10);

    return view('myupload')->with('projects',$projects)->with('bids',$bids)->with('completes',$completes)
    ->with('myassigns',$myassigns)->with('rates',$rates);
}

public function viewdesigner($design_id){ 
    $designers=designer::all()->where('id',$id);
    //select * from products where id='$id'
    return view('viewdesigner')->with('designers',$designers);
}

public function modify(){
    $projects=DB::table('project_views')
    ->where('project_views.client_id','=',Auth::id())
    ->where('project_views.status','=','Pending')
    ->paginate(10);
     

    return view('modify')->with('projects',$projects);
}

//designer view bid 
public function show(){ 
    $projects=BidView::paginate(12);
    return view('designer.projectviews')->with('projects',$projects);
}


public function showbidproject($id){
    $projects=BidView::all()->where('id',$id);
    //select * from products where id='$id'
    return view('designer.showproject')->with('projects',$projects);
}

    
}