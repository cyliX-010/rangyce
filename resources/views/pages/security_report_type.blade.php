<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/security/security.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="h1"><a href="/page/security_stations"><i class="fa fa-arrow-left"></i></a></div>
		<img src="{{ asset('images/rlogo.png') }}" alt="randyce logo">
		<label>Security/Safety Services</label>
	</header>
	<section class="main">

		<section class="main-header">
			<label>Report to the nearest security and safety stations.</label>
		</section>
		

		<section class="security-btn-ctrl">
			<section class="security-btn-ctrl1">				
				<div class="security-one">
					@foreach($station as $st)
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Accidents">
							<div class="security-btn">
								<img src="{{ asset('images/security/1.png') }}" alt="gallery image" />
								<p>Accidents</p>
							</div>
						</a>		
						
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Crime Report">
							<div class="security-btn">
								<img src="{{ asset('images/security/3.png') }}" alt="gallery image" />
								<p>Crime Report</p>
							</div>
						</a>
						
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Fire Alarm">
							<div class="security-btn">
								<img src="{{ asset('images/security/2.png') }}" alt="gallery image" />
								<p>Fire Alarm</p>
							</div>
						</a>
						
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Trouble Alarm">
							<div class="security-btn">
								<img src="{{ asset('images/security/4.png') }}" alt="gallery image" />
								<p>Trouble Alarm</p>
							</div>
						</a>
						
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Drug Abuse">
							<div class="security-btn">
								<img src="{{ asset('images/security/5.png') }}" alt="gallery image" />
								<p>Drug Abuse</p>
							</div>
						</a>
						
						<a class="approve_accidents" href="#" data-station_id="{{$st->id}}" data-report_type="Report Abuse">
							<div class="security-btn">
								<img src="{{ asset('images/security/6.png') }}" alt="gallery image" />
								<p>Report Abuse</p>
							</div>
						</a>
					@endforeach					
				</div>
			</section>
		</section>
	</section>
</body>
@include('libraries.libraries')
<script type="text/javascript">					
$('.approve_accidents').click(function(){
	Swal.fire({
	  title: '',
	  text: "Are You Sure You Want To Submit Report?",
	  type: 'warning',
	  customClass: 'swal-wide',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, submit it!'
	}).then((result) => {
	  if (result.value) {

	  	$.ajax({
	  		headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
	  		url: '{{route('submit_incidents_report')}}',
	  		type: 'GET',
	  		data: {
	  			station_id: $(this).data('station_id'),
	  			incidents: $(this).data('report_type'),
	  		},
	  		success:function(data){ 
	  			console.log(data);
	  		    Swal.fire('','Successfuly Added','success');                   
	  		},
	  	});	    
	  }
	});
});
</script>
</html>