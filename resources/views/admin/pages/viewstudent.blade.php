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
      <strong>View Student Details</strong> 
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
                  <td>First Name</td>
                  <td>{{$studentrs->firstname}}</td>
                  <td><img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px"></td>
               </tr>
               <tr>
                  <td>Last Name</td>
                  <td>{{$studentrs->lastname}}</td>
               </tr>
               <tr>
                  <td>Date Of Birth</td>
                  <td>{{$studentrs->dob}}</td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td >{{$studentrs->email}}</td>
               </tr>
               <tr>
                  <td>Gender</td>
                  <td >{{$studentrs->gender}}</td>
               </tr>
               <tr>
                  <td >Age</td>
                  <td>{{$studentrs->age}}</td>
               </tr>
               <tr>
                  <td>Blood Group</td>
                  <td >{{$studentrs->bloodgroup}}</td>
               </tr>
               <tr>
                  <td>Religion</td>
                  <td>{{$studentrs->religion}}</td>
               </tr>
               <tr>
                  <td>Admission Number</td>
                  <td >{{$studentrs->admission_no}}</td>
               </tr>
               <tr>
                  <td>Admission Date</td>
                  <td >{{$studentrs->admission_date}}</td>
               </tr>
               <tr>
                  <td>Date Of Joining</td>
                  <td >{{$studentrs->doj}}</td>
               </tr>
               <tr>
                  <td>Father Name</td>
                  <td >{{$studentrs->father_name}}</td>
               </tr>
               <tr>
                  <td>Mother Name</td>
                  <td >{{$studentrs->mother_name}}</td>
               </tr>
               <tr>
                  <td>Father Occupation</td>
                  <td >{{$studentrs->occupation}}</td>
               </tr>
               <tr>
                  <td>Father Mobile</td>
                  <td >{{$studentrs->father_mobile}}</td>
               </tr>
               <tr>
                  <td>Address</td>
                  <td >{{$studentrs->address}}</td>
               </tr>
               <tr>
                  <td>City</td>
                  <td >{{$studentrs->city}}</td>
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