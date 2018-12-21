@extends('backend.default')
@section('content')

<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Edit Course Details</h3>
            </div>
            <div class="box-body">
               <form action="{{url('backend/editstudentcourse')}}" id="payForm" method="post" onsubmit="return ValidationEvent()">
                  {{ csrf_field() }}
                
                  
                  <div class="flash-message">
                     @include('backend.pages.notification')
                  </div>
                  <div id="validation-errors" class="alert alert-error" style="display: none;color:blue;">
                  </div>
                  <input type="hidden" class="form-control" id="id" name="id" value="{{ $coursers->id }}">

                  <div class="col-md-6">
                  <div class="form-group">
                        <label style="color:red"><b>Student Name</b></label>
                        <div class="input-group"> 
                        <input type="hidden" class="form-control" id="student_id" name="student_id" value="{{ $coursers->student_id }}">
                      
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color:red"><b>Course Name</b></label>
                        <div class="input-group"> 
                        <input type="hidden" class="form-control" id="course_id" name="course_id" value="{{ $coursers->course_id }}">
                      
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Course Price</label>
                        <div class="input-group">
                           <div class="input-group-addon">
                              <i class="fa fa-envelope"></i>
                           </div>
                           <input type="text" id="course_price" name="course_price"  value="{{ $coursers->course_price }}"placeholder="Course Price" class="form-control" >
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label style="color:red">{{$coursers->studentname}}</label>
                     
                    
                  </div>
                  <div class="form-group">
                     <label style="color:red">{{$coursers->coursename}}</label>
                     
                  </div>
                  <div class="form-group">
                     <label>Discount</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-envelope"></i>
                        </div>
                        <input type="text" id="discount" name="discount" placeholder="Discount" class="form-control" value="{{$coursers->discount}}" >
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Payment Mode:</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-laptop"></i>
                        </div>
                        <select class="form-control " id="paymentmode" name="payment_mode"  style="width: 100%;">
                           <option selected="selected">Select </option>
                           <option value="<?php echo $coursers->payment_mode;?>" <?php echo ($coursers->payment_mode) ? ' selected="selected"' : '';?>><?php echo $coursers->payment_mode;?></option>
                           <option value="cod">COD</option>
                           <option value="paypal">Paypal</option>
                           <option value="netbanking">Netbanking</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group">
                     <label>Payment Description</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-laptop"></i>
                        </div>
                        <textarea name="payment_desc" id="textarea-input" rows="2" placeholder="Description..." class="form-control" >{{$coursers->payment_desc}}</textarea>
                     </div>
                  </div>
            
           
                 <div class="form-group">
                    <label>Course Batch</label>
                       <div class="input-group">
                             <div class="input-group-addon">
                                 <i class="fa fa-laptop"></i>
                               </div>
                               <select class="form-control " id="course_batch" name="course_batch"  style="width: 100%;">
                                 <option selected="selected">Select </option>
                                 <option value="<?php echo $coursers->batchid;?>" <?php echo ($coursers->batchid) ? ' selected="selected"' : '';?>><?php echo $coursers->batch_name;?>-><?php echo $coursers->start_time;?>-<?php echo $coursers->end_time;?></option>
                                 @foreach($batch as $val)
                                 <option value="{{$val->id}}">{{$val->batch_name}}->{{$val->start_time}}-{{$val->end_time}}</option>
                                 @endforeach
                              </select>
                              

                           
                      </div>
                  </div>
           
                 
                  <div class="form-group">
                        <label>Comments:</label>
                              <div class="input-group">
                                    <div class="input-group-addon">
                                       <i class="fa fa-laptop"></i>
                                     </div>
                                     <input type="text" class="form-control" id="comments" name="comments" value="{{$coursers->comments}}">
                              </div>
                  </div>
                
                  <button type="submit" id="btnSubmit" class="btn btn-block btn-primary">Submit</button>
              </form>
         </div>
      </div>
</section>
@stop