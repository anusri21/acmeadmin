@extends('admin.default')
@section('content')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="{{asset('public/css/style1.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/css/flexslider.css')}}" type="text/css" media="screen" property="" />

<script src="{{asset('public/js/jquery-2.2.3.min.js')}}"></script> 

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<div class="main">
		<h1>Payment History</h1>
		
		<div class="w3_agile_main_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="agileits_w3layouts_main_grid">
								<h3>Payment List</h3>
                                <form action="{{url('admin/payment')}}" method="post" id="regForm">	
                                {{ csrf_field() }}							
								<input name="id" type="text" value="{{$paymentrs->id}}" placeholder="Your Name" required="">

									<span>
										<label>Name</label>
										<input name="name" type="text" value="{{$paymentrs->name}}" placeholder="Your Name" required="">
									</span>
									<span>
										<label>Email</label>
										<input name="email" type="email" value="{{$paymentrs->email}}" placeholder="Your Email" required="">
									</span>
									<span>
										<label>Mobile No</label>
										<input name="mobile" type="text"  value="{{$paymentrs->mobile}}" placeholder="Mobile Number" required="">
									</span>
									<span>
										<label>Payment Id</label>
										<input name="payment_id" type="text" value="{{$paymentrs->payment_id}}" placeholder="payment Id" required="">
									</span>
									<span>
										<label>Payment Method</label>
										<input name="paymentmethod" type="text" value="{{$paymentrs->paymentmethod}}" placeholder="payment method" required="">
									</span>
									<span>
										<label>Payment Applied</label>
										<input name="paymentapplied" type="text"  value="{{$paymentrs->paymentapplied}}" placeholder="payment applied" required="">
									</span>
									<span>
										<label>Date Recieved</label>
										<input name="datarecived" type="text" value="{{$paymentrs->datarecived}}"  placeholder="date recieved" required="">
									</span>
									<span>
										<label>Payment Amount Currency</label>
										<input name="amount " type="text" value="{{$paymentrs->amount}}"  placeholder="payment amount curency" required="">
									</span>
									<div class="w3_agileits_submit">
										<input type="submit" value="submit">
										<input type="reset" value="reset">
									</div>
								</form>
							</div>
						</li>
						
						
					</ul>
				</div>
			</section>
		</div>
		<div class="agileits_copyright">
			<p>© 2019-2029. All rights reserved | Design by  Caltech PVT</p>
		</div>
	</div>

	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				
		}
	</script>


	<script defer src="{{asset('piblic/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
@stop