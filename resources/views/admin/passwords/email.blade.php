<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Password Reset</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="{{ asset('images/img-01.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">

</head>
<body>
	
	<div class="limiter">

		<div class="container-login100">
               
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('images/icons/mail.png')}}" alt="IMG">
                </div>
               

                <form class="login100-form validate-form" method="POST" action="{{ route('admin.password.email') }}">
                    {{ csrf_field() }}
					<span class="login100-form-title">
						Password Reset Pannel
					</span>
                    @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn1">
							Send Me A Reset Link
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	

	<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('vendor/select2/select2.min.js')}}"></script>
	<script src="{{ asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
	
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="{{ asset('js/login.js')}}"></script>

</body>
</html>