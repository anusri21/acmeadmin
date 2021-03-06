<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\Course;
use Validator;
use Response;
use DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{
    public $successStatus = 200;

    public function __construct() {
        $this->admission = new Admission();
        $this->course = new Course();
    }
    public function register(Request $request) 
    { 
        //dd('user');
        $input = $request->all(); 

        $verifyUser = DB::table('users')->where('email',$input['email'])->where('mobile',$input['mobile'])->first();
        if(empty($verifyUser))
        {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
           if ($validator->fails()) 
        { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $userrs = array(
            'name'=>$input['name'],
            'role_id'=>$input['role_id'],
            'email'=>$input['email'],
            'mobile'=>$input['mobile'],
            'password'=>$input['password'],
        );
        $user = DB::table('users')->insertGetId($userrs); 
        //$success['token'] =  $user->createToken('MyApp')-> accessToken; 
        if ($user) {
            return response()->json(['regstatus' => 'success','userdata' => $user], $this-> successStatus);
        } else {
            return response()->json(['regstatus' => 'failed','userdata' => ''], $this-> successStatus);

        }
    }else{
        return response()->json(['regstatus' => 'User Already Registered','userdata' => ''], $this-> successStatus);
    }
         
    }

    public function login(Request $request)
    {
        
        $data = $request->all();
        //dd($user);
        $user = DB::table('users')->where('email',$data['email'])->first();
        if(!empty($user))
        { 
            if ($user && Hash::check($data['password'], $user->password)) 
            {
                return response()->json(['loggedstatus' => 'success','userdata' => $user], $this-> successStatus); 
            }else{
                return response()->json(['loggedstatus' => 'Invalid Credentials','userdata' => ''], $this-> successStatus); 
            }
        }else{
            return response()->json(['loggedstatus' => 'User Not Registered','userdata' => ''], $this-> successStatus);
        }
        
    }
    public function getcourse() 
    { 
        $course = DB::table('acme-course')->get(); 
        if ($course) {
            return Response::json([
                'status' => 1,
                'course'   => $course,
            ], 200);} else {
            return Response::json([
                'status'  => 1,
                'message' => 'course not fount',
            ], 200);
        }
    } 
    public function addenquiry(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'name' => isset($data['name']) ? $data['name'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'alternate_email' => isset($data['alternate_email']) ? $data['alternate_email'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'alternate_phone' => isset($data['alternate_phone']) ? $data['alternate_phone'] : '',
                'course' => isset($data['course']) ? $data['course'] : '',
                'enquiry' => isset($data['enquiry']) ? $data['enquiry'] : '',
                'doj' => isset($data['doj']) ? $data['doj'] : '',
                'address' => isset($data['address']) ? $data['address'] : '',
                'reference' => isset($data['reference']) ? $data['reference'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',
                'student_name' => isset($data['student_name']) ? $data['student_name'] : '',
                'student_class' => isset($data['student_class']) ? $data['student_class'] : '',
                'student_syllabus' => isset($data['student_syllabus']) ? $data['student_syllabus'] : '',
                'student_school' => isset($data['student_school']) ? $data['student_school'] : '',


               
            ];
            //dd($input);
            $course =  json_encode($input['course']);
            $courseenq = str_replace( array( '\'', '"', '[' , ']', '"', '>' ), ' ', $course);
           // dd($title);
            $rules = array(
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'course' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $enquiryInput = array(
                    'id' => $input['id'],
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'alternate_email' => $input['alternate_email'],
                    'phone'=>$input['phone'],
                    'alternate_phone' => $input['alternate_phone'],
                    'course' => $courseenq,
                    'enquiry' => $input['enquiry'],
                    'doj' => $input['doj'],
                    'address' => $input['address'],
                    'reference' => $input['reference'],
                    'comments' => $input['comments'],
                    'student_name' => $input['student_name'],
                    'student_class' => $input['student_class'],
                    'student_syllabus'=>$input['student_syllabus'],
                    'student_school' => $input['student_school'],
                    'status'=>1
                );
                $enquiryid = $this->admission->saveEnquiry($enquiryInput);
               
               if ($enquiryid) {
                   
                return Response::json([
                    'status' => 'success',
                    'enquiryid' => $enquiryid
                        ], 200);
                } else {
                    return Response::json([
                                'status' => 1,
                                'message' => 'Please provide valid details'
                                    ], 200);
                }
            }
        } else {
            return Response::json([
                        'status' => 1,
                        'message' => "No data"
            ]);
        }
        
    }

    public function addstudent(Request $request)
    {
        $data=$request->all();
         //print_r($data);die;

        if ($data != null) {
            
           
            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'name' => isset($data['name']) ? $data['name'] : '',
                'lastname' => isset($data['lastname']) ? $data['lastname'] : '',
                'dob' => isset($data['dob']) ? $data['dob'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'gender' => isset($data['gender']) ? $data['gender'] : '',
                'age' => isset($data['age']) ? $data['age'] : '',
                'student_school' => isset($data['student_school']) ? $data['student_school'] : '',
                'student_syllabus' => isset($data['student_syllabus']) ? $data['student_syllabus'] : '',
                'student_image' => isset($data['student_image']) ? $data['student_image'] : '',
                'admission_date' => isset($data['admission_date']) ? $data['admission_date'] : '',
                'doj' => isset($data['doj']) ? $data['doj'] : '',
                'student_class' => isset($data['student_class']) ? $data['student_class'] : '',
                'course' => isset($data['course']) ? $data['course'] : '',
                'father_name' => isset($data['father_name']) ? $data['father_name'] : '',
                'mother_name' => isset($data['mother_name']) ? $data['mother_name'] : '',
                'occupation' => isset($data['occupation']) ? $data['occupation'] : '',
                'mother_occupation' => isset($data['mother_occupation']) ? $data['mother_occupation'] : '',
                'father_mobile' => isset($data['father_mobile']) ? $data['father_mobile'] : '',
                'mother_mobile' => isset($data['mother_mobile']) ? $data['mother_mobile'] : '',
                'address' => isset($data['address']) ? $data['address'] : '',
                'zip_code' => isset($data['zip_code']) ? $data['zip_code'] : '',
                'city' => isset($data['city']) ? $data['city'] : '',
                'state' => isset($data['state']) ? $data['state'] : '',
               
            ];
            //print_r($input);die;
            $courseins =  json_encode($input['course']);
            $courseselect = str_replace( array( '\'', '"', '[' , ']', '"', '>' ), '', $courseins);

            if ($request->hasFile('student_image')) {
                $image = $request->file('student_image')->getClientOriginalExtension();
                $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                $imageName = 'Student' . '-' . $rand . '.' . $image;
                //print_r($imageName);die;
        
                $imagePath = $request->file('student_image')->move(public_path() . '/upload/student', $imageName);
                //print_r($imagePath);die;
                $img = Image::make($imagePath->getRealPath());
        
                
            }

            else{
                $imageName= '';
            }

            $rules = array(
                'name' => 'required',
               
                'dob' => 'required',
                //'email' => 'required',
                'city' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               if($imageName!=''){
                $studentInput = array(
                    'id' => $input['id'],
                    'firstname' => $input['name'],
                    'dob' => $input['dob'],
                    'email' => $input['email'],
                    'gender' => $input['gender'],
                    'age' => $input['age'],
                    'student_class' => $input['student_class'],
                    'student_school'=>$input['student_school'],
                    'student_syllabus' => $input['student_syllabus'],
                    'student_image' => $imageName,

                   // 'admission_no' => $input['admission_no'],
                    'admission_date' => $input['admission_date'],
                    'doj'=>$input['doj'],
                    //'course' => $courseselect,


                    'father_name'=>$input['father_name'],
                    'mother_name' => $input['mother_name'],
                    'occupation' => $input['occupation'],
                    'mother_occupation' => $input['mother_occupation'],
                    'father_mobile'=>$input['father_mobile'],
                    'mother_mobile'=>$input['mother_mobile'],
                    'address' => $input['address'],
                    'zip_code' => $input['zip_code'],
                    'city'=>$input['city'],
                    'state'=>$input['state'],
                    'status'=>1,                   
                );
            }else{
                $studentInput = array(
                    'id' => $input['id'],
                    'firstname' => $input['firstname'],
                    'lastname' => $input['lastname'],
                    'dob' => $input['dob'],
                    'email' => $input['email'],
                    'gender' => $input['gender'],
                    'age' => $input['age'],
                    'student_class' => $input['student_class'],
                    'student_school'=>$input['student_school'],
                    'student_syllabus' => $input['student_syllabus'],
                    //'student_image' => $imageName,

                   // 'admission_no' => $input['admission_no'],
                    'admission_date' => $input['admission_date'],
                    'doj'=>$input['doj'],
                    //'course' => $courseselect,


                    'father_name'=>$input['father_name'],
                    'mother_name' => $input['mother_name'],
                    'occupation' => $input['occupation'],
                    'mother_occupation' => $input['mother_occupation'],
                    'father_mobile'=>$input['father_mobile'],
                    'mother_mobile'=>$input['mother_mobile'],
                    'address' => $input['address'],
                    'zip_code' => $input['zip_code'],
                    'city'=>$input['city'],
                    'state'=>$input['state'],
                    'status'=>1,                   
                );
            }
                $studentid = $this->admission->saveStudent($studentInput);
                $course = $data['course'];
                dd($course);
                $temp = array();
                if ($course) {

                    foreach ($course as $key => $value) {
                            
                        $coursedetails=DB::table('acme-course')->where('id',$value)->first();
                        $courseid=$coursedetails->id;
                        $coursename=$coursedetails->coursename;

                        $batchdetails=DB::table('batch_schedule')->where('course_id',$value)->first();
                        //dd($batchdetails);
                        $batch_name=$batchdetails->batch_name;
                        $start_time=$batchdetails->start_time;
                        $end_time=$batchdetails->end_time;

                        $param['id'] = $input['id'];
                        $param['student_id'] = $studentid;
                        $param['course_id'] = $courseid;
                        $param['course_name'] = $coursename;
                        $param['batch_name'] = $batch_name;
                        $param['start_time'] = $start_time;
                        $param['end_time'] = $end_time;
                       
                      
                        $this->course->courseLines($param);
                    }
                }
               if ($studentid) {
                    $cCode = sprintf("%04d", $studentid);
                    $admissionno="ACME".$cCode;
                    $admission_no = array(
                    'admission_no'=>$admissionno
                    );
                    $updateadmission = DB::table('acme-student')->where('id',$studentid)->update($admission_no);
                    return Response::json([
                    'status' => 1,
                    'message' => 'Successfully Created',
                    'studentid'=>$studentid
                        ], 200);
                } else {
                    return Response::json([
                                'status' => 0,
                                'message' => 'Please provide valid details'
                                    ], 200);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

    public function getenquirylist() 
    { 
        $enquiryrs = DB::table('acme-enquiry')->where('status',1)->get(); 
        if ($enquiryrs) {
            return Response::json([
                'status' => 1,
                'enquiry'   => $enquiryrs,
            ], 200);} else {
            return Response::json([
                'status'  => 1,
                'message' => 'enquiry not fount',
            ], 200);
        }
    } 
    public function getenquiry(Request $request) 
    { 
        $id=$request->id;
        $enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first(); 
        if ($enquiryrs) {
            return Response::json([
                'status' => 1,
                'enquiry'   => $enquiryrs,
            ], 200);} else {
            return Response::json([
                'status'  => 1,
                'message' => 'enquiry not fount',
            ], 200);
        }
    } 
}