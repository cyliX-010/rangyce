<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link href="{{ asset('css/loginAccount.css') }}" rel="stylesheet">
	<title></title>
</head>
<body>
	<header>
		
	</header>
	<section class="main">
		
		<div class="section">

			<img  src="{{ asset('images/rlogo.png') }}" style=" left: -45px; top: -50px; width: 100px; height:100px;">

			

			<form action="{{ route('register') }}" method="POST"> {{ csrf_field() }}	

				<!-- Username Field -->
				<div class="input">
					<input id="name" type="text" placeholder="Username" name="name" value="{{ old('name') }}" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;" value="{{ old('name') }}" >


					@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif
				</div>

				<!-- Email Address Field -->
				<div class="input">
					<input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;" value="{{ old('email') }}">

					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
				</div>

				<!-- Password Field-->
				<div class="input">
					<input id="password" type="password" placeholder="Password" name="password" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;">

					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				</div>		


				<!-- Confirm Password Field	 -->	
				<div class="input">
					<input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;">
				</div>
				<div class="btn">
					<input type="submit" name="submit" value="Create Account">
				</div>				
			</form>		
			

			<!-- Link for Login -->
			<a href="../admin/login" class="a2"><label>Already Registered?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</label></a>
		</div>

	</section>
</body>
</html>