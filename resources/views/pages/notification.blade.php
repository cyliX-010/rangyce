<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/notification/notification.css') }}" rel="stylesheet">
	<link href="{{ asset('css/feed/feed.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><img src="{{ asset('images/rlogo.png') }}"  alt="randyce logo"></div>
		<label>RangyCe</label>
	</header>

	<section class="main">
		<section class="main-header">
			<span>Recent Updates</span>
			<h1>NOTIFICATIONS</h1>
		</section>
		
	</section>

	@include('layouts.bottom')

</body>
</html>