<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
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
                <h3 style="color:white">Register</h3>
                    <!-- <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a> -->
                </div>
                <div class="login-form">
                <form action="{{url('register')}}" method="post" id="regForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="role_id" class="form-control">
                            <option value="volvo">Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Student</option>
                        </select>
                        </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="mobile" id="mobile" class="form-control input-sm" placeholder="Mobile No">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                      </div>
                        <div class="form-group">
                            <input type="address" name="address" class="form-control" placeholder="Address">
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div> -->
                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                            </div>
                        </div> -->
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="#"> Sign in</a></p>
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

// <script>
// $(document).ready(function () {
//   $("#loginForm").validate({
//     rules: {
//       username: {
//         required: true
//       },
//       password: {
//         required: true
//       }
//     },
//     messages: {
//       username: {
//         required: "specify username"
//       },
//       password: {
//         required: "specify password"
//       }
//     },
//     submitHandler: function (form) { // for demo
//       alert('valid form');
//       return false;
//     }
//   });
// });
// </script>

</body>
</html>
