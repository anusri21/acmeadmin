<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('addstudent', [
    'uses'=>'AdmissionController@addstudent',
    'as'=>'addstudent'
]);

Route::post('login', 'api\ApiController@login');
Route::post('register', 'api\ApiController@register');

Route::post('addenquiry', 'api\ApiController@addenquiry');
Route::get('getenquirylist', 'api\ApiController@getenquirylist');
Route::get('getenquiry/{id}', 'api\ApiController@getenquiry');
Route::get('getcourse', 'api\ApiController@getcourse');
Route::post('addstudent', 'api\ApiController@addstudent');


