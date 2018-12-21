@extends('admin.default')
@section('content')
<div class="container">
   <div class="card">
                      <div class="card-header">
                        Input <strong>Sizes</strong>
                      </div>
                      <div class="card-body card-block">
                      <form action="{{url('admin/addcourse')}}" method="post" id="editcourse">
                    {{ csrf_field() }}
                    <div class="row">
                    <input type="hidden" name="id" class="form-control"  value="{{$coursers->id}}" />

                    <div class="col-xs-6 col-sm-6 col-md-12">  
                            <div class="form-group">
                            <label class="control-label">Course code</label>

                                <input type="text" name="coursecode" id="coursecode" value="{{$coursers->coursecode}}" class="form-control input-sm" placeholder="Course code">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">    
                             <div class="form-group">
                             <label class="control-label">Course Name</label>

                                <input type="text" name="coursename" id="coursename" value="{{$coursers->coursename}}"  class="form-control input-sm" placeholder="Course Name">
                            </div>
                        </div>
                    </div>
                  
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                            <label class="control-label">description</label>

                                <input type="text" name="description" id="description" value="{{$coursers->description}}"  class="form-control input-sm" placeholder="Duration">
                            </div>
                        </div> 
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                            <label class="control-label">Category</label>

                                <input type="text" name="category" id="category"  value="{{$coursers->category}}" class="form-control input-sm" placeholder="Start date">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                            <label class="control-label">Sub category</label>

                                <input type="text" name="sub_category" id="subcategory" value="{{$coursers->sub_category}}" class="form-control input-sm" placeholder="End date">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                            <label class="control-label">Start Date</label>

                                <input type="text" name="startdate" id="startdate"  value="{{$coursers->startdate}}" class="form-control input-sm" placeholder="Start date">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <div class="form-group">
                            <label class="control-label">End Date</label>

                                <input type="text" name="enddate" id="enddate" value="{{$coursers->enddate}}" class="form-control input-sm" placeholder="End date">
                            </div>
                        </div>
                       <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="enddate" name="enddate" class="form-control" placeholder="end date">
                        </div>  -->
                       
                       
                   
                      </div>
                      <div class="card-footer">
                        <button type="submit" id="btnSubmit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                          
                    </form>
                    </div>
                    </div>

                    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    alert('click');
       //var data  = $('#addstudent').serializeArray();
       var data = new FormData($('#editcourse')[0]);
       var url = "{{url('admin/addcourse')}}";
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
                   window.location.href = "{{ url('admin/courselist') }}";
                 
               }
        }
     });
   });

</script>

@stop