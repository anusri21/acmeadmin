<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function () {
	// here you should put your routes
    Route::post('login','RegisterController@login');
    Route::post('register','RegisterController@register');
    
});


Route::get('/','HomeController@home');
Route::get('register','HomeController@register');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\AdminController@showLoginForm')->name('login');
Route::post('/login', 'Auth\AdminController@login')->name('login.submit');
Route::get('staff/dashboard','HomeController@staffdashboard');

Route::get('/logout', function() {
    auth()->logout();
     return redirect('/');
});


Route::group(['prefix' => 'admin'], function(){
Route::get('dashboard','HomeController@admindashboard');
Route::get('staffdetails','HomeController@staffdetails');
Route::get('studentdetails','HomeController@studentdetails');
Route::get('createstaff','HomeController@createstaff');
Route::get('createstudent','HomeController@createstudent');
Route::post('addstaff','AdmissionController@addstaff');
Route::post('addstudent','AdmissionController@addstudent');
Route::post('editstudent','AdmissionController@editstudent');
Route::get('editstudent/{id}','HomeController@editstudent');
Route::get('deletestudent/{id}','HomeController@deletestudent');
Route::get('viewstudent/{id}','HomeController@viewstudent');

Route::get('deletecourse/{id}','HomeController@deletecourse');
Route::get('editcourse/{id}','HomeController@editcourse');
Route::get('viewcourse/{id}','HomeController@viewcourse');
Route::get('addcourse','HomeController@addcourse');
Route::post('addcourse','CourseController@addcourse');
Route::get('courselist','HomeController@courselist');

Route::get('addenquiry','HomeController@addenquiry');
Route::get('enquirylist','HomeController@enquirylist');
Route::post('addenquiry','AdmissionController@addenquiry');
Route::get('viewenquiry/{id}','HomeController@viewenquiry');
Route::get('editenquiry/{id}','HomeController@editenquiry');
Route::get('deleteenquiry/{id}','HomeController@deleteenquiry');

Route::get( 'payment','HomeController@payment');
Route::post( 'payment','PaymentController@payment');
Route::get( 'paymentlist','HomeController@paymentlist');
Route::get( 'viewpayment/{id}','HomeController@viewpayment');
Route::get( 'editpayment/{id}','HomeController@editpayment');
Route::get( 'deletepayment/{id}','HomeController@deletepayment');


Route::post( 'payexpense','HomeController@payexpense');

Route::get( 'payexpense','HomeController@payexpense');
Route::post( 'addexpense','PaymentController@addexpense');
Route::get( 'expenselist','HomeController@expenselist');
Route::get( 'viewexpense/{id}','HomeController@viewexpense');
Route::get('editexpense/{id}','HomeController@editexpense');
Route::get('deleteexpense/{id}','HomeController@deleteexpense');

});



Route::group(['prefix' => 'backend'], function(){
    Route::get('dashboard','MainController@admindashboard');
    Route::get('createstudent','MainController@createstudent');
    Route::get('studentdetails','MainController@studentdetails');
    Route::get('editstudent/{id}','MainController@editstudent');
    Route::get('deletestudent/{id}','MainController@deletestudent');
    Route::get('viewstudent/{id}','MainController@viewstudent');
    Route::get('addpaymentdetail','MainController@addpaymentdetail');
    Route::post('addpaymentdetails','PaymentController@addpaymentdetails');
    Route::get('paymentdetaillist','MainController@paymentdetaillist');
    Route::get('editpayment/{id}','MainController@editpayment');
    Route::get('deletepaymentdetail/{id}','MainController@deletepaymentdetail');
    Route::get('viewpayment/{id}','MainController@viewpayment');



    Route::get('addenquiry','MainController@addenquiry');
    Route::get('enquirylist','MainController@enquirylist');
    Route::post('addenquiry','AdmissionController@addenquiry');
    Route::get('viewenquiry/{id}','MainController@viewenquiry');
    Route::get('editenquiry/{id}','MainController@editenquiry');
    Route::get('deleteenquiry/{id}','MainController@deleteenquiry');

    Route::get('deletecourse/{id}','MainController@deletecourse');
    Route::get('editcourse/{id}','MainController@editcourse');
    Route::get('viewcourse/{id}','MainController@viewcourse');
    Route::get('addcourse','MainController@addcourse');
    Route::post('addcourse','CourseController@addcourse');
    Route::get('courselist','MainController@courselist');

    Route::get('addcoursecategory','MainController@addcoursecategory');
    Route::post('addcoursecategory','CourseController@addcoursecategory');
    Route::get('editcoursecategory/{id}','MainController@editcoursecategory');
    Route::get('deletcoursecategory/{id}','MainController@deletcoursecategory');

    Route::get('addschedule/{id}','MainController@addschedule');
    Route::post('addbatch','CourseController@addbatch');
    Route::get('deletschedule/{id}','MainController@deletschedule');

    Route::get('coursedetails/{id}','MainController@coursedetails');
    Route::get('editschedule/{id}','MainController@editschedule');
    Route::post('addcoursedetails','CourseController@addcoursedetails');

    Route::get('studentcourse','MainController@studentcourse');
    Route::get('editstudentcourse/{id}','MainController@editstudentcourse');
    Route::get('viewstudentcourse/{id}','MainController@viewstudentcourse');
    Route::get('deletestudentcourse/{id}','MainController@deletestudentcourse');
    Route::post('editstudentcourse','CourseController@editstudentcourse');


    Route::get('email','MainController@email');
    Route::post('postEmail','MainController@postEmail');


    Route::get('category','MainController@category');
    Route::get('getcategory/{id}','MainController@getcategory');

    Route::get('addpdfcategory','MainController@addpdfcategory');
    Route::get('addpdf','MainController@addpdf');
    Route::post('addpdf','CourseController@addpdf');

    Route::post('addcat','CourseController@addcat');
    Route::get('editcat/{id}','CourseController@editcat');
    Route::get('getpdfcategory/{id}','CourseController@getpdfcategory');

    Route::get('getpdfcategory/{id}','CourseController@getpdfcategory');
    Route::get('getpdf/{id}','CourseController@getpdf');
    Route::get('viewpdf/{id}','MainController@viewpdf');
    Route::get('pdflist','MainController@pdflist');
    Route::get('editpdf/{id}','MainController@editpdf');
    Route::post('saveeditpdf','CourseController@saveeditpdf');
    Route::get('deletepdf/{id}','MainController@deletepdf');



});



Route::any('ViewerJS/{all?}', function(){

    return View::make('ViewerJS.index');
});
