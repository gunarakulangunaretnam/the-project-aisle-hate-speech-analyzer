<!DOCTYPE html>
<html lang="en">
<head>
	<title>AISLE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('other-asset')}}/logo.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('login-page-asset')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body  style="background-color:#f2f2f2;">

	<div class="limiter">

		@if($errors->any())
			@foreach ($errors->all() as $error)
					<div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
							<strong>{!!$error!!}</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
					</div>

					<script>

						window.onload=function(){

							$("#errorBox").delay(3000).fadeOut("slow");

						}

					</script>

			@endforeach
		@endif

		<div class="container-login100">
			<div class="wrap-login100">
					<form action="handle-login" class="login100-form validate-form" method="POST" enctype="multipart/form-data">

						{{ csrf_field() }}

						<span class="login100-form-title p-b-26">
						 	The Project AISLE
						</span>

						<span class="login100-form-title p-b-26">
						 	Welcome
						</span>

						<hr>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
							<input class="input100" type="text" name="username">
							<span class="focus-input100" data-placeholder="Username"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<span class="btn-show-pass">
								<i class="zmdi zmdi-eye"></i>
							</span>
							<input class="input100" type="password" name="password">
							<span class="focus-input100" data-placeholder="Password"></span>
						</div>

						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn">
									Login
								</button>
							</div>
						</div>

				</form>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('login-page-asset')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{asset('login-page-asset')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('login-page-asset')}}/js/main.js"></script>

</body>
</html>
