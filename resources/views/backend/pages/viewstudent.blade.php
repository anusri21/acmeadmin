@extends('backend.default')
@section('content')
<style>
h4{
  color:red;
}
</style>
<section class="content">

 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Student Details
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <h4><b>Student Details</b></h4>
        <strong> First Name</strong><br><br>
        <!-- <strong> Last Name</strong><br><br> -->
        <strong> Date Of Birth</strong><br><br>
        <strong> Email</strong><br><br>
        <strong>Gender</strong><br><br>
        <strong> Age</strong><br><br>
        <strong> Student School</strong><br><br>
        <strong> Student Class</strong><br><br>
        <strong> Student Syllabus</strong><br><br>

        <h4><b>Admission Details</b></h4>

        <strong> Admission Number</strong><br><br>
        <strong> Admission Date</strong><br><br>
        <strong> Date Of Joining</strong><br><br>
       
        @foreach($coursers as $value)
         <h4><b>Course Details</b></h4>
         
         <strong> Course Name</strong><br><br>
         <strong> Course Price</strong><br><br>
         <strong> Discount</strong><br><br>
         <strong> Payment Mode</strong><br><br>
         <strong> Payment Description</strong><br><br>
         <strong> Course Batch</strong><br><br>
         @endforeach
         <br><br>
        <h4><b>Personal Details</b></h4>

        <strong> Father Name</strong><br><br>
        <strong>Mother Name</strong><br><br>
        <strong> Father Occupation</strong><br><br>
        <strong> Mother Occupation</strong><br><br>
        <strong> Father Mobile</strong><br><br>
        <strong> Mother Mobile</strong><br><br>
        <strong>Address</strong><br><br>
        <strong>Zip Code</strong><br><br>
        <strong>City</strong><br><br>
        <strong>State</strong><br><br>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        <br> <br>
        {{ $studentrs->firstname}}   <br><br>
        {{ $studentrs->dob}}   <br><br>
        {{ $studentrs->email}}   <br><br>
        {{ $studentrs->gender}}   <br><br>
        {{ $studentrs->age}}   <br><br>
        {{$studentrs->student_school}}  <br><br>
        {{$studentrs->student_class}}   <br><br>
        {{$studentrs->student_syllabus}}   <br><br>
        <br> <br>
        {{ $studentrs->admission_no}}   <br><br>
        {{ $studentrs->admission_date}}   <br><br>
        {{ $studentrs->doj}}   <br><br>
        <br> <br>
        
        @foreach($coursers as $value)
        <div >
        {{ $value->coursename}}   <br><br>
        {{ $value->course_price}}   <br><br>
        {{ $value->discount}}   <br><br>
        {{ $value->payment_mode}}   <br><br>
        {{ $value->payment_desc}}   <br><br>
        {{ $value->batch_name}}->{{ $value->start_time}}-{{ $value->end_time}}  <br><br>
        </div>
        @endforeach
         <br><br><br><br><br><br> 
        {{ $studentrs->father_name}}   <br><br>
        {{ $studentrs->mother_name}}   <br><br>
        {{ $studentrs->occupation}}   <br><br>
        {{ $studentrs->mother_occupation}}   <br><br>
        {{ $studentrs->father_mobile}}   <br><br>
        {{ $studentrs->mother_mobile}}   <br><br>
        {{ $studentrs->address}}   <br><br>
        {{ $studentrs->zip_code}}   <br><br>
        {{ $studentrs->city}}   <br><br>
        {{ $studentrs->state}}   <br><br>

        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        <img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px">

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      

     
      <!-- this row will not appear when printing -->
       <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{url('backend/studentdetails')}}"  class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
        </div>
      </div>
    </section>
<section>
@stop