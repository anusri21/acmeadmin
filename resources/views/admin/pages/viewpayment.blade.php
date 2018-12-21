@extends('admin.default')
@section('content')
<style>
   .lbl{
   font-weight:20px;
   }
   table {
     border: none;
     border-collapse: collapse;
   }
</style>
<div class="col-lg-12">
<div class="card">
   <div class="card-header">
      <strong>View Payment Details</strong> 
   </div>
   <div class="card-body card-block">
      <div class="container">
         <table class="table table-borderless table-condensed table-hover" border="0" style="border:0px;" cellspacing="0" cellpadding="0">
            <thead>
               <tr>
                  <th>Payment Details</th>
                  <th></th>
                  <th></th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Name</td>
                  <td>{{$paymentrs->name}}</td>
               </tr>
               <tr>
                  <td>Email</td>
                  <td>{{$paymentrs->email}}</td>
               </tr>
               <tr>
                  <td>Mobile</td>
                  <td>{{$paymentrs->mobile}}</td>
               </tr>
               <tr>
                  <td>Payment Id</td>
                  <td >{{$paymentrs->payment_id}}</td>
               </tr>
               <tr>
                  <td>Payment Method</td>
                  <td >{{$paymentrs->paymentmethod}}</td>
               </tr>
               <tr>
                  <td>Payment Applied</td>
                  <td >{{$paymentrs->paymentapplied}}</td>
               </tr>
               <tr>
                  <td>Date Recieved</td>
                  <td >{{$paymentrs->datarecived}}</td>
               </tr>
               <tr>
                  <td>Amount</td>
                  <td >{{$paymentrs->amount}}</td>
               </tr>
                           </tbody>
         </table>
      </div>
   </div>
   <!-- <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
      </button>
      <button type="reset" class="btn btn-danger btn-sm">
        <i class="fa fa-ban"></i> Reset
      </button>
      </div> -->
</div>
@stop