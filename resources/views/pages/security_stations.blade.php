<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prototype</title>
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/health.css') }}" rel="stylesheet">

	@include('libraries.css')
</head>
<body>
	<header>
		<div class="h1"><a href="/home"><i class="fa fa-arrow-left"></i></a></div>
		<img src="{{ asset('images/rlogo.png') }}" alt="randyce logo">
		<label>Police Stations</label>
	</header>
	<section class="main">
		<section class="m1">
			<input type="text" placeholder="Search Police Station" id="search-criteria">
		</section>
		<section class="m1-label">
			<label>Select Nearest Station</label>
		</section>

		<div id="loader-div">
			@include('libraries.loader')
			@include('libraries.loader')
			@include('libraries.loader')
		</div>

		<section class="m1-ctrl" id="stations">						
		</section>
	</section>
	@include('libraries.script')	
	<script type="text/javascript">
		$(document).ready( function () {
			$.ajax({
    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    			url: '{{route('get_police_info')}}',
    			type: 'GET',
    			success:function(data){ 
    				console.log(data);
    				setTimeout(function(){ 
    					$('#loader-div').css('display','none');
	    				$.each(data, function(i, order) {
	    					var address = data[i].state +' '+ data[i].street +' '+ data[i].city;
	    					var image = data[i].file_path == null ? 'images/hospital/southGeneral.jpg' : data[i].file_path;
	    					$('#stations').append(  
							'<div class="station-div-parent">'+
								'<a class="police_div" href="police/station/report/'+data[i].id+'" data-policeId="1">'+
									'<div>'+
										'<img src="'+image+'" alt="hospital picture">'+					
										'<section class="medical-info">'+
											'<input type="hidden" id="station_id" value="'+data[i].id+'">'+
											'<section>'+
												'<label id="station_name">'+data[i].name_of_station+'</label>'+
											'</section>'+
											'<section>'+
												'<label id="station_address">'+address+'</label>'+
											'</section>'+
											'<section>'+
												'<label id="station_contact">(02) 272 2222</label>'+
											'</section>'+
											'<section>'+
												'<a class="link-color" href="https://www.google.com/maps/place/Cebu+South+General+Hospital/@10.2320746,123.7711518,15z/data=!4m5!3m4!1s0x0:0xd7cd0125a3c164f5!8m2!3d10.2320746!4d123.7711518" target="_blank">See On Google Map</a>'+
											'</section>'+
										'</section>'+
									'</div>'+
								'</a>'+
							'</div>'
	    					);
				        });  
    				},3000);              
    			},
    		});

    		$('#search-criteria').on('input',function(){
    		  var txt = $('#search-criteria').val();
    		  if(txt != null)
    		  {            
    		    $('.station-div-parent').hide();        
    		    $('.station-div-parent').each(function(index, d){
    		      var $this = $(this);
    		      if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
    		        $(this).show();               
    		      }
    		    });     
    		  }        
    		});
		});
	</script>
</body>
</html>