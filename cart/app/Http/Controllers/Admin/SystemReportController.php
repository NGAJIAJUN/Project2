<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\assignproject;
use Illuminate\Pagination\Paginator;
use DB;
use Auth;

class SystemReportController extends Controller
{
    public function boot()
{
     Paginator::useBootstrap();
}

    public function index()
    {
        return view('search');
    } 

    public function autocomplete(Request $request)
    {
        $data = assignproject::select("designer_name")
                ->where("designer_name","LIKE", '%'.$request->get('query').'%')
                ->get();
        return response()->json($data); 
    }

    public function showDesigner(){
        $totalprojects=DB::table('assignprojects') 
        ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
        ->select(DB::raw('designers.*,count(ID_detail_id) as sumproject'),
        DB::raw('sum(rating) / count(review) as sumrate'))
       
        ->groupBy('design_id')
        ->get();
        
        return view('admin.DesignerReport')->with('totalprojects',$totalprojects);
    }

    public function showDetail($id){
    $totalprojects =DB::table('designers') 
    ->where('id',$id)
    ->get();

    $designerreports =DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select('designers.*',
    'design_id as userid',
    'ID_detail_id as ID_detail',
    'reserve_price as price',
    'rating as rate',
    'review as comment',
    'p_status as p_status')
    ->where('design_id','=',$id)
    ->get();

    $allprojects=DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select(DB::raw('count(ID_detail_id) as overallproject'))
    ->where('design_id','=',$id)
    ->get(); 

    $currentprojects=DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select(DB::raw('count(ID_detail_id) as crtproject'))
    ->where('assignprojects.Status','=','')
    ->where('design_id','=',$id)
    ->get(); 

    $completedprojects=DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select(DB::raw('count(ID_detail_id) as cpdproject'))
    ->where('assignprojects.Status','=','Rated')
    ->where('design_id','=',$id)
    ->get();

    return view('admin.DesignerReportDetails')->with('totalprojects',$totalprojects)
    ->with('designerreports',$designerreports)
    ->with('allprojects',$allprojects)
    ->with('currentprojects',$currentprojects)
    ->with('completedprojects',$completedprojects); 
    }

    public function showProject(){
   $projects=assignproject::all();
    return view('admin.ProjectReport')->with('projects',$projects);
    }

   //search
    public function search(Request $request){
       $fromDate=$request->input('fromDate');
       $toDate=$request->input('toDate');

        $projects=DB::table('assignprojects')->select()
        ->where('created_at','>=', $fromDate)
        ->where('created_at','<=', $toDate)
        ->get();
       

        return view('admin.ProjectReport',compact('projects'));

    }
}
