@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
   <div class="col-md-12">
      <div class="box box-danger">
         <div class="box-header">
            <h3 class="box-title">Add Enquiry</h3>
         </div>
         <div class="box-body">
            <div class="col-md-6">
               <form action="{{url('admin/addenquiry')}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                     <label>Name</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="name" id="text-input"  placeholder="Name" class="form-control" required>
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                     <label>Email</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control" >
                     </div>
                     <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <!-- phone mask -->
                  <div class="form-group">
                     <label>Phone</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" id="password-input" name="phone" placeholder="Phone" class="form-control" >                  
                     </div>
                     <!-- /.input group -->
                  </div>
                  <div class="form-group">
                     <label>Course:</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <select name="course[]" id="multiple-select" multiple="" class="form-control" >
                           @foreach ($course as $val)
                           <option value="{{$val->coursename}}">{{$val->coursename}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                 
                  <div class="form-group">
                     <label>Enquiry For</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-laptop"></i>
                        </div>
                        <select name="enquiry" id="select" class="form-control" onchange="Enquiry(this);" >
                           <option value="0">Please select</option>
                           <option value="self">Self</option>
                           <option value="son">Son</option>
                           <option value="daughter">Daughter</option>
                           <option value="other">Others</option>
                        </select>
                        <br>
                        <div class="row form-group" id="enq" style="display: none;">
                           <div class="col col-md-3"></div>
                           <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="otherenq" placeholder="Enquiry For"  class="form-control"></div>
                        </div>
                     </div>
                     <!-- /.input group -->
                  </div>
                  <div class="form-group">
                     <label>Joining Date:</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" id="password-input" name="doj" placeholder="Joining Date" class="form-control" >                  
                     </div>
                     <!-- /.input group -->
                  </div>
                  <div class="form-group">
                     <label>Reference By:</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-laptop"></i>
                        </div>
                        <select name="reference" id="select" class="form-control" onchange="Reference(this);" >
                           <option value="0">Please select</option>
                           <option value="internet">Inetnet</option>
                           <option value="facebook">Facebook</option>
                           <option value="newpaper">NewPaper</option>
                           <option value="other">Others</option>
                        </select>
                        <br>
                        <div class="row form-group" id="ref" style="display: none;">
                           <div class="col col-md-3"></div>
                           <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="otherref" placeholder="Reference By"  class="form-control"></div>
                        </div>
                     </div>
                     <!-- /.input group -->
                  </div>
                  <div class="form-group">
                     <label>Comments:</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-laptop"></i>
                        </div>
                        <input type="text" class="form-control" name="comments" >
                     </div>
                     <!-- /.input group -->
                  </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                   <label>Address:</label>
                   <div class="input-group">
                       <div class="input-group-addon">
                         <i class="fa fa-laptop"></i>
                       </div>
                        <input type="text" class="form-control" name="address" > 
                     </div>
                </div>
                <div class="form-group">
                    <label>Alternate Email</label>
                        <div class="input-group">
                           <div class="input-group-addon">
                               <i class="fa fa-envelope"></i>
                            </div>
                             <input type="email" id="email-input" name="alternate_email" placeholder="Enter Email" class="form-control" >
                        </div>
                </div>
                <div class="form-group">
                    <label>Alternate Phone</label>
                       <div class="input-group">
                           <div class="input-group-addon">
                             <i class="fa fa-phone"></i>
                           </div>
                            <input type="text" id="disabled-input" name="alternate_phone" placeholder="Alternate Phone"  class="form-control" >
                        </div>
                 </div>
                 
                  <div class="form-group">
                      <center><label>Student Information</label> </center>
                  </div>
                  <div class="form-group">
                        <label>Student Name</label>
                          <div class="input-group">
                             <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                             <input type="text" id="disabled-input" name="student_name" placeholder="Student Name"  class="form-control" >
                           </div>
                  </div>
                    <div class="form-group">
                         <label>Student Class</label>
                           <div class="input-group">
                                <div class="input-group-addon">
                                   <i class="fa fa-phone"></i>
                                 </div>
                                 <input type="text" id="disabled-input" name="student_class" placeholder="Student Class"  class="form-control" >
                          </div>
                    </div>
                      <div class="form-group">
                            <label>Student Syllabus</label>
                               <div class="input-group">
                                 <div class="input-group-addon">
                                     <i class="fa fa-phone"></i>
                                   </div>
                                     <input type="text" id="disabled-input" name="student_syllabus" placeholder="Student Syllabus"  class="form-control" >
                                 </div>
                        </div>
                      <div class="form-group">
                          <label>Student School</label>
                               <div class="input-group">
                                   <div class="input-group-addon">
                                       <i class="fa fa-phone"></i>
                                     </div>
                                     <input type="text" id="disabled-input" name="student_school" placeholder="Student School"  class="form-control" >
                                 </div>
                        </div>
                    </div>
               <button type="submit" class="btn btn-block btn-primary">Submit</button>
         </div>
         <!-- /.box-body -->
      </div>
      </form>
      <!-- /.box -->
   </div>
</section>
@stop