<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/doctor.css') }}" rel="stylesheet">

	@include('libraries.css')
</head>
<body>
	<header>
		<div class="h1"><a href="/page/hospitals"><i class="fa fa-arrow-left"></i></a></div>
		<img src="{{ asset('images/rlogo.png') }}" alt="randyce logo">
		<label>HealthCare Services</label>
		<!-- <div class="h2"><a href=""><i class="color fa fa-gears (alias)"></i></a></div> -->
	</header>
	<section class="main">
		<section class="m1">
			<input type="" name="" placeholder="Search Doctor">
		</section>
		<section class="m1-label">
			<label>Select Your Doctor</label>
		</section>

		

		<section class="m1-main">
			@foreach($doctor_list as $doctor)

			<div class="station-div-parent">
				<a class="police_div" href="#" data-policeId="1">
					<div>
						<img src="{{ $doctor->file_path }}" alt="hospital picture">					
						<section class="medical-info">
							<input type="hidden" id="station_id" value="{{ $doctor->id }}">
							<section>
								<label style="color: #696764">&nbsp;&nbsp;&nbsp;&nbsp;{{ $doctor->name }}</label>
								
							</section>
							@switch($doctor->user_type)
								@case(31)
									<label style="color: #696764">&nbsp;&nbsp;&nbsp;&nbsp;Dentist</label>
								@break
								@case(32)
									<label style="color: #696764">&nbsp;&nbsp;&nbsp;&nbsp;Surgeon</label>
								@break
								@case(33)
									<label style="color: #696764">&nbsp;&nbsp;&nbsp;&nbsp;Cardiologist</label>
								@break
								@case(34)
									<label style="color: #696764">&nbsp;&nbsp;&nbsp;&nbsp;Neurologist</label>
								@break
							@endswitch	
						</section>
					</div>
				</a>
			</div>		
			@endforeach	
		</section>
	</section>
	
</body>
</html>