@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Edit Enquiry Details</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('admin/addenquiry')}}" method="post">
               {{ csrf_field() }}
               <input type="hidden" name="id" class="form-control"  value="{{$enquiryrs->id}}" />

               <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" name="name" id="text-input"  value="{{$enquiryrs->name}}" placeholder="Name" class="form-control" required>
                     </div>
                    
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">
               <label>Email</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="email" id="email-input" name="email" placeholder="Enter Email" value="{{$enquiryrs->email}}" class="form-control" required>
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
                     <input type="text" id="password-input" name="phone" placeholder="Phone" value="{{$enquiryrs->phone}}" class="form-control" required>                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Alternate Phone</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" id="disabled-input" name="alternate_phone" placeholder="Alternate Phone" value="{{$enquiryrs->alternate_phone}}"  class="form-control" required>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">
                  <label>Course:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                      
                     </div>
                     <select name="course[]" id="multiple-select" multiple="" class="form-control" value="{{$enquiryrs->course}}" required>
                     <option value="<?php echo $enquiryrs->course;?>" <?php echo ($enquiryrs->course) ? ' selected="selected"' : '';?>><?php echo $enquiryrs->course;?></option>
                       @foreach ($course as $val)
                        <option value="{{$val->coursename}}">{{$val->coursename}}</option>
                        @endforeach
                                <!-- <option value="java">Java</option>
                                <option value="dotnet">DotNet</option>
                                <option value="php">PHP</option>
                                <option value="testing">Testing</option> -->
                               
                              </select>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
                  <label>Enquiry For</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <select name="enquiry" id="select" class="form-control" onchange="Enquiry(this);"value="{{$enquiryrs->enquiry}}"  required>
                                <option value="0">Please select</option>
                                <option value="<?php echo $enquiryrs->enquiry;?>" <?php echo ($enquiryrs->enquiry) ? ' selected="selected"' : '';?>><?php echo $enquiryrs->enquiry;?></option>

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
                     <input type="date" id="password-input" name="doj" placeholder="Joining Date" value="{{$enquiryrs->doj}}" class="form-control" required>                  </div>
                  <!-- /.input group -->
               </div>
            
            <div class="form-group">
               <label>Address:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" name="address" value="{{$enquiryrs->address}}" required> 
               </div>
               <!-- /.input group -->
            </div>
            <div class="form-group">
               <label>Reference By:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-laptop"></i>
                  </div>
                  <select name="reference" id="select" class="form-control" onchange="Reference(this);" value="{{$enquiryrs->reference}}" required>
                                <option value="0">Please select</option>
                                <option value="<?php echo $enquiryrs->reference;?>" <?php echo ($enquiryrs->reference) ? ' selected="selected"' : '';?>><?php echo $enquiryrs->reference;?></option>

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
                  <input type="text" class="form-control" name="comments" value="{{$enquiryrs->comments}}" required>
               </div>
               <!-- /.input group -->
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