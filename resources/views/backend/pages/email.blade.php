@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Add Course</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('backend/postEmail')}}" method="post">
               {{ csrf_field() }}
               <div class="flash-message">
                              @include('backend.pages.notification')
                        </div>

              
               <div class="form-group">
               <label>Email</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                     <i class="fa fa-envelope"></i>
                     </div>
                     <input type="email" name="email" class="form-control "  />
                     </div>
               </div>
               
               <div class="form-group">
                  <label>Subject</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <textarea name="subject" id="textarea-input" rows="2" placeholder="Description..." class="form-control" ></textarea>            </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                  <label>Message</label>
                  <div class="input-group">
                     
                     <textarea name="message" id="textarea-input" rows="2" placeholder="Description..." class="form-control" ></textarea>            </div>
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