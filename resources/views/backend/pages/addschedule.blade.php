@extends('backend.default')
@section('content')
<section class="content">
<div class="row">
        <div class="col-xs-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Schedule List</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" ><b>ADD</b><i class="fa fa-user-plus"></i></button>
                </div>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                          <th>S.No</th>
                           <th>Course Name</th>
                           <th>Batch Name</th>
                           <th>Start time</th>
                           <th>End time</th>
                           <!-- <th>View</th> -->
                           <th>Edit </th>
                           <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                     $i=0;
                    ?>
                  @foreach ($course as $val)
                    
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->coursename}}</td>
                           <td>{{ $val->batch_name}}</td>
                           <td>{{ $val->start_time}}</td>
                           <td>{{ $val->end_time}}</td>
                           <!-- <td><a href="{{ url('admin/viewbanner/'.$val->id) }}"   class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td> -->
                           <td><a href=""  id="edit" data-id="{{$val->id}}" class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" data-toggle="modal" data-target="#myModal1" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                        </tr>
                        @endforeach
                
                </tbody>
               
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          </div>
          </section>



 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Course Category</h4>
        </div>
        <div class="modal-body">
        <form action="{{url('backend/addbatch')}}" id="batchForm" method="post">
        {{csrf_field() }}
        <input type="hidden" class="form-control" id="course_id" name="course_id" value="{{ Request::segment(3) }}">

            <div class="form-group">
               <label>Batch Name</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control"  name="batch_name" data-mask >

                  </div>
            </div>


            <div class="bootstrap-timepicker">
            <div class="form-group">
               <label>Start Time:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                  </div>
               <input type="text" class="form-control timepicker" name="start_time"> 
               </div>
            
            </div>
            </div>

            <div class="bootstrap-timepicker">
               <div class="form-group">
               <label>End Time </label>

               <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                  </div>
               <input type="text" class="form-control timepicker" name="end_time"> 
               </div>
            
            </div>
            </div>
        </div>
        <div class="modal-footer">
         <button type="button" id="submit" class="btn btn-primary" >Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Course Batch</h4>
        </div>
        <div class="modal-body">
        <form action="{{url('backend/editbatch')}}" method="post" id="editForm">
        {{csrf_field() }}
        <input type="text" class="form-control" name="id" id="id" >
        <input type="text" class="form-control" name="course_id" id="cid" >

         <div class="form-group">
               <label>Batch Name</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="batchname" name="batch_name">

                  </div>
            </div>


            <div class="bootstrap-timepicker">
            <div class="form-group">
               <label>Start Time:</label>

               <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                  </div>
               <input type="text" class="form-control timepicker" id="start_time" name="start_time"> 
               </div>
            
            </div>
            </div>

            <div class="bootstrap-timepicker">
               <div class="form-group">
               <label>End Time </label>

               <div class="input-group">
                  <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                  </div>
               <input type="text" class="form-control timepicker" id="end_time" name="end_time"> 
               </div>
            
            </div>
            </div>
       
        </div>
        <div class="modal-footer">
         <button type="button" id="editsubmit" class="btn btn-primary" >Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
   $(document).ready(function() {
     $('#admission').DataTable();
   } );
</script>

<script>
 $(document).on('click','.delete',function(){
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/deletschedule') }}"+"/"+id;
    //alert(url);
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
            window.location.reload();
        }
    });
  });
</script>

<script>
 $(document).on('click','#edit',function(){
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/editschedule') }}"+"/"+id;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res.course.course_id);
            $('#id').val(res.course.id);
            $('#cid').val(res.course.course_id);
            $('#batchname').val(res.course.batch_name);
            $('#start_time').val(res.course.start_time);
            $('#end_time').val(res.course.end_time);

            $('#mymodal1').modal('show');
        }
    });
  });
</script>
<script>

$(document).on('click', '#submit', function () {
      // var data  = $('#batchForm').serializeArray();
      //  console.log(data);
      var data = new FormData($('#batchForm')[0]);
       console.log(data);
       var url = "{{url('backend/addbatch')}}";
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
                   var id = response.cid;
                   url = "{{ url('backend/addschedule') }}"+"/"+id;
                   window.location.href = url;
                 
               }
        }
     });
   });

</script>
<script>

$(document).on('click', '#editsubmit', function () {
      // var data  = $('#batchForm').serializeArray();
      //  console.log(data);
      var data = new FormData($('#editForm')[0]);
       console.log(data);
       var url = "{{url('backend/addbatch')}}";
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
                   var id = response.cid;
                   url = "{{ url('backend/addschedule') }}"+"/"+id;
                   window.location.href = url;
                 
               }
        }
     });
   });

</script>

@stop