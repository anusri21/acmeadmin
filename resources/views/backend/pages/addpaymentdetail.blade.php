@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Payment Details</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('backend/addpaymentdetails')}}" id="payForm" method="post" onsubmit="return ValidationEvent()">
               {{ csrf_field() }}
                  <div class="flash-message">
                              @include('backend.pages.notification')
                        </div>

                        <div id="validation-errors" class="alert alert-error" style="display: none;color:blue;">
						</div>
               <div class="form-group">
                  <label>Payment Type</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <select class="form-control select2 " id="paymenttype" name="payment_type" onchange="PayCategory(this);"  style="width: 100%;" >
                        <option >Select Category</option>
                        <option value="income">Income</option>
                        <option value="expense">Expense</option>
                        <!-- <option value="pay">Others</option> -->

                     </select>
                     </div>
                     <!-- <br>
                     <div class="form-group" id="otherpay" style="display: none;">
                        
                            
                            <input type="text" class="form-control" name="otherpay" data-mask placeholder="Other Payment Category" required> -->
                        
                        <!-- /.input group -->
                    <!-- </div>   -->
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">
               <label>Payment Category</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <select class="form-control select2 " id="paymentcategory" name="payment_category" onchange="Category(this);" style="width: 100%;" >
                        <option >Select Category</option>
                        <option value="fees">Fees</option>
                        <option value="salary">Salary</option>
                        <option value="collection">Collection</option>
                        <option value="donation">Donation</option>
                        <!-- <option value="3">Others</option> -->
                     </select>
                     </div>
                     <!-- <br>
                     <div class="form-group" id="othercat" style="display: none;">
                            <input type="text" class="form-control" name="othercat" data-mask placeholder="Other User Category">
                           <br> <input type="text" class="form-control" name="newuser" data-mask placeholder="New User Name">

                    </div> -->
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Amount</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" class="form-control" id="amount" name="amount" data-mask >
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Name:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                     </div>
                     <input type="text" class="form-control" id="name" name="name" data-mask placeholder=" User Name" >

                     </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">
                  <label>Phone:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" class="form-control" id="phone" name="phone" >
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
                  <label>Payment Mode:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <select class="form-control select2 accordion--form__text required" id="paymentmode" name="payment_method"  style="width: 100%;">
                        <option selected="selected">Select </option>
                        <option value="cod">COD</option>
                        <option value="paypal">Paypal</option>
                        <option value="netbanking">Netbanking</option>
                     </select>
                  </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="date" class="form-control" id="date" name="date" >
                  </div>
                  <!-- /.input group -->
               </div>
            
            <div class="form-group">
               <label>Comments:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" id="comments" name="comments">
               </div>
               <!-- /.input group -->
            </div>
            </div>
          
            <button type="button" id="btnSubmit" class="btn btn-block btn-primary">Submit</button>

         </div>
         <!-- /.box-body -->
      </div>
    </form>
      <!-- /.box -->
   </div>
  
</section>
<script>
  function ValidationEvent() {
   // alert('asda');
// Storing Field Values In Variables
var paymenttype = document.getElementById("paymenttype").value;
var paymentcategory = document.getElementById("paymentcategory").value;
var amount = document.getElementById("amount").value;
var name = document.getElementById("name").value;
var phone = document.getElementById("phone").value;
var paymentmode = document.getElementById("paymentmode").value;
var date = document.getElementById("date").value;
var comments = document.getElementById("comments").value;



// Regular Expression For Email
var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
// Conditions
if (paymenttype != '' && paymentcategory != '' && paymentmode != '') {
//if (email.match(emailReg)) {
//if (document.getElementById("male").checked || document.getElementById("female").checked) {
//if (contact.length == 10) {
alert("All type of validation has done on OnSubmit event.");
return true;
//} 
// else {
// alert("The Contact No. must be at least 10 digit long!");
// return false;
// }
// //} 
// else {
// alert("You must select gender.....!");
// return false;
// }
// //} 
// else {
// alert("Invalid Email Address...!!!");
// return false;
// }
} else {
alert("All fields are required.....!");
return false;
}
}
</script>

<script>
 $(document).ready(function() {
 
  $('#payForm').on('submit', function() {
   // alert('asa');
         return $('#payForm').jqxValidator('validate');
     });
  // $("select[name='category']").change(function(){
  //     var category_id = $(this).val();
  //     //alert(category_id);
  //    // var token = $("input[name='_token']").val();
  //    var url = "{{url('categoryselect')}}";
  //     $.ajax({
  //         url: url+ '/' + category_id,
  //         method: 'get',
  //         //data: {station_id:station_id},
         
  //         success: function(data) {
  //             console.log(data.category);
  //           $("select[name='name'").html('<option value="">Loading.....</option>');
  //           $("select[name='name'").html(data.category);
  //         }
  //     });
  // });
});
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    //alert('click');
       //var data  = $('#addstudent').serializeArray();
       var data = new FormData($('#payForm')[0]);
       var url = "{{url('backend/addpaymentdetails')}}";
     $.ajax({
           type:'POST',
           url:url,
           data:data,
           dataType: "json",
           processData: false,
           contentType: false,
           async:true,
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           beforeSend: function () {
                $("#validation-errors").hide().empty();
            },
           success:function(response){
               // console.log(response);
               if(response.status='1')
               
               {
                   console.log(response);
                   window.location.href = "{{ url('backend/paymentdetaillist') }}";
                 
               }if(response.status='0')
               {
                $("#validation-errors").show();
               }
        }
     });
   });

</script>
@stop