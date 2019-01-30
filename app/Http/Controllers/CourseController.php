<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Validator;
use Response;
use DB;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class CourseController extends Controller
{
    public function __construct() {
        $this->course = new Course();
    }
    public function addcourse(Request $request)
    {
        $data=$request->all();
        // dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'coursecode' => isset($data['coursecode']) ? $data['coursecode'] : '',
                'coursename' => isset($data['coursename']) ? $data['coursename'] : '',
                'category' => isset($data['category']) ? $data['category'] : '',
              
                'description' => isset($data['description']) ? $data['description'] : '',
                'startdate' => isset($data['startdate']) ? $data['startdate'] : '',
                'enddate' => isset($data['enddate']) ? $data['enddate'] : '',
                
            ];
           
           

            $rules = array(
                'coursecode' => 'required',
                'coursename' => 'required',
                'category'   => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $courseInput = array(
                    'id' => $input['id'],
                    'coursecode' => $input['coursecode'],
                    'coursename' => $input['coursename'],
                    'category' => $input['category'],
                    'description'=>$input['description'],
                    'startdate' => $input['startdate'],
                    'enddate' => $input['enddate'],
                    'status'=>1,
                   
                );
                $courseid = $this->course->saveCourse($courseInput);
               
               if ($courseid) {
                   
                return redirect('backend/courselist');
                } else {
                    return Response::json([
                                'status' => 0,
                                'message' => 'Please provide valid details'
                                    ], 400);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
     
    }

    public function addcoursecategory(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',  
            ];
           
            $rules = array(
                'category' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'category' => $input['category'],
                    'status'=>1
                );
                //dd($dataInput);
                $bannerid = $this->course->savecourseCategory($dataInput);
              
               if ($bannerid) {
                   
                return redirect('backend/addcoursecategory');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

    public function addbatch(Request $request)
    {
        $data=$request->all();
      
      
        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'course_id' => isset($data['course_id']) ? $data['course_id'] : '',  
                'batch_name' => isset($data['batch_name']) ? $data['batch_name'] : '',  
                'start_time' => isset($data['start_time']) ? $data['start_time'] : '',
                'end_time' => isset($data['end_time']) ? $data['end_time'] : '',  

            ];
           
            $rules = array(
                'batch_name' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
                $cid=$input['course_id'];
                   //dd($cid);
                $dataInput = array(
                    'id' => $input['id'],
                    'course_id'=>$input['course_id'],
                    'batch_name' => $input['batch_name'],
                    'start_time' => $input['start_time'],
                    'end_time' => $input['end_time'],
                    'status'=>1
                   
                );
               // dd($dataInput);
                $schedule = $this->course->savebatchschedule($dataInput);
              
               if ($schedule) {
              
                    return Response::json([
                        'status' => 1,
                        'cid' => $cid
                    ]);
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }
    public function addcoursedetails(Request $request)
    {
        $data=$request->all();
       

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'student_id' => isset($data['student_id']) ? $data['student_id'] : '',  
                'course_id' => isset($data['course_id']) ? $data['course_id'] : '',  
                'course_price' => isset($data['course_price']) ? $data['course_price'] : '',
                'payment_mode' => isset($data['payment_mode']) ? $data['payment_mode'] : '', 
                'course_batch' => isset($data['course_batch']) ? $data['course_batch'] : '',  
                'discount' => isset($data['discount']) ? $data['discount'] : '',  
                'payment_desc' => isset($data['payment_desc']) ? $data['payment_desc'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',  

            ];
          // dd($input);

            $rules = array(
                'course_price' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
                
                $arrcloop = $input['course_id'];
                $arrCprice = $input['course_price'];
                $arrpmode = $input['payment_mode'];
                $arrbacth = $input['course_batch'];
                $arrdiscount = $input['discount'];
                $arrpaydesc = $input['payment_desc'];
                $arrpaycomments = $input['comments'];


                //print_r($arrcloop);
               // die;

                for($i=0;$i<count($arrcloop);$i++){
                    $dataInput = [];
                    $dataInput = array(
                        'id' => $input['id'],
                        'student_id'=>$input['student_id'],
                        'course_id' => $arrcloop[$i],
                        'course_price' => $arrCprice[$i],
                        'payment_mode' => $arrpmode[$i],
                        'course_batch'=> $arrbacth[$i],
                        'discount' => $arrdiscount[$i],
                        'payment_desc' => $arrpaydesc[$i],
                        'comments' => $arrpaycomments[$i],
                       'status'=>1,
                    );
                    //dd($dataInput);
                    $course = $this->course->savecoursedetails($dataInput);

                }
               if ($course) {
                   
                return redirect('backend/studentdetails');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }
    public function editstudentcourse(Request $request)
    {
        $data=$request->all();
       
        //dd($data);
        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'student_id' => isset($data['student_id']) ? $data['student_id'] : '',  
                'course_id' => isset($data['course_id']) ? $data['course_id'] : '',  
                'course_price' => isset($data['course_price']) ? $data['course_price'] : '',
                'payment_mode' => isset($data['payment_mode']) ? $data['payment_mode'] : '', 
                'course_batch' => isset($data['course_batch']) ? $data['course_batch'] : '',  
                'discount' => isset($data['discount']) ? $data['discount'] : '',  
                'payment_desc' => isset($data['payment_desc']) ? $data['payment_desc'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',  

            ];
          // dd($input);

            $rules = array(
                'course_price' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
               
                    $dataInput = array(
                        'id' => $input['id'],
                        'student_id'=>$input['student_id'],
                        'course_id' => $input['course_id'],
                        'course_price' => $input['course_price'],
                        'payment_mode' => $input['payment_mode'],
                        'course_batch'=> $input['course_batch'],
                        'discount' => $input['discount'],
                        'payment_desc' => $input['payment_desc'],
                        'comments' => $input['comments'],
                       
                    );
                    //dd($dataInput);
                $course = $this->course->savecoursedetails($dataInput);
               if ($course) {
                   
                return redirect('backend/studentcourse');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }
    public function addcat(Request $request)
    {
        $data=$request->all();
      
        //dd($data);
        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',  
                

            ];
           
            $rules = array(
                'category' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'category'=>$input['category'], 
                );
             
                $category = $this->course->savepdfcat($dataInput);
              
               if ($category) {
              
                    return Response::json([
                        'status' => 1,
                        'message' => 'Successfully Added'
                    ]);
                } else {
                    $data = Session::flash('error', 'Please Provide All Datas!');
                        return Redirect::back()
                        ->withInput()
                        ->withErrors($data);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }
    public function editcat($id)
    {
        $pdfcat = DB::table('acme-pdfcatgeory')->where('id',$id)->first();
        if($pdfcat){
            return Response::json([
                'status' => 1,
                'pdfcat' => $pdfcat,
                    ], 200);
        }else{
            return Response::json([
                'status' => 0,
                'message' => 'Not Selected'
                    ], 400);
        }

    }
    public function addpdf(Request $request)
    {
        $data=$request->all();
      
        //dd($data);
        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'pdf_category' => isset($data['pdf_category']) ? $data['pdf_category'] : '',  
                'pdf_title' => isset($data['pdf_title']) ? $data['pdf_title'] : '',  
                'pdf_desc' => isset($data['pdf_desc']) ? $data['pdf_desc'] : '',  
                'pdf' => isset($data['pdf']) ? $data['pdf'] : '',  
                

            ];
           //dd($input);
            if ($request->hasFile('pdf')) {
                $pdffile = $request->file('pdf')->getClientOriginalExtension();
                $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                $pdfName = 'Pdf' . '-' . $rand . '.' . $pdffile;
                //print_r($imageName);die;
        
                $pdfPath = $request->file('pdf')->move(public_path() . '\upload\pdf', $pdfName);
                //print_r($pdfPath);die;
                //$img = Image::make($imagePath->getRealPath());
                $url = URL::to("/");
                $pdfurl = $url.'/public/upload/pdf/' . $pdfName;
               // dd($pdfurl);
            }
            
            else{
                $pdfName= '';
            }
            //dd($pdfName);
            $rules = array(
                'pdf_category' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'pdf_category'=>$input['pdf_category'], 
                    'pdf_title'=>$input['pdf_title'], 
                    'pdf_desc'=>$input['pdf_desc'], 
                    'pdf_path'=>$pdfurl,
                    'pdf'=>$pdfName 
                );
             
                $addpdf = $this->course->savepdf($dataInput);
              
               if ($addpdf) {
              
                $data = Session::flash('message', 'Successfully Added!');
                return Redirect::back()->with(['data', $data], ['message', $data]);

                } else {
                    $data = Session::flash('error', 'Please Provide All Datas!');
                        return Redirect::back()
                        ->withInput()
                        ->withErrors($data);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

    public function getpdfcategory($id)
    {
        $pdfcat = DB::table('acme-pdf')->where('pdf_category',$id)->get();
        if($pdfcat){
            return Response::json([
                'status' => 1,
                'pdf' => $pdfcat,
                    ], 200);
        }else{
            return Response::json([
                'status' => 1,
                'message' => 'Not Selected'
                    ], 200);
        }

    }
    public function getpdf($id)
    {
        $pdfcat = DB::table('acme-pdf')->where('id',$id)->first();
        if($pdfcat){
            return Response::json([
                'status' => 1,
                'pdf' => $pdfcat,
                    ], 200);
        }else{
            return Response::json([
                'status' => 1,
                'message' => 'Not Selected'
                    ], 200);
        }

    }
    public function saveeditpdf(Request $request)
    {
        $data=$request->all();
      
        //dd($data);
        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'pdf_category' => isset($data['pdf_category']) ? $data['pdf_category'] : '',  
                'pdf_title' => isset($data['pdf_title']) ? $data['pdf_title'] : '',  
                'pdf_desc' => isset($data['pdf_desc']) ? $data['pdf_desc'] : '',  
                'pdf' => isset($data['pdf']) ? $data['pdf'] : '',  
                

            ];
           //dd($input);
            if ($request->hasFile('pdf')) {
                $pdffile = $request->file('pdf')->getClientOriginalExtension();
                $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                $pdfName = 'Pdf' . '-' . $rand . '.' . $pdffile;
                //print_r($imageName);die;
        
                $pdfPath = $request->file('pdf')->move(public_path() . '\upload\pdf', $pdfName);
                //print_r($pdfPath);die;
                //$img = Image::make($imagePath->getRealPath());
                $url = URL::to("/");
                $pdfurl = $url.'/public/upload/pdf/' . $pdfName;
               // dd($pdfurl);
            }
            
            else{
                $pdfName= '';
            }
            //dd($pdfName);
            $rules = array(
                'pdf_category' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'pdf_category'=>$input['pdf_category'], 
                    'pdf_title'=>$input['pdf_title'], 
                    'pdf_desc'=>$input['pdf_desc'], 
                    'pdf_path'=>$pdfurl,
                    'pdf'=>$pdfName 
                );
             
                $addpdf = $this->course->savepdf($dataInput);
              
               if ($addpdf) {
              
                return Response::json([
                    'status' => 1,
                    'data' => $addpdf
                    ]);

                } else {
                    $data = Session::flash('error', 'Please Provide All Datas!');
                        return Redirect::back()
                        ->withInput()
                        ->withErrors($data);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

}
