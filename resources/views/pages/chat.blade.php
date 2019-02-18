<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/chat/chat.css') }}" rel="stylesheet">
	<link href="{{ asset('css/feed/feed.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><a href="/home"><i class="fa fa-arrow-left"></i></a><label>Chat</label></div>
		<div class="h2"><a href=""><i class="color fa fa-user-plus"></i></a></div>
	</header>

	<section class="main">

		<h1>MESSAGES</h1>
		
	</section>


	<section class="btn-ctrl">
		<ul>
			<li>
				<a href="/page/feeds" title="News">
					<i class="fa fa-newspaper-o"></i>
					<section><span>Feed</span></section>
				</a>
			</li>
			<li>
				<a href="/page/notification" title="Notification">
					<i class="fa fa-exclamation-circle"></i>
					<section><span>Notification</span></section>
				</a>
			</li>
			<li>
				<a href="/home">
					<i class="fa fa-connectdevelop" title="Home"></i>
					<section><span>Services</span></section>
				</a>
			</li>
			<li>
				<a href="/page/chat" title="Messenger">
					<i class="fa fa-wechat (alias)"></i>
					<section><span>Chat</span></section>
				</a>
			</li>
			<li>
				<a href="/page/profile" title="Profile">
					<i class="fa fa-user"></i>
					<section><span>Profile</span></section>
				</a>
			</li>
		</ul>
	</section>

</body>
</html>