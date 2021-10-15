<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Admin;
use App\Models\bidview; //admin inserted project
use App\Models\BidProject; //designer bid result
use App\Models\assignproject; 
Use Session;
use Auth;
use Validator;
 
class BidProjectController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        
    public function add(){ 
 
        $r=request(); 
         
        $addbid=BidProject::create([     
            
            'id'=>$r->ID,  
            'ID_detail_id'=> '' ,            
            'design_id'=>Auth::id(), 
            'designer_name'=>Auth::user()->name, 
            'designer_contact'=>Auth::user()->contact, 
            'client_id'=>$r->client_id, 
            'client_name'=>$r->client_name, 
            'client_contact'=>$r->client_contact,                  
            'project_id'=> $r->project_id,
            'bidamount'=>$r->bidamount,
            'comment'=>$r->comment,
            'status'=>'Pending',

            $r->validate([
                'project_id'=>'required|unique:bid_projects,project_id',
                'bidamount'=>'integer|min:1|',
                
             ])
        ]);  
       
   
    
      Session::flash('success',"Bid succesful!");        
      Return redirect()->route('designer.projectviews');
        
    }

    public function showbidresult(){ 
        $bids=DB::table('bid_projects')
        
        ->where('bid_projects.ID_detail_id','=','')// only show the project that havent assign
        ->paginate(12);
        
        return view('admin.viewbidresult')->with('bids',$bids); 
    
} 


public function deletebidresult($id){
    $bids=BidProject::find($id);
    $bids->delete();
    return redirect()->route('admin.viewbidresult');
}

   
   
}
