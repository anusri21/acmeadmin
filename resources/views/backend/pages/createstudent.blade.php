@extends('backend.default')
@section('content')
<style>
   @import url('https://fonts.googleapis.com/css?family=Open+Sans');
   /* body {
   background-color: #fff;
   color: #000;
   font-family: 'Open Sans', sans-serif;
   font-size: 14px;
   margin: 0;
   padding: 0;
   } */
   h1 {
   color: #000;
   font-size: 22px;
   text-align: center;
   margin: 0 0 50px 0;
   }
   /* .container {
   margin: 25px auto;
   max-width: 1024px;
   width: 100%;
   } */
   .accordion--form {
   /* background-color: #e5e5e5;
   padding: 50px; */
   width: 100%;
   }
   .accordion--form__fieldset {
   border: 0;
   margin: 0 0 1px 0;
   padding: 0;
   }
   .accordion--form__legend {
   background-color: #555;
   color: #fff;
   display: block;
   margin: 0;
   padding: 5px 10px;
   width: 100%;
   }
   .accordion--form__legend-active {
   background-color: #ccc;
   color: #000;
   }
   .accordion--form__wrapper {
   height: 0;
   overflow: hidden;
   }
   .accordion--form__wrapper-active {
   height: auto;
   padding: 30px 0;
   }
   .accordion--form__row {
   clear: both;
   margin-bottom: 15px;
   width: 100%;
   }
   .accordion--form__label {
   display: inline-block;
   margin-bottom: 5px;
   }
   .accordion--form__text {
   color: #000;
   font-family: 'Open Sans', sans-serif;
   font-size: 14px;
   padding: 5px 10px;
   }
   .accordion--form__textarea {
   color: #000;
   font-family: 'Open Sans', sans-serif;
   font-size: 14px;
   padding: 5px 10px;
   }
   .accordion--form__submit {
   }
   .accordion--form__invalid {
   background-color: red;
   color: #fff;
   display: none;
   margin: 20px 0;
   padding: 5px 10px;
   width: 100%;
   }
   .accordion--form__next-btn, 
   .accordion--form__prev-btn {
   background-color: #333;
   color: #fff;
   cursor: pointer;
   display: inline-block;
   margin: 0 2px 0 0;
   padding: 5px 10px;
   text-align: center;
   }
   .accordion--form__next-btn:hover, 
   .accordion--form__prev-btn:hover {
   background-color: #000;
   }
</style>
  
