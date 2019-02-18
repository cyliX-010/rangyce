<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/Profile/Profile.css') }}" rel="stylesheet">
	<link href="{{ asset('css/feed/feed.css') }}" rel="stylesheet">
</head>
<body>
	@include('layouts.app');

	<section class="main" >
		<section>
			<img class = "userdefaultImg" src="{{ asset('images/image/abadiez.jpg') }}">
			<div><label>Jackelyn Sayson</label></div>
		</section>

		<section style="overflow: auto;">
			<table>
				<tr>
					<td><label class="textAttribute">Firstname</label></td>
					<td><input class="porfilefldAttribute" name="firstname" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Lastname</label></td>
					<td><input class="porfilefldAttribute" name="lastname" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Birthdate</label></td>
					<td><input class="porfilefldAttribute" name="birthdate" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">State</label></td>
					<td><input class="porfilefldAttribute" name="state" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">City</label></td>
					<td><input class="porfilefldAttribute" name="city" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Street</label></td>
					<td><input class="porfilefldAttribute" name="street" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Zip Code</label></td>
					<td><input class="porfilefldAttribute" name="zip" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Mobile Number</label></td>
					<td><input class="porfilefldAttribute" name="mobile" ></td>
				</tr>

				<!-- Account Settings -->
				<tr>
					<td><label class="textAttribute">Username</label></td>
					<td><input class="porfilefldAttribute" name="username" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Email</label></td>
					<td><input class="porfilefldAttribute" name="email" ></td>
				</tr>

				<tr>
					<td><label class="textAttribute">Password</label></td>
					<td><input class="porfilefldAttribute" name="password" ></td>
				</tr>

			</table>
		</section>

		<section>
			<label></label>
		</section>

	</section>

		
</body>
</html>
@include('layouts.bottom')