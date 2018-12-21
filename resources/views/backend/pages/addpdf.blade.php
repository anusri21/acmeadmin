@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Add Pdf</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('backend/addpdf')}}" method="post">
               {{ csrf_field() }}
               <div class="form-group">
                  <label>Category:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <select class="form-control " id="category" name="pdf_category"  style="width: 100%;" >
                        <option selected="selected">Select </option>
                        @foreach ($category as $val)
                        <option value="{{$val->id}}">{{$val->category}}</option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group">
                     <label>Title</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="pdf_title" id="text-input"  placeholder="Title" class="form-control" required>
                     </div>
                     <!-- /.input group -->
                  </div>
               <div class="form-group">
                  <label>Description</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <textarea name="pdf_desc" id="textarea-input" rows="2" placeholder="Description..." class="form-control" ></textarea>            </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                     <label>Pdf</label>
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="pdf_path" id="text-input"  placeholder="Name" class="form-control" required>
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