<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

   <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('public/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body class="bg-dark">

<br><br>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                <h3 style="color:white">Login</h3>
                    <!-- <a href="index.html">
                        <img class="align-content" src="{{ asset('public/images/logo.png') }}" alt="">
                    </a> -->
                </div>
                <div class="login-form">
                <div class="flash-message">
                    @include('admin.pages.notification')
                </div>
                <div id="validation-errors" class="alert alert-error" style="display: none;color:blue;">
						</div>
                    <form action="{{url('login')}}" method="post" id="loginForm">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile" requried>
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" requried>
                        </div> -->
                        <div class="checkbox">
                            <!-- <label>
                                <input type="checkbox"> Remember Me
                            </label> -->
                            <!-- <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label> -->

                        </div>
                        <button type="button"  id="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> -->
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="{{url('register')}}"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('public/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/plugins.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<!-- <script>
$(document).ready(function () {
  $("#loginForm").validate({
    rules: {
      username: {
        required: true
      },
      password: {
        required: true
      }
    },
    messages: {
      username: {
        required: "specify username"
      },
      password: {
        required: "specify password"
      }
    },
    submitHandler: function (form) { // for demo
      alert('valid form');
      return false;
    }
  });
});
</script> -->
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"> 
    </script>
<script>

$(document).on('click', '#submit', function () {
    //alert('click');
       var data  = $('#loginForm').serializeArray();
       var url = "{{url('login')}}";
     $.ajax({
           type:'POST',
           url:url,
           data:data,
           dataType: "json",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(response){
                    //alert( "Data Saved: " + response.role );
                    if(response.status='1')
               
                  {
                      console.log(response.role);
                     if(response.role==2)
               		{
               		 //$('#myModal2').modal('hide');
                        window.location.href = "{{ url('staff/dashboard') }}";
               		}
               		if(response.role==1)
               		{
               		 //$('#myModal2').modal('hide');
                        window.location.href = "{{ url('admin/dashboard') }}";
               		}
            }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Invalid Username");

            }
           
     });
   });

</script>
</body>
</html>
