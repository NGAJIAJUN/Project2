<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');   
    }
    public function userIndex()
    { 
        return view('userhome');   
    }
    public function designerIndex()
    {
        return view('designer.designerhome');
    }
    function logout(){
        Auth::user()->logout();
        return redirect('/');
    } 
}
