@extends('backend.default')
@section('content')
<section class="content">
<div class="row">
        <div class="col-xs-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Course Details</h3>
              <div class="box-tools pull-right">
                 <!-- <a href="{{url('backend/createstudent')}}"><button type="button" class="btn btn-info btn-md" ><b>ADD</b><i class="fa fa-user-plus"></i></button></a> -->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Student Name</th>
                    <th>Course</th>
                    <th>Course Batch</th>
                    <th>Course Price</th>
                    <th>Discount</th>
                    <th>Payment Mode</th>
                    <th>View</th>
                    <th>Edit </th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                           $i=0;
                    ?>
                    @foreach ($coursers as $val)
                    
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->studentname}}</td>                        
                           <td>{{ $val->coursename}}</td>
                           <td>{{ $val->batch_name}}->{{ $val->start_time}}-{{ $val->end_time}}</td>
                           <td>{{ $val->course_price}}</td>
                           <td>{{ $val->discount}}</td>
                           <td>{{ $val->payment_mode}}</td>
                        
                           <td><a href="{{ url('backend/viewstudentcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td>
                           <td><a href="{{ url('backend/editstudentcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                        </tr>
                        @endforeach
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          </div>
          </section>

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
  // alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/deletestudentcourse') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>
@stop