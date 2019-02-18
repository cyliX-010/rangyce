<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link href="{{ asset('css/loginAccount.css') }}" rel="stylesheet">
	<title></title>
</head>
<body>
	<header></header>
	<section class="main">
		<div class="section">
			<img  src="{{ asset('images/rlogo.png') }}" style=" left: -45px; top: -50px; width: 100px; height:100px;">

			

			<form action="{{ route('login') }}" method="POST">
				{{ csrf_field() }}


				<!-- Email Address -->
				<img  src="{{ asset('images/logoemail.png') }}" style=" left: -153px; top: 40px; width: 33px; height:35px; border-top-left-radius: 10px;">
				<div class="input">
					<input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;">
				</div>
				

				<!-- Password Field -->
				<!-- <img  src="{{ asset('images/signinpassword.jpg') }}" style=" left: -153px; top: 40px; width: 33px; height:35px; border-top-left-radius: 10px;"> -->
				<div class="input">
					<input type="password" placeholder="Password" name="password" required style = "border:1px solid #9494e4; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: transparent; color: #000000;  margin-bottom: 15px; padding: 10px 6px 10px 50px; width: 65%; outline: none;">
				</div>

				<!-- Check box -->
				<div class="checkbox">
	                <label>
	                    <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="left: -50px;"> Remember Me 
	                </label>
	            </div>

				<div class="line"></div>
				<div class="btn">
					<input type="submit" name="submit" value="Login">
				</div>				
			</form>

			<a href="../create/account" class="a2"><label>No Account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</label></a>
			
		</div>
		
	</section>
</body>
</html>