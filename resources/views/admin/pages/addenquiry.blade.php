@extends('admin.default')
@section('content')
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                        <form action="{{url('admin/addenquiry')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="name" id="text-input"  placeholder="Name" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email </label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Enter Email" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="phone" placeholder="Phone" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alternate Phone</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alternate_phone" placeholder="Alternate Phone"  class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="multiple-select" class=" form-control-label">Course</label></div>
                            <div class="col col-md-9">
                              <select name="course[]" id="multiple-select" multiple="" class="form-control">
                                <option value="java">Java</option>
                                <option value="dotnet">DotNet</option>
                                <option value="php">PHP</option>
                                <option value="testing">Testing</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Enquiry For</label></div>
                            <div class="col-12 col-md-9">
                              <select name="enquiry" id="select" class="form-control" onchange="Enquiry(this);">
                                <option value="0">Please select</option>
                                <option value="self">Self</option>
                                <option value="son">Son</option>
                                <option value="daughter">Daughter</option>
                                <option value="other">Others</option>
                              </select>
                              <br>
                              <div class="row form-group" id="enq" style="display: none;">
                                  <div class="col col-md-3"></div>
                                  <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="otherenq" placeholder="Enquiry For"  class="form-control"></div>
                                </div>
                            </div>
                            
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Joining Date</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="password-input" name="doj" placeholder="Joining Date" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="2" placeholder="Address..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Reference By</label></div>
                            <div class="col-12 col-md-9">
                              <select name="reference" id="select" class="form-control" onchange="Reference(this);">
                                <option value="0">Please select</option>
                                <option value="internet">Inetnet</option>
                                <option value="facebook">Facebook</option>
                                <option value="newpaper">NewPaper</option>
                                <option value="other">Others</option>
                              </select>
                              <br>
                              <div class="row form-group" id="ref" style="display: none;">
                                  <div class="col col-md-3"></div>
                                  <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="otherref" placeholder="Reference By"  class="form-control"></div>
                                </div>
                            </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comments</label></div>
                            <div class="col-12 col-md-9"><textarea name="comments" id="textarea-input" rows="2" placeholder="Comments..." class="form-control"></textarea></div>
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

<script>
function Enquiry(that) {
if (that.value == "other") {
//alert("check");
document.getElementById("enq").style.display = "block";
} else {
document.getElementById("enq").style.display = "none";
}
}
</script>

<script>
function Reference(that) {
if (that.value == "other") {
//alert("check");
document.getElementById("ref").style.display = "block";
} else {
document.getElementById("ref").style.display = "none";
}
}
</script>
@stop