<section class="content">
   <!-- SELECT2 EXAMPLE -->
   <div class="box box-default">
      <div class="box-header with-border">
         <h3 class="box-title"></h3>
         <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
         </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
         <div class="row">
            <div class="col-md-12">
               <form class="accordion--form" action="{{url('admin/addstudent')}}" method="post" id="addstudent" enctype="multipart/form-data">
                  {{ csrf_field() }}
                     <h1>Add Student</h1>
                     <fieldset class="accordion--form__fieldset" id="fieldset-one">
                        <legend class="accordion--form__legend accordion--form__legend-active">Student Details</legend>
                        <div class="accordion--form__invalid">Please ensure all required fields are filled in</div>

                        <div class="accordion--form__wrapper accordion--form__wrapper-active">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Name:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="name" class="form-control" >
                                 </div>
                                 <!-- /.input group -->
                              </div>
                              <!-- /.form group -->
                              <!-- /.form-group -->
                              <div class="form-group">
                                 <label>Date of Birth:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="dob" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                    
                                 </div>
                                 <!-- /.input group -->
                              </div>
                              <!-- /.form group -->
                           </div>
                           <div class="col-md-6">
                        
                            <div class="form-group">
                                <label>Email:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-envelope-o"></i>
                                  </div>
                                  <input type="email" name="email" class="form-control"
                                      data-inputmask="'mask': 'aa@gmail.com'" data-mask>                
                                </div>
                              
                            </div>
                            <div class="form-group">
                                <label>Age:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" name="age" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                        
                           </div>
                       
                           <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <select class="form-control select2 accordion--form__text required"  name="gender" style="width: 100%;">
                                    <option selected="selected">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>                
                                </div>
                            
                            </div>
                            <div class="form-group">
                                <label>Student Calss:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="student_class" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                            </div>
                        
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                <label>Student School:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="student_school" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Student Syllabus:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="student_syllabus" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                            </div>
                            
                           </div>
                           <div class="form-group">
                                <label>Upload Image:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>
                                    <input type="file" name="student_image" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                            </div>
                           
                           <a class="accordion--form__next-btn">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="accordion--form__fieldset" id="fieldset-two">
                        <legend class="accordion--form__legend">Admission Details</legend>
                        <!-- <div class="accordion--form__invalid">Please ensure all required fields are filled in</div> -->

                        <div class="accordion--form__wrapper">
                        <div class="col-md-6">
                              <!-- <div class="form-group">
                                 <label>Admission Number:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-braille"></i>
                                    </div>
                                    <input type="text" name="admission_no" class="form-control" >
                                 </div>                                
                              </div> -->
                              <div class="form-group">
                                 <label>Date of Joining:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="doj" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                 </div>
                                 
                              </div>
                             
                           </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label>Admission Date:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="date" name="admission_date" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>                             
                            </div>
                           
                           </div>
                                <div class="form-group">
                                 <label>Course:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                    </div>
                                    <select name="course[]" id="multiple-select" multiple="" class="form-control" >
                                       @foreach ($course as $val)
                                       <option value="{{$val->id}}">{{$val->coursename}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           <a class="accordion--form__prev-btn">Prev</a>
                           <a class="accordion--form__next-btn">Next</a>
                        </div>
                     </fieldset>
                     <fieldset class="accordion--form__fieldset" id="fieldset-three">
                     <legend class="accordion--form__legend">Personal Details</legend>
                        <div class="accordion--form__wrapper">
                        <div class="col-md-6">
                              <div class="form-group">
                                 <label>Father Name:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="father_name" class="form-control" >
                                 </div>
                            
                              </div>
                         
                              <div class="form-group">
                                 <label>Father Occupation:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="occupation" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                 </div>
                     
                              </div>
                              <div class="form-group">
                                <label>Father Mobile:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-phone-square"></i>
                                  </div>
                                  <input type="text" name="father_mobile" class="form-control">                
                                </div>
                            </div>
                            <div class="form-group">
                                 <label>Address:</label>
                                 <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="fa fa-address-card"></i>
                                       </div>
                                        <input type="text" name="address" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                    </div>
                             
                               </div>
                               <div class="form-group">
                                <label>State:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-address-card"></i>
                                  </div>
                                  <input type="text" name="state" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
             
                                </div>
                            </div>
                           </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label>Mother Name:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <input type="text" name="mother_name" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                </div>
                            </div>
                            <div class="form-group">
                                 <label>Mother Occupation:</label>
                                 <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-user"></i>
                                    </div>
                                    <input type="text" name="mother_occupation" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                 </div>
                     
                              </div>
                              <div class="form-group">
                                <label>Mother Mobile:</label>
                                <div class="input-group">
                                  <div class="input-group-addon">
                                      <i class="fa fa-phone-square"></i>
                                  </div>
                                  <input type="text" name="mother_mobile" class="form-control">                
                                </div>
                            </div>
                           
                           </div>
                           <div class="col-md-6">
                           
                           <div class="form-group">
                                 <label>Zip Code:</label>
                                 <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="fa fa-address-card"></i>
                                       </div>
                                        <input type="text" name="zip_code" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                    </div>
                             
                               </div>
                            
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                                 <label>City:</label>
                                 <div class="input-group">
                                      <div class="input-group-addon">
                                         <i class="fa fa-address-card"></i>
                                       </div>
                                        <input type="text" name="city" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
                                    </div>
                             
                               </div>
                            </div>
                           <div class="accordion--form__row">
                              <input class="accordion--form__submit btn btn-primary" type="button" id="btnSubmit" name="submit" value="Submit">
                           </div>
                           <a class="accordion--form__prev-btn">Prev</a>
                           </div>
                           
                          
                        </div>
                     </fieldset>
                  </form>
               </div>
            </div>
         </div>
         <!-- /.row -->
      <!-- /.box-body -->
</section>

<script>
   //On click of the 'next' anchor
   $('.accordion--form__next-btn').on('click touchstart', function() {
   
   var parentWrapper = $(this).parent().parent();
   var nextWrapper = $(this).parent().parent().next('.accordion--form__fieldset');
   var sectionFields = $(this).siblings().find('.required');
   
   
   //Validate the .required fields in this section
   var empty = $(this).siblings().find('.required').filter(function() {
   
     return this.value === "";
   
   });
   
   if (empty.length) {
   
     $('.accordion--form__invalid').show();
   
   } else {
   
     $('.accordion--form__invalid').hide();
   
     //If valid
     //On the next fieldset -> accordion wrapper, toggle the active class
     nextWrapper.find('.accordion--form__wrapper').addClass('accordion--form__wrapper-active');
   
     //Close the others
     parentWrapper.find('.accordion--form__wrapper').removeClass('accordion--form__wrapper-active');
   
     //Add a class to the parent legend
     nextWrapper.find('.accordion--form__legend').addClass('accordion--form__legend-active');
   
     //Remove the active class from the other legends
     parentWrapper.find('.accordion--form__legend').removeClass('accordion--form__legend-active');
   
   }
   
   return false;
   });
   
   //On click of the 'prev' anchor
   $('.accordion--form__prev-btn').on('click touchstart', function() {
   
   parentWrapper = $(this).parent().parent();
   prevWrapper = $(this).parent().parent().prev('.accordion--form__fieldset');
   
   //On the prev fieldset -> accordion wrapper, toggle the active class
   prevWrapper.find('.accordion--form__wrapper').addClass('accordion--form__wrapper-active');
   
   //Close the others
   parentWrapper.find('.accordion--form__wrapper').removeClass('accordion--form__wrapper-active');
   
   //Add a class to the parent legend
   prevWrapper.find('.accordion--form__legend').addClass('accordion--form__legend-active');
   
   //Remove the active class from the other legends
   parentWrapper.find('.accordion--form__legend').removeClass('accordion--form__legend-active');
   
   
   return false;
   });
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    //alert('click');
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
                   var id = response.studentid;
                   url = "{{ url('backend/coursedetails') }}"+"/"+id;
                   window.location.href = url;
                 
               }
        }
     });
   });

</script>

@stop