@include('web_layouts/side_left')
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/responsive.bootstrap4.min.css') }}">

<section>
	<div id="stationLogo" style="position: absolute; top: 5%; left: 3%; height:35%; width: 18%; background-color: transparent; ">
		<img src="{{ asset('images/rlogo.png') }}" style="position: absolute; top: 5%; left: 3%; height:100%; width: 100%; " >
	</div>
	<a href="station_home" style=" text-decoration: none;">
		<div class="station_btn" id="station_home">Home</div>
	</a>
	<a href="station_profile" style=" text-decoration: none;">
		<div class="station_btn" id="station_profile">Profile</div>
	</a>
	<a href="station_reports" style=" text-decoration: none;">
		<div class="station_btn" id="station_reports">Reports</div>
	</a>
	<a href=""  style=" text-decoration: none;">
		<div class="station_btn" id="station_logout">Logout</div>
		
	</a>
</section>



                                        


<section>	
	<div id="contentDiv" style="position:absolute; top:0px; left: 25%; height: 100%; width: 75%; background-color: #e3e3ec;">
		<label>{{$station->id}}</label>
	</div>
</section>

<style>
	.station_btn{
		position: relative; 
		top: 445px; 
		left: 6px; 
		height: 58px; 
		width: 24%; 
		background-color: #248cca;
		margin-top: 3px;
		padding-top: 15px;
		padding-left: 90px;
		color: #fff;
		font-size: 17px;
		font-family: arial;
	}
</style>