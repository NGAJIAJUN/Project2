<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidProject; //designer bid result
use App\Models\assignproject; 
use App\Models\Designer;
use Illuminate\Pagination\Paginator;
Use Session; 
use DB;
use Auth;

class ReviewController extends Controller
{
    public function boot(){
        Paginator::useBootstrap();
        }

    public function feedback($id){
        $myassigns =assignproject::all()->where('id',$id);
        return view('feedback')->with('myassigns',$myassigns);
    }
    
    public function rate(){ 
        $r=request();   
        $myassigns =assignproject::find($r->ID);        
            $myassigns->rating=$r->rating; 
            $myassigns->review=$r->review; 
            $myassigns->Status=$r->Status; 
            $myassigns->save();  


            $ID_detail_id=DB::table('assignprojects')->where('design_id','=',Auth::id())->orderBy('created_at', 'desc')->first(); //get the lastest order ID        
        
            $items=$r->input('item'); 
            foreach($items as $item => $value){
                $bids =assignproject::find($value); 
                $bids->p_status = $r->p_status;
                $bids->save();
            }
            return redirect()->route('myupload');

        }
 
    
  
    //designer
    public function showrating(){
        $myassigns=DB::table('assignprojects')
        ->where('assignprojects.Status','=','Rated')
        ->where('assignprojects.design_id','=',Auth::id())
        ->paginate(6);

        $mys=DB::table('assignprojects')
        ->select(DB::raw('sum(rating) / count(review) as totalrating'),
         DB::raw('count(review) as totalreview'))
          ->where('assignprojects.Status','=','Rated')
        ->where('assignprojects.design_id','=',Auth::id())
        ->get();

        return view('designer.checkrating')->with('myassigns',$myassigns)
                                           ->with('mys',$mys);
                                          
    }
   
}

