@extends('admin.default')
@section('content')
<style>
 h4 {
   text-align: center;  
   }
  
</style>
<div class="container">
   <div id="accordion">
      <div class="row">
         <div class="col-lg-12">
            <div class="text-center">
               <h1 class="text-info">ACME LEARNING</h1>
            </div>
         </div>
      </div>
      <div class="container">
      <div class="card">
      <form action="{{url('admin/addstudent')}}" method="post" id="addstudent" enctype="multipart/form-data">
                    {{ csrf_field() }}
         <div class="container">
         <div class="tab">
         <input type="text" name="id" class="form-control"  value="{{$studentrs->id}}" />
      <h4 >Student Details</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">First Name</label>
               <input type="text" name="firstname" class="form-control" value="{{$studentrs->firstname}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Last Name</label>
               <input type="text" name="lastname" class="form-control" value="{{$studentrs->lastname}}"  required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Birth</label>
               <input type="text" name="dob" class="form-control" value="{{$studentrs->dob}}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Email</label>
               <input type="text" name="email" class="form-control" value="{{$studentrs->email}}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label for="gender">Gender</label><br>
               <select class="form-control" name="gender" value="{{$studentrs->gender}}">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Age</label>
               <input type="text" class="form-control"  name=" age" value="{{$studentrs->age}}" maxlength="3" pattern="[0-9]{0,3}" title="Age should only contain numbers" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Blood Group</label>
               <input type="text" class="form-control" name=" bloodgroup"  value="{{$studentrs->bloodgroup}}" required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Religion</label><br>
               <select name="religion" class="form-control"  value="{{$studentrs->religion}}" >
                  <option value="hindu">Hindu</option>
                  <option value="muslem">Muslem</option>
                  <option value="christian">Christian</option>
               </select>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group">
               <label class="control-label">Upload Photo</label>
               <img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px">

               <input type="file" class="form-control" name=" student_image"   required  />
            </div>
         </div>
      </div>
   </div>
   <div class="tab">
      <h4>Addmission Detail</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Admission Number</label>
               <input type="text" name="admission_no" class="form-control" value="{{$studentrs->admission_no}}"  title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Admission Date</label>
               <input type="text" name="admission_date" class="form-control" value="{{$studentrs->admission_date}}"  title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Joining</label>
               <input type="text" name="doj" class="form-control"  value="{{$studentrs->doj}}"   title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Email</label>
               <input type="text" name="school_email" class="form-control"  value="{{$studentrs->school_email}}"  title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
   </div>
   <div class="tab">
      <h4 >Personel Details</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Father Name</label>
               <input type="text" name="father_name" class="form-control"  value="{{$studentrs->father_name}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Mother Name</label>
               <input type="text" name="mother_name" class="form-control" value="{{$studentrs->mother_name}}"   required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Occupation</label>
               <input type="text" name="occupation" class="form-control"  value="{{$studentrs->occupation}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Mobile</label>
               <input type="text" name="father_mobile" class="form-control" value="{{$studentrs->father_mobile}}"   title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label for="gender">Address</label><br>
               <input type="text" name="address" class="form-control" value="{{$studentrs->address}}"  required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">City</label>
               <input type="text" class="form-control"  name=" city" value="{{$studentrs->city}}"   title="Age should only contain numbers" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">State</label>
               <input type="text" class="form-control"  name=" state" value="{{$studentrs->state}}"    title="Age should only contain numbers" />
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="pull-right">
            <button type="button" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
            <a class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</a>
         </div>
      </div>
   </div>
   </form>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    alert('click');
       //var data  = $('#addstudent').serializeArray();
       var data = new FormData($('#addstudent')[0]);
       var url = "{{url('admin/addstudent')}}";
     $.ajax({
           type:'POST',
           url:url,
           data:data,
           dataType: "json",
           processData: false,
           contentType: false,
           async:true,
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           success:function(response){
               // console.log(response);
               if(response.status='1')
               
               {
                   console.log(response);
                   window.location.href = "{{ url('admin/studentdetails') }}";
                 
               }
        }
     });
   });

</script>

@stop