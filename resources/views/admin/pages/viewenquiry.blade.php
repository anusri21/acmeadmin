@extends('admin.default')
@section('content')
<style>
   .lbl{
   font-weight:20px;
   }
   table {
     border: none;
     border-collapse: collapse;
   }
</style>
<div class="col-lg-12">
<div class="card">
   <div class="card-header">
      <strong>View Enquiry Details</strong> 
   </div>
   <div class="card-body card-block">
      <div class="container">
         <table class="table table-borderless table-condensed table-hover" border="0" style="border:0px;" cellspacing="0" cellpadding="0">
            <thead>
               <tr>
                  <th>Enquiry Details</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Name</td>
                  <td>{{$enquiryrs->name}}</td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td>{{$enquiryrs->email}}</td>
               </tr>
               <tr>
                  <td>Phone</td>
                  <td>{{$enquiryrs->phone}}</td>
               </tr>
               <tr>
                  <td>Alternate Phone</td>
                  <td >{{$enquiryrs->alternate_phone}}</td>
               </tr>
               <tr>
                  <td>Course</td>
                  <td >{{$enquiryrs->course}}</td>
               </tr>
               <tr>
                  <td>Enquiry For </td>
                  <td >{{$enquiryrs->enquiry}}</td>
               </tr>
               <tr>
                  <td>Address</td>
                  <td >{{$enquiryrs->address}}</td>
               </tr>
               <tr>
                  <td>Comments</td>
                  <td >{{$enquiryrs->comments}}</td>
               </tr>
                           </tbody>
         </table>
      </div>
   </div>
   <!-- <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
      </button>
      <button type="reset" class="btn btn-danger btn-sm">
        <i class="fa fa-ban"></i> Reset
      </button>
      </div> -->
</div>
@stop