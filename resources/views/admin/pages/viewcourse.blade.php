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
      <strong>View Course Details</strong> 
   </div>
   <div class="card-body card-block">
      <div class="container">
         <table class="table table-borderless table-condensed table-hover" border="0" style="border:0px;" cellspacing="0" cellpadding="0">
            <thead>
               <tr>
                  <th>Student Details</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Course Code</td>
                  <td>{{$coursers->coursecode}}</td>
               </tr>
               <tr>
                  <td>Course Name</td>
                  <td>{{$coursers->coursename}}</td>
               </tr>
               <tr>
                  <td>description</td>
                  <td>{{$coursers->description}}</td>
               </tr>
               <tr>
                  <td>startdate</td>
                  <td >{{$coursers->startdate}}</td>
               </tr>
               <tr>
                  <td>End Date</td>
                  <td >{{$coursers->enddate}}</td>
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