<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Admin;
use App\Models\BidProject; //designer bid result
use App\Models\assignproject; 
Use Session;
use DB;
use Auth;

class AssignProjectController extends Controller
{ 
    public function assign(){ 
       
     $r=request();
        $addAssign=assignproject::create([    
            'id'=>$r->ID, 
            'ID_detail_id'=> $r->ID_detail_id,
            'Status'=>'',  
            'design_id'=>$r->design_id,    
            'designer_name'=>$r->designer_name, 
            'designer_contact'=> $r->designer_contact, 
            'reserve_price'=>$r->reserve_price,  
            'client_id'=>$r->client_id,  
            'client_name'=>$r->client_name,  
            'client_contact'=>$r->client_contact,     
            'rating'=> '0', 
            'review'=> '',    
            'image'=> '',  
            'p_status'=> 'On-going',   
        ]);  
  
        $ID_detail_id=DB::table('bid_projects')->where('design_id','=',Auth::id())->orderBy('created_at', 'desc')->first(); //get the lastest order ID        
      
        
        $items=$r->input('item'); 
        foreach($items as $item => $value){
            $bids =BidProject::find($value); 
            $bids->ID_detail_id = $ID_detail_id->id;
            $bids->status = $r->status;
            $bids->save();
        }

      
     
        Session::flash('success',"Assign succesful!");        
        Return redirect()->route('admin.AssignProject'); //redirect to payment
    }


    public function info($id){
        $myassigns =assignproject::all()->where('id',$id);
        return view('admin.AssignProject')->with('myassigns',$myassigns);
    }

    public function showdetail(){
        $myassigns=assignproject::paginate(12);
        
        return view('admin.checkdetails')->with('myassigns',$myassigns); 
    }

    //admin
    public function showassignproject(){ 
        $myassigns=DB::table('assignprojects') 
        ->select(DB::raw('assignprojects.*'))
        ->get();
        return view('admin.AssignProject')->with('myassigns',$myassigns); 
    
  }  

  //client


//designer 
public function show(){ 
    $bids=DB::table('bid_projects')
    
    ->where('bid_projects.design_id','=',Auth::id())
    ->get();

    $myassigns=DB::table('assignprojects')
    
    ->where('assignprojects.design_id','=',Auth::id())
    ->where('assignprojects.Status','=', '')
    ->get();

    $mys=DB::table('assignprojects')
    ->where('assignprojects.design_id','=',Auth::id())
    ->where('assignprojects.Status','=', 'Rated')
    ->where('assignprojects.c_status','=', '')
    ->get();

    return view('designer.mybid')->with('myassigns',$myassigns) 
    ->with('mys',$mys)
    ->with('bids',$bids);
}  
}
