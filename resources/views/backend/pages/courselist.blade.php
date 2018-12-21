@extends('backend.default')
@section('content')
<section class="content">
<div class="row">
        <div class="col-xs-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Course Details List</h3>
              <div class="box-tools pull-right">
              <a href="{{url('backend/addcourse')}}"><button type="button" class="btn btn-info btn-md" ><b>ADD</b><i class="fa fa-user-plus"></i></button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>S.No</th>
                           <th>coursecode</th>
                           <th>coursename</th>
                           <th>category</th>
                           <th>startdate</th>
                           <th>enddate</th>
                           <th>View</th>
                           <th>Schedule</th>
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
                           <td>{{ $val->coursecode}}</td>
                           <td>{{ $val->coursename}}</td>
                           <td>{{ $val->category}}</td>
                           <td>{{ $val->startdate}}</td>
                           <td>{{ $val->enddate}}</td>
                           <td><a href="{{ url('backend/viewcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td>
                           <td><a href="{{ url('backend/addschedule/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Add</span></a></td>
                           <td><a href="{{ url('backend/editcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
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
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/deletecourse') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>
@stop