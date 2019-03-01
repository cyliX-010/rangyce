<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/info/info1.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><a href="/page/doctor"><i class="fa fa-arrow-left"></i></a></div>
		<img src="{{ asset('images/rlogo.png') }}" alt="randyce logo">
		<label>HealthCare Services</label>
		<!-- <div class="h2"><a href=""><i class="color fa fa-gears (alias)"></i></a></div> -->
	</header>
	<section class="main">
		<section class="main1">
			<img src="{{ $doctor_info->file_path }}" align="doctor prolile">

			<section class="main1-info">
				<div>
					<label>{{ $doctor_info->name }}</label>
				</div>
				<div>
					@switch($doctor_info->user_type)
						@case(31)
							<label style="color: #696764">Dentist</label>
						@break
						@case(32)
							<label style="color: #696764">Surgeon</label>
						@break
						@case(33)
							<label style="color: #696764">Cardiologist</label>
						@break
						@case(34)
							<label style="color: #696764">Neurologist</label>
						@break
					@endswitch	
					
				</div>
				<div>
					<label class="label-color">{{ $doctor_info->email }}</label>
				</div>
			</section>

			<section class="main1-btn">
				<div>
					<a href="/page/doctor_appointment/{{ $doctor_info->id }}">Set Appointment</a>
				</div>
				<div class="btn1">
					<a href="/page/chat">Online Consultation</a>
				</div>
			</section>
			
		</section>

		<section class="main2-ctrl">
			
			<section class="main2">
			
				<b><label >Education</label></b>

				<section class="education-background">
					<div>
						<label>{{ $doctor_info->education }}</label>
					</div>
				</section>

				
			</section>

			<section class="main2">
				
				<b><label >Experience</label></b>

				<section class="education-background">
					<div>
						<label>{{$doctor_info->experience}}</label>
					</div>
				</section>

			</section>

			<section class="main2">
				
				<b><label >Awards and Recognitions</label></b>

				<section class="education-background">
					<div>
						<label>{{ $doctor_info->awards_recognition }}</label>
					</div>
				</section>

			</section>

		</section>

		

	</section>

</body>
</html>