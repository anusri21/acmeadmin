@extends('admin.default')
@section('content')
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">Staff Admission Details</strong>
                  <!-- <a href="{{url('admin/createstaff')}}"><i class="fa fa-user-plus" aria-hidden="true" style="margin-left:700px;color:blue">Add Staff</i></a> -->

               </div>
               <div class="card-body">
               <div class="table-responsive">
                  <table id="admission" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>$320,800</td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>$170,750</td>
                        </tr>
                        <tr>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>$86,000</td>
                        </tr>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
     $('#admission').DataTable();
   } );
</script>
@stop