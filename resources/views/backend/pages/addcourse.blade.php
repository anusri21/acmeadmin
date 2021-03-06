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
               <form action="{{url('backend/addcourse')}}" method="post">
               {{ csrf_field() }}

               <div class="form-group">
                  <label>Course Code</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                     </div>
                     <input type="text" name="coursecode" id="coursecode" class="form-control "     />                     </div>
                    
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">
               <label>Course Name</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                        <!-- <i class="fa fa-calendar"></i> -->
                     </div>
                     <input type="text" name="coursename" class="form-control "  />
                     </div>
                     
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Category:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <select class="form-control " id="category" name="category"  style="width: 100%;" >
                        <option selected="selected">Select </option>
                        @foreach ($category as $val)
                        <option value="{{$val->category}}">{{$val->category}}</option>
                        @endforeach
                     </select>
                  </div>
                  <!-- /.input group -->
               </div>
               
               <div class="form-group">
                  <label>Start Date:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>

                     </div>
                     <input type="date" name="startdate" class="form-control "     />

                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
                  <label>End Date</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="date" name="enddate" class="form-control " />

                            </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                  <label>Description</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <textarea name="description" id="textarea-input" rows="2" placeholder="Description..." class="form-control" ></textarea>            </div>
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