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
			<section class="form-ctrl">
				<div>Clear the form to appoint other person using your account</div>

				<section class="form1">
					<div>
						<input type="hidden" id="doctorid" value="{{$doctor_id}}">
						<input class="lbl" type="text" id="firstname" placeholder="First Name" value="{{Auth::user()->first_name}}">
					</div>
					<div>
						<input class="lbl" type="text" id="lastname" placeholder="Last Name" value="{{Auth::user()->last_name}}">
					</div>
					<div>
						<input class="lbl" type="text" id="city" placeholder="City" value="{{Auth::user()->city}}">
					</div>
					<div>
						<input class="lbl" type="text" id="street" placeholder="Street" value="{{Auth::user()->street}}">
					</div>
					<div>
						<input class="lbl" type="text" id="zip" placeholder="Zip Code" value="{{Auth::user()->zip_code}}">
					</div>
					<div>
						<input class="lbl" type="text" id="mobile" placeholder="Mobile Number" value="{{Auth::user()->mobile_number}}">
					</div>
					<div>
						<input class="same" type="date" id="birthdate" placeholder="Age" value="{{Auth::user()->birthdate}}">
						<input class="same" type="text" id="gender" placeholder="Gender" value="{{Auth::user()->gender}}">
					</div>
					<div>
						
						<input class="same" type="number" id="height" placeholder="Height in Cm">
						<input class="same" type="number" id="weight" placeholder="Weight in Kg ">
						
					</div>
					<div>
						<select class="lbl" id="bloodType" style="width: 240px; height: 30px; border-radius: 5px; ">
							<option >Blood Type</option>
						    <option value="A">A</option>
						    <option value="B">B</option>
						    <option value="AB">AB</option>
						    <option value="O">O</option>
						</select>
					</div>

					<label class="lbl-color">&nbsp;Set Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Set Time</label>
					<div>
						
						<input class="not-same1" type="date" id="date" placeholder="Your Date">
						<input class="not-same1" type="time" id="time" placeholder="Time">
					</div>
					<div>
						<textarea class="lbltextArea" type="text" id="medicalNotes" placeholder="Medical Notes History"></textarea>
					</div>
					<div class="main-btn-ctrl">
						<input id="btn_clear" type="submit"value="Clear">
					</div>
					<br />
					<div class="main-btn-ctrl">
						<input id="submit_appointment" type="submit"value="SUBMIT APPOINTMENT">
					</div>
					
					

				</section>
				
			</section>
		</section>
	</section>


	
</body>
</html>
<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.js') }}"></script>
<script src="{{ asset('js/modal.min.js') }}"></script>		
<script src="{{ asset('js/modalmanager.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2@8.0.7.js') }}"></script>
<script>

	//add new appointments
	$('#submit_appointment').click(function(){
    		var $this = $(this);    		
    		$.ajax({
    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    			url: '{{route('add_new_appointment')}}',
    			type: 'post',
    			data: {
    				doctorid: $('#doctorid').val(),
    				firstname: $('#firstname').val(),
    				lastname: $('#lastname').val(),
    				city: $('#city').val(),
    				street: $('#street').val(),
    				zip_code: $('#zip').val(),
    				mobile_number: $('#mobile').val(),
    				birthdate: $('#birthdate').val(),
    				gender: $('#gender').val(),
    				height: $('#height').val(),
    				weight: $('#weight').val(),
    				bloodtype: $('#bloodType').val(),
    				set_date: $('#date').val(),
    				set_time: $('#time').val(),
    				medical_notes: $('#medicalNotes').val(),
    			},
    			success:function(data){ 
    				console.log(data, data.success);
    			    if(data.success)
    			    {
    			    	$('.lbl').val('');
    			    	$('.same').val('');
    			    	$('.not-same1').val('');
    			    	$('.lbltextArea').val('');
    			    	Swal.fire(
    			    	      '',
    			    	      'Successfuly Added',
    			    	      'success'
    			    	    )      
    			    	
    			    }                  
    			},
    		});
    	});

	$('#btn_clear').click(function() {
		$('.lbl').val('');
		$('.same').val('');
		$('.not-same1').val('');
		$('.lbltextArea').val('');
	})
</script>