@extends('backend.default')
@section('content')
<section class="content">

 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Payment Details
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <strong> Student Name</strong><br><br>
        <strong> Course Name</strong><br><br>
        <strong> Course Batch</strong><br><br>
        <strong> Course Price</strong><br><br>
        <strong> Discount</strong><br><br>
        <strong> Payment Mode</strong><br><br>
        <strong> Payemnt Description</strong><br><br>
        <strong> Comments</strong><br><br>
      
        </div>
      
        <div class="col-sm-4 invoice-col">
        {{$coursers->studentname}}   <br><br>
        {{$coursers->coursename}}   <br><br>
        {{$coursers->batch_name}}->{{$coursers->start_time}}-{{$coursers->end_time}}   <br><br>
        {{ $coursers->course_price }}   <br><br>
        {{$coursers->discount}}   <br><br>
        {{ $coursers->payment_mode}}   <br><br>
        {{$coursers->payment_desc}}  <br><br>
        {{$coursers->comments}}   <br><br>
       
        </div>
       
     
      </div>
     

      

     
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{url('backend/studentcourse')}}"  class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
          
        </div>
      </div>
    </section>
<section>
@stop