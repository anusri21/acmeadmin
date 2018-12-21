<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function home()
    {
       
        return view('auth.login');
    }
    public function staffdashboard()
    {
       
        return view('staff.pages.dashboard');
    }
    public function admindashboard()
    {
       
        return view('admin.pages.dashboard');
    }
    public function staffdetails()
    {
       
        return view('admin.pages.staffdetails');
    }
    public function studentdetails()
    {
        $studentrs = DB::table('acme-student')->where('status',1)->get();
       // dd($studentrs);
        return view('admin.pages.studentdetails')->with('studentrs',$studentrs);
    }
    public function createstaff()
    {
       // $staffrs = DB::table('staff')->get();
        //dd($staffrs);
        return view('admin.pages.createstaff');
    }
    public function createstudent()
    {
        $course = DB::table('acme-course')->get();
        return view('admin.pages.createstudent')->with('course',$course);
    }
    public function editstudent($id)
    {
        $studentrs = DB::table('acme-student')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editstudent')->with('studentrs',$studentrs);
    }

    public function deletestudent($id)
    {
        //dd($id);
        $student = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatestudent=DB::table('acme-student')->where('id', $id)->update($student);

        if($updatestudent){
            
            return redirect('admin/studentdetails');
        }
        else{
            return redirect('admin/studentdetails');
        }
    }
    public function viewstudent($id)
    {
        //dd($id);
        $studentrs = DB::table('acme-student')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.viewstudent')->with('studentrs',$studentrs);
    }
    public function addcourse()
    {
       // $coursers = DB::table('acme-course')->get();
        //dd($coursers);
        return view('admin.pages.addcourse');
    }
    public function courselist()
    {
        $coursers = DB::table('acme-course')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.courselist')->with('coursers',$coursers);
    }
    public function viewcourse($id)
    {
        //dd($id);
        $coursers = DB::table('acme-course')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.viewcourse')->with('coursers',$coursers);
    }
    public function deletecourse($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('acme-course')->where('id', $id)->update($course);

        if($updatecourse){
            
            return redirect('admin/courselist ');
        }
        else{
            return redirect('admin/courselist');
        }
    }
    public function editcourse($id)
    {
        $coursers = DB::table('acme-course')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editcourse')->with('coursers',$coursers);
    }
    public function addenquiry()
    {
       // $coursers = DB::table('acme-course')->get();
        //dd($coursers);
        return view('admin.pages.addenquiry');
    }
    public function enquirylist()
    {
        $enquiryrs = DB::table('acme-enquiry')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.enquirylist')->with('enquiryrs',$enquiryrs);
    }
    public function viewenquiry($id)
    {
        //dd($id);
        $enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.viewenquiry')->with('enquiryrs',$enquiryrs);
    }
    public function deleteenquiry($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('acme-enquiry')->where('id', $id)->update($course);

        if($updatecourse){
            
            return redirect('admin/enquirylist ');
        }
        else{
            return redirect('admin/enquirylist');
        }
    }
    public function editenquiry($id)
    {
        $enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editenquiry')->with('enquiryrs',$enquiryrs);
    }

    public function payment()
    {
        //$coursers = DB::table('acme-course')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.payment');
    }
    public function paymentlist()
    {
        $paymentrs = DB::table('acme-payment')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.paymentlist')->with('paymentrs',$paymentrs);
    }
    public function viewpayment($id)
    {
        //dd($id);
        $paymentrs = DB::table('acme-payment')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.viewpayment')->with('paymentrs',$paymentrs);
    }
    public function deletepayment($id)
    {
        //dd($id);
        $paymentrs = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatepaymentrs=DB::table('acme-payment')->where('id', $id)->update($paymentrs);

        if($updatepaymentrs){
            
            return redirect('admin/paymentlist ');
        }
        else{
            return redirect('admin/paymentlist');
        }
    }
    public function editpayment($id)
    {
        $paymentrs = DB::table('acme-payment')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editpayment')->with('paymentrs',$paymentrs);
    }
    public function payexpense()
    {
        //$coursers = DB::table('acme-course')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.payexpense');
    }
    public function income()
    {
        //$coursers = DB::table('acme-course')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.income');
    }

    public function expenselist()
    {
        $paymentrs = DB::table('acme-payment')->where('status',1)->get();
        //dd($coursers);
        return view('admin.pages.paymentlist')->with('paymentrs',$paymentrs);
    }
    public function viewexpense($id)
    {
        //dd($id);
        $paymentrs = DB::table('acme-payment')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.viewpayment')->with('paymentrs',$paymentrs);
    }
    public function editexpense($id)
    {
        //dd($id);
        $paymentrs = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatepaymentrs=DB::table('acme-payment')->where('id', $id)->update($paymentrs);

        if($updatepaymentrs){
            
            return redirect('admin/paymentlist ');
        }
        else{
            return redirect('admin/paymentlist');
        }
    }
    public function deleteexpense($id)
    {
        $paymentrs = DB::table('acme-payment')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editpayment')->with('paymentrs',$paymentrs);
    }


public function mail()
{
   $name = 'Krunal';
   Mail::to('anusrimariyappan@gmail.com')->send(new SendMailable($name));
   
   return 'Email was sent';
}

}
