<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\assignproject;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;

class DesignerController extends Controller
{

    
    
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required', 
           'email'=>'required|email|unique:designers,email',
           'contact'=>'required',
           'password'=>'required|min:5|max:30',
           'password_confirmation'=>'required|min:5|max:30|same:password',
           
        ]); 


        $designer = new Designer(); 
          $designer->name = $request->name; 
          $designer->email = $request->email;
          $designer->contact = $request->contact;
          $designer->role_user = $request->role_user;
          $designer->avatar = $request->image;
          $designer->password = \Hash::make($request->password);
          $save = $designer->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Designer');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

     function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:designers,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in designers table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('designer')->attempt($creds) ){
            return redirect()->route('designer.projectviews');
        }else{
            return redirect()->route('designer.login')->with('fail','Incorrect credentials');
        }
   }

   public function userUpdate( Request $request)
   {
       $userUpdate = [
           'id'            =>  $request->idUpdate,
           'name'          =>  $request->name, 
           'email'         =>  $request->email,
           'contact'    =>  $request->contact,
           

       ];

           
       // return dd($userUpdate);
       DB::table('designers')->where('id',$request->idUpdate)->update($userUpdate);
       return redirect()->back()->with('userUpdate','.');
   }

   function logout(){
       Auth::guard('designer')->logout();
       return redirect('/');
   } 

   public function myprofile(){
       $designers=DB::table('designers')
       ->where('designers.name', '=', Auth::user()->name)
       ->where('designers.email', '=', Auth::user()->email)
       ->where('designers.contact', '=', Auth::user()->contact)
       ->where('designers.id', '=', Auth::id())
       ->get();

       
       $myprojects=DB::table('designer_records') 
     
      ->where('designer_records.design_id', '=', Auth::id())
      ->get();

      

       return view('designer.myprofile')->with('designers',$designers)
                                        ->with('myprojects',$myprojects);
   }

   public function myreport(){
    $totalprojects =DB::table('designers') 
    ->where('designers.id', '=', Auth::id())
    ->get();
 
    $designerreports =DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select('designers.*',
    'design_id as userid',
    'ID_detail_id as ID_detail', 
    'reserve_price as price',
    'rating as rate',
    'review as comment',
    'Status as status',
    'p_status as p_status')
    ->where('design_id','=',Auth::id())
    ->get();


    $currentprojects=DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select(DB::raw('count(ID_detail_id) as crtproject'))
    ->where('assignprojects.Status','=','')
    ->where('design_id','=',Auth::id())
    ->get(); 

    $completedprojects=DB::table('assignprojects') 
    ->leftjoin('designers', 'designers.id', '=', 'assignprojects.design_id')
    ->select(DB::raw('count(ID_detail_id) as cpdproject'))
    ->where('assignprojects.Status','=','Rated')
    ->where('design_id','=',Auth::id()) 
    ->get();

    return view('designer.myreport')->with('totalprojects',$totalprojects)
    ->with('designerreports',$designerreports)
    ->with('currentprojects',$currentprojects)
    ->with('completedprojects',$completedprojects); 
   }

   
}
