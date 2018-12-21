@extends('admin.default')
@section('content')
<div class="container">
   <div class="card">
                      <div class="card-header">
                        Add  <strong>Expense</strong>
                      </div>
                      <div class="card-body card-block">
                      <form action="{{url('admin/income')}}" method="post" id="regForm">
                    {{ csrf_field() }}
                    <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Category</label>
               <select name="religion" class="form-control" >
                  <option value="hindu">STAFF</option>
                  <option value="muslem">STUDENT</option>
                  <option value="christian">OTHERS</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label"> Amount</label>
               <input type="text" name="coursename" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">From Name</label>
               <input type="text" name="category" class="form-control accordion--form__text required"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Phone</label>
               <input type="text" name="sub_category" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Payment method</label>
               <select name="religion" class="form-control" >
                  <option value="hindu">Net banking</option>
                  <option value="muslem">Debit card</option>
                  <option value="christian">Bank Transer</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Email</label>
               <input type="text" name="enddate" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-12">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Date</label>
               <input type="text" name="description" id="textarea-input" rows="2" placeholder="Date..." class="form-control"/>    
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