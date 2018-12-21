@extends('admin.default')
@section('content')
<div class="container">
   <div class="card">
                      <div class="card-header">
                        Add  <strong>Expense</strong>
                      </div>
                      <div class="card-body card-block">
                      <form action="{{url('admin/addexpense')}}" method="post" id="regForm">
                    {{ csrf_field() }}
                    <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Category</label>
               <select name="category" class="form-control" >
                  <option value="staff">STAFF</option>
                  <option value="student">STUDENT</option>
                  <option value="other">OTHERS</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label"> Amount</label>
               <input type="text" name="amount" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">From Name</label>
               <input type="text" name="name" class="form-control accordion--form__text required"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Phone</label>
               <input type="text" name="phone" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Payment method</label>
               <select name="payment_method" class="form-control" >
                  <option value="netbanking">Net banking</option>
                  <option value="debit">Debit card</option>
                  <option value="bank_transfer">Bank Transer</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Email</label>
               <input type="text" name="email" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-12">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Date</label>
               <input type="text" name="date" id="textarea-input" rows="2" placeholder="Date..." class="form-control"/>    
            </div>
         </div>
         
      </div>
                    
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                          
                    </form>
                    </div>
                    </div>
@stop