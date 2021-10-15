<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\BidProject;
use App\Models\assignproject; 
use App\Models\DesignerRecords; 
Use Session;
use DB;
use Auth; 

class DesignerRecordsController extends Controller
{
    public function findrecord($id){
        $uploads =assignproject::all()->where('id',$id);
        return view('designer.uploadrecord')->with('uploads',$uploads); 
                                
    } 
public function index(){
    
}
    public function uploadrecord(){    
        $r=request(); 
        $image1=$r->file('img-1');  
        $image1->move('image1s',$image1->getClientOriginalName()); 
        $image1Name=$image1->getClientOriginalName();

        $image2=$r->file('img-2');  
        $image2->move('image2s',$image2->getClientOriginalName()); 
        $image2Name=$image2->getClientOriginalName();

        $image3=$r->file('img-3');  
        $image3->move('image3s',$image3->getClientOriginalName()); 
        $image3Name=$image3->getClientOriginalName();
    
         $uploadrecords=DesignerRecords::create([   
             'ID_detail_id'=>$r->ID_detail_id,  
             'design_id'=>$r->design_id, 
             'designer_name'=>$r->designer_name, 
             'client_id'=>$r->client_id, 
             'client_name'=>$r->client_name, 
             'client_contact'=>$r->client_contact, 
             'location'=>'', 
             'style'=>'',
             'rating'=>$r->rating, 
             'review'=>$r->review,
             'reserve_price'=>$r->reserve_price,
             'fee'=>$r->fee, 
             'completeamount'=>$r->completeamount, 
             'image1'=>$image1Name,
             'image2'=>$image2Name,
             'image3'=>$image3Name, 
         ]);

         $items=$r->input('item'); 
         foreach($items as $item => $value){
             $uploads =assignproject::find($value); 
             $uploads->c_status = $r->c_status; 
             $uploads->save();
         }
    
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
