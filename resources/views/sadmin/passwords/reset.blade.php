<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Super Admin Password</title>
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
					<img src="{{ asset('images/changepass.png')}}" alt="IMG">
				</div>

                <form method="POST" action="{{ route('sadmin.password.request') }}" class="login100-form validate-form">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">
					<span class="login100-form-title">
                            Reset Super Admin Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "E-Mail Address">
						<input class="input100" type="email" name="email" id="email" placeholder="E-Mail Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter New Password">
						<input id="password" class="input100" type="password" name="password" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Confirm Password">
						<input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Conform Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" >
							Save Changes
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
    <script src="{{ asset('js/app.js') }}"></script>
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