@extends('templates.users.user_auth')

@section('title') User - Login @endsection

@section('content')

<div class="login-page">
    <div class="login-main">
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form method="post" action="/authentication/login">
				    {{csrf_field()}}
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								{{--<li>--}}
									{{--<input type="checkbox" id="brand1" value="">--}}
									{{--<label for="brand1"><span></span>Remember me</label>--}}
								{{--</li>--}}
							</ul>
						</div>
						{{--<div class="forgot">--}}
							{{--<a href="#">Forgot password?</a>--}}
						{{--</div>--}}
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Login">
					<h3>Not a member?<a href="/authentication/register"> Sign up now</a></h3>
					<h2>or login with</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</form>
				<h5><a href="index.html">Go Back to Home</a></h5>
			</div>
      </div>
</div>

@endsection