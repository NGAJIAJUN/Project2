<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\Admin\AssignProjectController;
use App\Http\Controllers\Designer\DesignerController;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/cs', function () {
    return view('contact');
});

Route::get('/ab', function () {
    return view('about');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/projectviews', function () {
    return view('projectviews');
});

Route::get('/interiorview', function () {
    return view('interiorview');
});

//post out interior designer info
Route::post('/uploadinterior/store',[App\Http\Controllers\InteriorViewController::class, 'store'])->name('addInterior');//designer
 
//view interior designer info
Route::get('/interiorview', [App\Http\Controllers\InteriorViewController::class, 'show'])->name('interiorview');//interior view

Route::get('/uploadinterior', [App\Http\Controllers\InteriorViewController::class, '__construct'])->name('uploadinterior');//interior view

Route::get('/uploadinterior', [App\Http\Controllers\InteriorViewController::class, 'showupload'])->name('uploadinterior');//interior view


//Route::get('/projectviews', [App\Http\Controllers\ProjectViewController::class, 'show'])->name('projectviews');//project view


 
//client area
Route::post('/upload/store',[App\Http\Controllers\ProjectViewController::class, 'store'])->name('addProject')->middleware('normal_user','PreventBackHistory');//client 

Route::post('/user/myupload',[App\Http\Controllers\ProjectViewController::class, 'complete'])->name('completeproject')->middleware('normal_user','PreventBackHistory');//client 

Route::get('/user/myupload', [App\Http\Controllers\ProjectViewController::class, 'showupload'])->name('myupload')->middleware('normal_user','PreventBackHistory');

Route::get('/user/modify', [App\Http\Controllers\ProjectViewController::class, 'modify'])->name('modify')->middleware('normal_user','PreventBackHistory');

Route::get('/user/deleteproject/{id}', [App\Http\Controllers\ProjectViewController::class, 'delete'])->name('deleteproject')->middleware('normal_user','PreventBackHistory');

Route::get('/user/editproject/{id}', [App\Http\Controllers\ProjectViewController::class, 'edit'])->name('editproject')->middleware('normal_user','PreventBackHistory');

Route::post('/user/updateproject', [App\Http\Controllers\ProjectViewController::class, 'update'])->name('updateproject')->middleware('normal_user','PreventBackHistory');

//This project view for client able to edit and delete but not allowed move to projectview page

//Route::get('/user/viewproject', [App\Http\Controllers\ProjectViewController::class, 'show'])->name('projectviews')->middleware('normal_user','PreventBackHistory');

//show the bid project detail
//Route::get('/project_detail{id}', [App\Http\Controllers\BidProjectController::class, 'showProject'])->name('showBidProject');





