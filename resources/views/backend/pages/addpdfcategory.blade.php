@extends('backend.default')
@section('content')
<section class="content">
<div class="row">
        <div class="col-xs-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pdf Category List</h3>
              <div class="box-tools pull-right">
              <a href="#"><button type="button" class="btn btn-info btn-md addcat" data-toggle="modal" data-target="#myModal" ><b>ADD</b><i class="fa fa-user-plus"></i></button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
              
                           <th>S.No</th>
                           <th>Pdf Category</th>
                           <th>Edit </th>
                           <!-- <th>Delete</th> -->
                </tr>
                </thead>
                <tbody>
                <?php
                           $i=0;
                    ?>
                @foreach ($category as $val)
                     
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->category}}</td>
                           <td><a href="" data-id="{{ $val->id }}" data-toggle="modal" data-target="#myModal1" class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small editcat" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <!-- <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td> -->
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


          <!-- The Modal -->
            <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Pdf Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <form action="" method="post" id="addcat">
                   {{ csrf_field() }}
                            <div class="form-group">
                                <label>Category</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-clone"></i>
                                    </div>
                                    <input type="text" name="category" id="text-input"  placeholder="category" class="form-control" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                            </div>

                     <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary submit">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                     </form>
                </div>
            </div>
            </div>

            <!-- The  Edit Modal -->
            <div class="modal" id="myModal1">
                        <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Pdf Category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <form action="" method="post" id="editcat">
                   {{ csrf_field() }}

                    <input type="hidden" name="id" id="id"  placeholder="id" class="form-control" required>

                            <div class="form-group">
                                <label>Category</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                    <i class="fa fa-clone"></i>
                                    </div>
                                    <input type="text" name="category" id="category"  placeholder="category" class="form-control" required>
                                </div>
                                <!-- /.input group -->
                            </div>
                            </div>

                     <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary editsubmit">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
    var url = "{{ url('backend/deletecourse') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>

<script>

$(document).on('click', '.submit', function () {
      // var data  = $('#batchForm').serializeArray();
      //  console.log(data);
      var data = new FormData($('#addcat')[0]);
       console.log(data);
       var url = "{{url('backend/addcat')}}";
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
                   $('#myModal1').modal('hide');
                  location.reload()
                 
               }
        }
     });
   });

</script>


<script>
 $(document).on('click','.editcat',function(){
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/editcat') }}"+"/"+id;
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res.pdfcat);
            $('#id').val(res.pdfcat.id);
            $('#category').val(res.pdfcat.category);

            $('#mymodal1').modal('show');
        }
    });
  });
</script>

<script>

$(document).on('click', '.editsubmit', function () {
      // var data  = $('#batchForm').serializeArray();
      //  console.log(data);
      var data = new FormData($('#editcat')[0]);
       console.log(data);
       var url = "{{url('backend/addcat')}}";
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
                   $('#myModal').modal('hide');
                  location.reload()
                 
               }
        }
     });
   });

</script>


@stop