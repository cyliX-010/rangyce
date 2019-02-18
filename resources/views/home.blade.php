<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/home.css') }}" rel="stylesheet">
	<link href="{{ asset('css/feed/feed.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<a href="{{ url('login/account') }}">
			<div class="h1"><img src="{{ asset('images/temp.png') }}"  alt="randyce logo"></div>
		</a>
		<label>RangyCe</label>
		<!-- <div class="h2"><a href=""><i class="color fa fa-info-circle"></i></a></div> -->
	</header>
	<section class="main">

	


		<section class="main-ctrl">


			<a href="/page/security_stations" title="Safety Services">
				<div>
					<section class="margin1">
						<i class="fa fa-cab (alias)"></i>
						<section><label>Security and Safety Services</label></section>
					</section>
				</div>
			</a>

			<a href="/page/hospitals" title="Health Services">
				<div>
					<section class="margin1">
						<i class="fa fa-medkit"></i>
						<section><label>Health and Medicine Services</label></section>
						
					</section>
				</div>	
			</a>

			<a href="/page/homeservices" title="Home Services">
				<div>
					<section class="margin">
						<i class="fa fa-tty"></i>
						<section><label>Home Services</label></section>
					</section>
				</div>
			</a>
			

			<a href="../include/advertisement/advertisement.html" title="Advertisement">
				<div>
					<section class="margin">
						<i class="fa  fa-tripadvisor"></i>
						<section><label>Advertisement</label></section>
					</section>
				</div>
			</a>
			

			<a href="{{url('station/create')}}"> To Admin</a>
		</section>

	</section>



	@include('layouts.bottom')
</body>
</html>