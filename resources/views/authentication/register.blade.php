@extends('templates.users.user_auth')

@section('title') Register @endsection

@section('content')

<div class="signup-page-main">
     <div class="signup-main">
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form method="post" action="/authentication/register">
				    {{csrf_field()}}
					<input type="text" name="first_name" placeholder="First Name" required="">
					<input type="text" name="last_name" placeholder="Last Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<input type="password" name="password_confirmation" class="lock" placeholder="Confirm Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>I agree to the terms</label>
								</li>
							</ul>
						</div>

						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="register" value="Register">
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="/authentication/login"> Login here.</a></h4>
				  <h5><a href="index.html">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>

@endsection