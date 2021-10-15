<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectView;
use App\Models\bidview;
use App\Models\User;
use App\Models\assignproject;
use DB;
use Session;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    public function boot(){
        Paginator::useBootstrap();
        }
    
     function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

//insert project as client uploaded
    public function insertview(){    
        $r=request(); 
        $projects =ProjectView::find($r->ID);     
        $projects->status=$r->status;
        $projects->save(); 

        //$thumbnail=$r->file('thumbnail-img');  
        //$thumbnail->move('thumbnails',$thumbnail->getClientOriginalName()); 
        //$thumbnailName=$thumbnail->getClientOriginalName();
    
         $insertclientproject=BidView::create([   
             'id'=>$r->ID,  
             'client_id'=>$r->client_id, 
             'client_name'=>$r->client_name, 
             'client_contact'=>$r->client_contact, 
             'location'=>$r->location, 
             'budget'=>$r->budget,
             'style'=>$r->style,
             'description'=>$r->description,
             'size'=>$r->size, 
             'thumbnail'=>$r->thumbnailName,
             'latitude'=>$r->latitude,
             'longitude'=>$r->longitude, 
         ]);
  
     
      return redirect()->route('admin.insertproject');
    }
 
//admin view client uploaded
public function showprojectupload(){  
    $projects=ProjectView::paginate(12)->where('status','=','Pending'); 
    return view('admin.insertproject')->with('projects',$projects);
}

public function copy($id){ 
    $projects =ProjectView::all()->where('id',$id);
    return view('admin.insertbidproject')->with('projects',$projects);
}

public function insertbidproject(){  
    $projects=ProjectView::paginate(12);
    return view('admin.insertbidproject')->with('projects',$projects);
}                          


//show the project after admin inserted it
public function showinsertproject(){
    $projects=BidView::paginate(12);
    return view('admin.viewproject')->with('projects',$projects);
}

//for admin to delete insert project
public function delete($id){
    $projects=BidView::find($id);
    $projects->delete();
    return redirect()->route('admin.viewproject');
}

//for admin to delete client uploaded page
public function deleteclientproject($id){
    $projects=ProjectView::find($id);
    $projects->delete();
    return redirect()->route('admin.insertproject');
}

//Customer report
public function showCustomerID(){
    $projects=ProjectView::paginate(10);
    return view('admin.CustomerReport')->with('projects',$projects);
} 

public function searchCustomer(Request $request){ 
    $client_name = $request->client_name;
    $projects = DB::table('project_views')
  ->where('client_name','like','%' .$client_name. '%')
  ->paginate(10);
  return view('admin.CustomerReport',compact('projects'));
}

public function history(){
    $myassigns=DB::table('assignprojects')
    
    ->paginate(10);
    return view('admin.CustomerHistory')->with('myassigns',$myassigns);
}
public function searchFeedback(Request $request){ 
    $client_name = $request->client_name;
    $myassigns = DB::table('assignprojects')
  ->where('client_name','like','%' .$client_name. '%')
  ->paginate(10);
  return view('admin.CustomerHistory',compact('myassigns'));
}


public function settings(){
    return view('admin.home');
}

}
