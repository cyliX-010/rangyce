<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/job.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><a href="starter.html"><i class="fa fa-arrow-left"></i></a></div>
		<label>Home Services</label>
		
	</header>
	<section class="main">
		
		<label class="main-label">Please choose your job field:</label>

		<div class="main-center">
			<div>
				<label>Choose your Job Field</label>
				<select class="lbl" name="jobfield" style="width: 240px; height: 30px; border-radius: 5px; ">
					<option >Job Fields</option>
				    <option value="HouseKeeping">HouseKeeping</option>
				    <option value="YayaontheGo">Yaya on the Go</option>
				    <option value="Laundrywoman">Laundry Woman</option>
				    <option value="Plumber">Plumber</option>
				    <option value="Aircontech">Aircon Technician</option>
				
				</select>
			</div>

			<div class="main-btn">
				<a href="page/find-job.html"><label>Next</label></a>
			</div>
		</div>

	</section>
	
</body>
</html>