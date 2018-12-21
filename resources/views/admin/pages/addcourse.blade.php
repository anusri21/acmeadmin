@extends('admin.default')
@section('content')
<div class="container">
   <div class="card">
                      <div class="card-header">
                        Input <strong>Sizes</strong>
                      </div>
                      <div class="card-body card-block">
                      <form action="{{url('admin/addcourse')}}" method="post" id="regForm">
                    {{ csrf_field() }}
                    <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Course Code</label>
               <input type="text" name="coursecode" id="coursecode" class="form-control accordion--form__text required"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Course Name</label>
               <input type="text" name="coursename" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Category</label>
               <input type="text" name="category" class="form-control accordion--form__text required"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">Sub Category</label>
               <input type="text" name="sub_category" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-6">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Start Date</label>
               <input type="text" name="startdate" class="form-control accordion--form__text required"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-6">
            <div class="form-group accordion--form__row">
               <label class="control-label">End Date</label>
               <input type="text" name="enddate" class="form-control accordion--form__text required" required />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-12">
            <div class="form-group accordion--form__row ">
               <label class="control-label">Description</label>
               <textarea name="description" id="textarea-input" rows="2" placeholder="Description..." class="form-control"></textarea>            </div>
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