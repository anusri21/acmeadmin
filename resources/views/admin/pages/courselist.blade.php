@extends('admin.default')
@section('content')
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">Course Details</strong>
                  <!-- <a href="{{url('admin/createstudent')}}"><i class="fa fa-user-plus" aria-hidden="true" style="margin-left:700px;color:blue">Add Student</i></a> -->
               </div>
               <div class="card-body">
               <div class="table-responsive">
                  <table id="admission" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>S.No</th>
                           <th>coursecode</th>
                           <th>coursename</th>
                           <th>description</th>
                           <th>category</th>
                           <th>sub_category</th>
                           <th>startdate</th>
                           <th>enddate</th>
                
                           <th>View</th>
                           <th>Edit </th>
                           <th>Delete</th>

                        </tr>
                     </thead>
                     <tbody>
                     @foreach ($coursers as $val)
                     <?php
                           $i=0;
                    ?>
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->coursecode}}</td>
                        
                           <td>{{ $val->coursename}}</td>
                           <td>{{ $val->description}}</td>
                           <td>{{ $val->category}}</td>
                           <td>{{ $val->sub_category}}</td>
                           <td>{{ $val->startdate}}</td>
                           <td>{{ $val->enddate}}</td>
                        
                           <td><a href="{{ url('admin/viewcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td>
                           <td><a href="{{ url('admin/editcourse/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .animated -->
</div>
<!-- .content -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#admission').DataTable();
   } );
</script>

<script>
 $(document).on('click','.delete',function(){
   alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('admin/deletecourse') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>
@stop