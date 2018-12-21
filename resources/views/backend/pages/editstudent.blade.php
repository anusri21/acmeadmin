@extends('backend.default')
@section('content')
<style>
h4{
  color:red;
}
</style>
<section class="content">
<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
   
   <!-- /.box-header -->
   <div class="box-body">
      <div class="row">
      <form action="{{url('admin/editstudent')}}" method="post" id="addstudent" enctype="multipart/form-data">
                    {{ csrf_field() }}
         <div class="container">
         <div class="tab">
         <input type="hidden" name="id" class="form-control"  value="{{$studentrs->id}}" />
      <h4><b>Edit Student Details</b></h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Name</label>
               <input type="text" name="firstname" class="form-control" value="{{$studentrs->firstname}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
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
               <label class="control-label">Date Of Birth</label>
               <input type="date" name="dob" class="form-control" value="{{$studentrs->dob}}" title="FirstName should only contain letters" />
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
               <label for="gender">Gender</label><br>
               <select class="form-control" name="gender" value="{{$studentrs->gender}}">
               <option value="<?php echo $studentrs->gender;?>" <?php echo ($studentrs->gender) ? ' selected="selected"' : '';?>><?php echo $studentrs->gender;?></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Student School</label>
               <input type="text" class="form-control"  name=" student_school" value="{{$studentrs->student_school}}" maxlength="3" pattern="[0-9]{0,3}" title="Age should only contain numbers" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Student Class</label>
               <input type="text" class="form-control" name=" student_class"  value="{{$studentrs->student_class}}" required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Student Syllabus</label><br>
               <input type="text" class="form-control" name=" student_syllabus"  value="{{$studentrs->student_syllabus}}" required  />

            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Upload Photo</label>

               <input type="file" class="form-control" name=" student_image"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Photo</label><br>
               <img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px">

            </div>
         </div>
      </div>
   </div>
   <div class="tab">
      <h4><b>Addmission Detail</b></h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Admission Number</label>
               <input type="text" name="admission_no" class="form-control" value="{{$studentrs->admission_no}}"  readonly />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Admission Date</label>
               <input type="date" name="admission_date" class="form-control" value="{{$studentrs->admission_date}}"  title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Joining</label>
               <input type="date" name="doj" class="form-control"  value="{{$studentrs->doj}}"   title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Course</label>
               <select name="course[]" id="multiple-select" multiple="" class="form-control" >
               <option value="<?php echo $coursedetail->course_id;?>" <?php echo ($coursedetail->course_id) ? ' selected="selected"' : '';?>><?php echo $coursedetail->coursename;?></option>
                  @foreach ($course as $val)
                  <option value="{{$val->id}}">{{$val->coursename}}</option>
                  @endforeach
               </select>
                           
                </div>
         </div>
      </div>
   </div>
   
   <div class="tab">
      <h4 ><b>Personel Details</b></h4>
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
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Mother Occupation</label>
               <input type="text" name="mother_occupation" class="form-control"  value="{{$studentrs->mother_occupation}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
     </div>
     <div class="row">
     <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Mobile</label>
               <input type="text" name="father_mobile" class="form-control" value="{{$studentrs->father_mobile}}"   title="Lastname should only contain letters"/>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Mother Mobile</label>
               <input type="text" name="mother_mobile" class="form-control" value="{{$studentrs->mother_mobile}}"   title="Lastname should only contain letters"/>
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
               <label class="control-label">Zip Code</label>
               <input type="text" class="form-control"  name=" zip_code" value="{{$studentrs->zip_code}}"   title="Age should only contain numbers" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label for="gender">City</label><br>
               <input type="text" name="city" class="form-control" value="{{$studentrs->city}}"  required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">State</label>
               <input type="text" class="form-control"  name=" state" value="{{$studentrs->state}}"   title="Age should only contain numbers" />
            </div>
         </div>
      </div>
   </div>
 <button type="button" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
   </form>
   </div>
   </div>
   </div>
   </div>
  
<section>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    //alert('click');
       //var data  = $('#addstudent').serializeArray();
       var data = new FormData($('#addstudent')[0]);
       var url = "{{url('admin/editstudent')}}";
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
                   window.location.href = "{{ url('backend/studentdetails') }}";
                 
               }
        }
     });
   });

</script>


@stop