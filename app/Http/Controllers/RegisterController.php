<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use DB;
use Input;
use Response;
use Validator;
use Helper;
use Session;


class RegisterController extends Controller
{
    // public function register(Request $request)
    // {
    //     $data=$request->all();
    //     // dd($data);
    //      //$userrs = Sentinel::registerAndActivate($data);
    //      if ($data != null) {
    //         //dd($data);
    //         $input = [
    //             'id' => isset($data['id']) ? $data['id'] : false,
    //             'role_id' => isset($data['role_id']) ? $data['role_id'] : '',
    //             'first_name' => isset($data['first_name']) ? $data['first_name'] : '',
    //             'last_name' => isset($data['last_name']) ? $data['last_name'] : '',
    //             'mobile' => isset($data['mobile']) ? $data['mobile'] : '',
    //             'email' => isset($data['email']) ? $data['email'] : '',
    //             'password' => isset($data['password']) ? $data['password'] : '',
    //             'address' => isset($data['address']) ? $data['address'] : '',
    //         ];

    //         $active = DB::table('login')->where('mobile', $data['mobile'])->first();
    //        // dd($active);
    //         if (empty($active)) {
    //         $rules = array(
    //             'first_name' => 'required',
    //             'last_name' => 'required',
    //             'email' => 'required',
    //             'mobile' => 'required'
    //         );

    //         $checkValid = Validator::make($input, $rules);
    //         if ($checkValid->fails()) {
    //             return Response::json([
    //                         'status' => 0,
    //                         'message' => $checkValid->errors()->all()
    //                             ], 400);
    //         } else {
    //             //   it is used for slug field         
    //             // $slug = str_slug($input['profile_image'], '-');
              
    //             $userInput = array(
    //                 'id' => $input['id'],
    //                 'role_id' => $input['role_id'],
    //                 'first_name' => $input['first_name'],
    //                 'last_name' => $input['last_name'],
    //                 'email' => $input['email'],
    //                 'mobile' => $input['mobile'],
    //                 'password' =>$input['password'],
    //                 //'otp' => $onetimepass,
    //                 'address'=>$input['address'],
    //             );
    //             $userrs = Sentinel::registerAndActivate($userInput);
                
    //            $roles = Sentinel::findRoleById($userrs->role_id);
           
    //            if($userrs->role_id==2)
    //            {
                  
    //                    $query = DB::table('staff');

    //                    $insert_data=array(
    //                        'id'=>false,
    //                        'user_id'=>$userrs->id,
                           
    //                    );
    //                    //dd($insert_data);
    //                    $staffid=$query->insertGetId($insert_data);
    //            }
    //            else{
    //                $staffid="";
    //            }
    //         }
    //         return redirect('/');
    //     }
       
    // }
        
    // }

    public function login(Request $request)
    {
        $data=$request->all();
       // dd($data);
        // $input =Sentinel::authenticate($request->all());
        // dd($input);
        
        if ($data != null) {

                $input = [
                    'id' => isset($data['id']) ? $data['id'] : false,
                    'mobile' => isset($data['mobile']) ? $data['mobile'] : '',
                    //'password' => isset($data['password']) ? $data['password'] : '',
                ];
            }
            $verifyuser = DB::table('login')->where('mobile', $data['mobile'])->first();
             //dd($verifyuser );
             if (!empty($verifyuser)) {
                // if($verifyuser->role_id==2){
                //     return redirect('staff/dashboard');
                // }
                // if($verifyuser->role_id==1){
                //     return redirect('admin/dashboard');
                // }
                return Response::json([
                    'status' => 1,
                    'role'   => $verifyuser->role_id,
                ], 200);
                
               
            } else {
                //print_r("error");die;
            //     $data = Session::flash('message', 'Invalid Username!');
            //    return redirect('/')->with(['data', $data], ['message', $data]);
            $response = ['success' => false, 'error' => ['Incorrect credentials']];
            $httpStatus = 401;
            return response()->json($response, $httpStatus);
            }
            
         
    }
   
}