//Admin area
Route::prefix('admin')->name('admin.')->group(function(){
      
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
       Route::view('/home', 'admin.home')->name('home');

       //admin view client upload
//(1.view insertproject page, 2.show client uploaded project of function, 3.delete clientproject function)
       Route::view('/insertproject', 'admin.insertproject')->name('insertproject');
       Route::get('/insertproject',[AdminController::class, 'showprojectupload'])->name('insertproject');
       Route::get('/deleteclientproject/{id}', [AdminController::class, 'deleteclientproject'])->name('deleteclientproject');
       Route::post('/insertproject', [AdminController::class, 'update'])->name('updateproject');
       //admin insert project as client uploaded
//(1.view insertbidproject page, 2.add function to insert project function)
       Route::view('/insertbidproject', 'admin.insertbidproject')->name('insertbidproject');
       Route::post('/insertbidproject/insertview',[AdminController::class, 'insertview'])->name('insertclientproject');
       Route::post('/insertbidproject',[AdminController::class, 'insertbidproject'])->name('insertbidproject');
       Route::get('/insertbidproject/{id}',[AdminController::class, 'copy'])->name('clientproject');
       
       //admin view inserted project
//(1.view viewproject page, 2.show inserted project function, 3.delete inserted project function)
       Route::view('/viewproject', 'admin.viewproject')->name('viewproject'); 
       Route::get('/viewproject',[AdminController::class, 'showinsertproject'])->name('viewproject');
       Route::get('/deleteinsertproject/{id}', [AdminController::class, 'delete'])->name('deleteinsertproject');

       Route::view('/viewbidresult', 'admin.viewbidresult')->name('viewbidresult');
       Route::get('/viewbidresult',[AdminController::class, 'showbidresult'])->name('viewbidresult');
       Route::get('/deletebidresult/{id}', [App\Http\Controllers\BidProjectController::class, 'deletebidresult'])->name('deletebidresult');
       
       
       //print and download bid result pdf
       Route::get('/bidresultPDF', [App\Http\Controllers\Admin\PDFController::class, 'getBidResultPDF'])->name('bidresultPDF');
       Route::get('/downloadPDF', [App\Http\Controllers\Admin\PDFController::class, 'getdownloadPDF'])->name('downloadPDF');
        
       //Admin click assign button to storeproject
      Route::post('/AssignProject',[App\Http\Controllers\Admin\AssignProjectController::class, 'assign'])->name('assignresult');
       //view assigned project
       Route::get('/ViewAssignProject', [App\Http\Controllers\Admin\AssignProjectController::class, 'showassignproject'])->name('AssignProject');

       Route::get('/Checkdetails', [App\Http\Controllers\Admin\AssignProjectController::class, 'showdetail'])->name('checkdetails');
       
       Route::get('/ViewAssignProject/{id}', [App\Http\Controllers\Admin\AssignProjectController::class, 'info'])->name('info');

       //System report
       Route::get('/customerreport',[AdminController::class, 'showCustomerID'])->name('customerreport');
       Route::get('/customerreport',[AdminController::class, 'searchCustomer'])->name('customerreport');

       Route::get('/pdfreport', [App\Http\Controllers\Admin\PDFController::class, 'getcsProject'])->name('csprojectpdf');
       Route::get('/downloadpdfReport', [App\Http\Controllers\Admin\PDFController::class, 'getdownloadProject'])->name('downloadcsPDF');
       Route::get('/feedbackreport', [App\Http\Controllers\Admin\PDFController::class, 'getcsfeedback'])->name('feedbackpdf');
       Route::get('/downloadfeedbackReport', [App\Http\Controllers\Admin\PDFController::class, 'getdownloadFeedback'])->name('downloadfeedback');
       Route::get('/customerhistory', [AdminController::class, 'history'])->name('customerhistory');
       Route::get('/customerfeedback',[AdminController::class, 'searchFeedback'])->name('customerhistory');

       Route::get('/designerreport', [App\Http\Controllers\Admin\SystemReportController::class, 'showDesigner'])->name('DesignerReport');
       Route::get('/designerreport/{id}', [App\Http\Controllers\Admin\SystemReportController::class, 'showDetail'])->name('DesignerReportDetails');
       //search designer
       Route::post('/designerreport', [App\Http\Controllers\Admin\SystemReportController::class, 'searchDesigner'])->name('search.product');
       Route::get('/search',[App\Http\Controllers\Admin\SystemReportController::class, 'index'])->name('search');
       Route::get('/autocomplete',[App\Http\Controllers\Admin\SystemReportController::class, 'autocomplete'])->name('autocomplete');

       Route::get('/ProjectReport', [App\Http\Controllers\Admin\SystemReportController::class, 'showProject'])->name('ProjectReport');
       Route::post('/Projectreport', [App\Http\Controllers\Admin\SystemReportController::class, 'search'])->name('search');
      // Route::get('/designerreport', [App\Http\Controllers\Admin\SystemReportController::class, 'history'])->name('customerhistory');
       
       //Route::post('/AssignProject',[AdminController::class, 'searchproject'])->name('assignresult');


       Route::get('settings',[AdminController::class,'settings'])->name('settings');
       Route::post('/logout',[AdminController::class, 'logout'])->name('logout');
       
    });
});



