@extends('backend.default')
@section('content')
<section class="content">

 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Enquiry Details
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <strong> Name</strong><br><br>
        <strong> Email</strong><br><br>
        <strong> Phone</strong><br><br>
        <strong> Alternate Phone</strong><br><br>
        <strong>Course</strong><br><br>
        <strong> Enquiry For</strong><br><br>
        <strong> Joining Date</strong><br><br>
        <strong>Address</strong><br><br>
        <strong> Reference</strong><br><br>
        <strong> Comments</strong><br><br>
        <!-- <strong> Date Of Joining</strong><br><br>
        <strong> Father Name</strong><br><br>
        <strong>Mother Name</strong><br><br>
        <strong> Father Occupation</strong><br><br>
        <strong> Father Mobile</strong><br><br>
        <strong>Address</strong><br><br>
        <strong>City</strong><br><br> -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        {{$enquiryrs->name}}   <br><br>
        {{$enquiryrs->email}}   <br><br>
        {{$enquiryrs->phone}}  <br><br>
        {{$enquiryrs->alternate_phone}}  <br><br>
        {{$enquiryrs->course}}  <br><br>
        {{$enquiryrs->enquiry}}   <br><br>
        {{$enquiryrs->doj}}   <br><br>
        {{$enquiryrs->address}}   <br><br>
        {{$enquiryrs->reference}}  <br><br>
        {{$enquiryrs->comments}}  <br><br>
       

        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      

     
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href=" {{url('backend/enquirylist')}}"  class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment -->
          <!-- </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
        </div>
      </div>
    </section>
<section>
@stop