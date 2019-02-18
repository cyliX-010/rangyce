<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/information.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><a href="/page/doctor_profile"><i class="fa fa-arrow-left"></i></a></div>
		<img src="{{ asset('images/rlogo.png') }}" alt="randyce logo">
		<label>Get Appointment</label>
		<!-- <div class="h2"><a href=""><i class="color fa fa-gears (alias)"></i></a></div> -->
	</header>
	<section class="main">
		<section class="main-ctrl">
			<form>
				<section class="form-ctrl">
					

					<div id="simpleModal" class="modal">
				    <div class="modal-content">
				      <span class="closeBtn">&times;</span>
				      <p>Hello Thank you for setting up appointment we will notify you if you appointment already approve</p>
				      <a href="index.html"><label>OK</label></a>
				    </div>
				  </div>

					<section class="form1">
						<div>
							<input class="lbl" type="text" name="name" placeholder="First Name">
						</div>
						<div>
							<input class="lbl" type="text" name="name" placeholder="Last Name">
						</div>
						<div>
							<input class="lbl" type="text" name="address" placeholder="Address">
						</div>
						<div>
							<input class="lbl" type="number" name="mobile" placeholder="Mobile Number">
						</div>
						
						<div>
							
							<input class="same" type="number" name="height" placeholder="Height in Cm">
							<input class="same" type="number" name="weight" placeholder="Weight in Kg ">
							
						</div>
						<div>
							<input class="same" type="number" name="height" placeholder="Age">
							<select class="same" name="gender" style="position: absolute; margin-top: 0px;right: 29px; width: 110px; height: 30px; border-radius: 5px;" >
								<option >Gender</option>
							    <option value="Female">Female</option>
							    <option value="Male">Male</option>
							</select>
						</div>
						
						<div>
							<select class="lbl" name="bloodType" style="width: 240px; height: 30px; border-radius: 5px; ">
								<option >Blood Type</option>
							    <option value="A">A</option>
							    <option value="B">B</option>
							    <option value="AB">AB</option>
							    <option value="O">O</option>
							</select>
						</div>

						<label class="lbl-color">&nbsp;Set Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Set Time</label>
						<div>
							
							<input class="not-same1" type="date" name="date" placeholder="Your Date">
							<input class="not-same1" type="time" name="time" placeholder="Time">
						</div>
						<div>
							<textarea class="lbltextArea" type="text" name="bloo_grp" placeholder="Medical Notes History"></textarea>
						</div>

					</section>
					
				</section>
				</form>
				<div class="main-btn-ctrl">
					<input id="modalBtn" type="submit" name="submit" value="SUBMIT APPOINTMENT">
				</div>
			
		</section>
	</section>


	<script src="../../js/modal.js"></script>
</body>
</html>