//Designer area
Route::prefix('designer')->name('designer.')->group(function(){

    Route::middleware(['guest:designer','PreventBackHistory'])->group(function(){
        Route::view('/login', 'designer.login')->name('login');
        Route::view('/register', 'designer.register')->name('register');
        Route::post('/create',[DesignerController::class, 'create'])->name('create');
        Route::post('/check',[DesignerController::class, 'check'])->name('check');
    });

    Route::middleware(['auth:designer','PreventBackHistory'])->group(function(){
       Route::view('/home', 'designer.home')->name('home');
       Route::post('/logout',[DesignerController::class, 'logout'])->name('logout');
    });
});

//Designer view bid project
Route::get('/designer/projectviews', [App\Http\Controllers\ProjectViewController::class, 'show'])->name('designer.projectviews')->middleware('auth:designer','PreventBackHistory');
//show the bid project detail
Route::get('/designer/show_project/{id}', [App\Http\Controllers\ProjectViewController::class, 'showbidproject'])->name('designer.showproject')->middleware('auth:designer');


//bid process (designer add big, client choose designer, admin view bid result)
Route::post('/designer/bidnow',  [App\Http\Controllers\BidProjectController::class, 'add'])->name('designer.addbid')->middleware('auth:designer');

//Route::get('/user/myupload', [App\Http\Controllers\Admin\AssignProjectController::class, 'showproject'])->name('myupload')->middleware('auth');//client can see who bid his project

Route::get('/designer/mybid', [App\Http\Controllers\Admin\AssignProjectController::class, 'show'])->name('designer.mybid')->middleware('auth:designer');

Route::get('/admin/viewbidresult', [App\Http\Controllers\BidProjectController::class, 'showbidresult'])->name('admin.viewbidresult')->middleware('auth:admin');

Route::get('/user/feedback/{id}', [App\Http\Controllers\ReviewController::class, 'feedback'])->name('feedback')->middleware('normal_user','PreventBackHistory');

Route::get('/user/viewdesigner/{id}', [App\Http\Controllers\ProjectViewController::class, 'viewdesigner'])->name('viewdesigner')->middleware('normal_user','PreventBackHistory');

Route::post('/user/feedback', [App\Http\Controllers\ReviewController::class, 'rate'])->name('rate');

Route::get('/designer/myrating', [App\Http\Controllers\ReviewController::class, 'showrating'])->name('designer.rated')->middleware('auth:designer');

//Route::get('/designer/myrating', [App\Http\Controllers\ReviewController::class, 'showdesigner'])->name('designer.checkrating')->middleware('auth:designer');

Route::get('/designer/uploadproject/{id}', [App\Http\Controllers\Designer\DesignerRecordsController::class, 'findrecord'])->name('designer.findrecord')->middleware('auth:designer');

Route::post('/designer/mybid',[App\Http\Controllers\Designer\DesignerRecordsController::class, 'uploadrecord'])->name('designer.uploadrecord')->middleware('auth:designer');
 
 
Route::get('/designer/myprofile', [App\Http\Controllers\Designer\DesignerController::class, 'myprofile'])->name('designer.myprofile')->middleware('auth:designer');

Route::post('/designer/myprofile', [App\Http\Controllers\Designer\DesignerController::class, 'uploadPDF'])->name('designer.uploadPDF')->middleware('auth:designer');

Route::post('userUpdate', [App\Http\Controllers\Designer\DesignerController::class, 'userUpdate'])->middleware('auth:designer');

Route::get('/user/viewdesigner', [App\Http\Controllers\ProjectViewController::class, 'index'])->name('viewdesigner');

Route::get('/designer/myreport', [App\Http\Controllers\Designer\DesignerController::class, 'myreport'])->name('designer.myreport')->middleware('auth:designer');

Auth::routes(); 

//index page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('normal_user','PreventBackHistory');

