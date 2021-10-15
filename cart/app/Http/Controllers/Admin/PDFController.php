<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designer;
use App\Models\Admin;
use App\Models\ProjectView;
use App\Models\assignproject;
use App\Models\bidview; //admin inserted project
use App\Models\BidProject; //designer bid result
use PDF;
use Excel;
use DB;


class PDFController extends Controller
{
   public function getBidResultPDF(){
      $bids = BidProject::all();
        
        return view('admin.bidresultPDF', compact('bids'));

   }

    public function getdownloadPDF()
    {
        
        $bids = BidProject::all();

        $pdf = PDF::loadView('admin.bidresultPDF', compact('bids'));
    
        return $pdf->download('bidresult.pdf');


    }

    public function getcsProject(){
        $projects = ProjectView::all();
          
          return view('admin.csprojectpdf', compact('projects'));
  
     }

     public function getdownloadProject()
     {
        $projects = ProjectView::paginate(12); 
 
         $pdfs = PDF::loadView('admin.csprojectpdf', compact('projects'));
     
         return $pdfs->download('CustomerProject.pdf');
 
     }
     public function getcsfeedback(){
      $myassigns = assignproject::all(); 
        
        return view('admin.feedbackpdf', compact('myassigns'));

   }

     public function getdownloadFeedback()
     {
        $myassigns = assignproject::paginate(12); 
 
         $pdfs = PDF::loadView('admin.feedbackpdf', compact('myassigns'));
     
         return $pdfs->download('CustomerFeedback.pdf');
 
     }
}
