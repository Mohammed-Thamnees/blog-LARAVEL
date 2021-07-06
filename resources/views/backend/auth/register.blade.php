<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
			
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							{{-- <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo"> --}}
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form method="post" action="{{ route('login.submit') }}">
                                    @csrf
									<div class="form-group">
										<input class="form-control" type="text" name="email" placeholder="Email">
                                        @error('email')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="form-group">
										<input class="form-control" type="text" name="password" placeholder="Password">
                                        @error('password')
                                        <span class="danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit" name="button">Register</button>
                                        <center>OR</center>
                                        <button class="btn btn-success btn-block" type="submit" name="button">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								{{-- <div class="text-center forgotpass"><a href="{{ route('password.request') }}">Forgot Password?</a></div> --}}
								<div class="login-or">
									<span class="or-line"></span>
									{{-- <span class="span-or">or</span> --}}
								</div>
								  								
								{{-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> --}}
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>
</html>