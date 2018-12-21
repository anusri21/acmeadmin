@extends('admin.default')
@section('content')
<div class="container">
   <div id="accordion">
      
      <div class="jumbotron">
         <div class="container">
            <h2 class="text-success"><b>Staff Details</b></h2>
         </div>
         <div id="collapse1" class="collapse show">
            <div class="card-body">
            <form action="{{url('admin/addstaff')}}" method="post" id="staff" enctype="multipart/form-data">
                    {{ csrf_field() }}
               <div class="row">
                  <div class="col-sm-2 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Date Of Birth</label>
                        <div class="input-group date">
                           <input class="form-control" type="text"  name="dob" required />
                           <span class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">
                           <i class="fa fa-calendar"></i>
                           </button></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
               <div class="col-md-4 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Mobile</label>
                        <input type="text"  name="mobile "class="form-control"  title="Please enter Mobile"/>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text"  name="email"class="form-control"  title="Please enter valid email id "/>
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Address</label>
                        <input type="text" name="address" class="form-control"    />
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">City</label>
                        <input type="text" name="city" class="form-control" pattern="[a-zA-Z]{0,30}"  title="city should only contain letters" />
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">State</label>
                        <input type="text" class="form-control" name=" state" pattern="[a-zA-Z]{0,30}" title="State should only contain letters"  />
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-2">
                     <div class="form-group">
                        <label class="control-label">Zip Code</label>
                        <input type="text" name="pincode" class="form-control"  pattern="[0-9]{0,}" maxlength="6" title="Please enter six digit pincode"  />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Gender</label>
                        <select name="gender" class="form-control">
                           <option value="volvo">select</option>
                           <option value="male">male</option>
                           <option value="female">female</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Age</label>
                        <input type="text" class="form-control" name=" age" maxlength="3" pattern="[0-9]{0,3}" title="Age should only contain numbers" />
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Qualification</label>
                        <input type="text" class="form-control" name=" qualification" required  />
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-2">
                     <div class="form-group">
                        <label>Experience</label>	<br>				   
                        <input type ="text" name="experience" value="">
                     </div>
                  </div>
                  <div class="col-md-8 col-lg-8">
                     <div class="form-group">
                        <label> Upload Photo</label>	<br>				   
                        <input type="file" name="stafimage" value="fileupload" id="fileupload">
                     </div>
                  </div>
               </div>
            </div>
         </div>
    <button  type="submit" class="btn btn-success btn-lg" id="btnSubmit" ><i class="fa fa-save"></i> Save</button>
        
      </div>
      </form>
   </div>
   
   
         <!-- <div class="pull-right">
           
            <a class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</a>
         </div> -->
      
 
</div>
@stop