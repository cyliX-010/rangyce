@include('web_layouts/side_left')
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/responsive.bootstrap4.min.css') }}">





                                        


<section>	
	<div id="contentDiv" style="position:absolute; top:0px; left: 25%; height: 100%; width: 75%; background-color: #e3e3ec;">
		<label>{{ auth::User()->id}}</label>


		<section>
	<script type="text/javascript">
		$(document).ready( function () {
			$.ajax({
    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    			url: '{{route('get_doctor_list')}}',
    			type: 'GET',
    			success:function(data){ 
    				console.log(data);
    				setTimeout(function(){ 
    					$('#loader-div').css('display','none');
	    				$.each(data, function(i, order) {
	    					var address =  data[i].street +' '+ data[i].city;
	    					var image = data[i].file_path == null ? '{{ asset('images/rlogo.png') }}' : data[i].file_path;
	    					$('#stations').append(  
							'<div class="station-div-parent">'+
								'<a class="police_div" href="doctor/'+data[i].id+'" data-policeId="1">'+
									'<div>'+
										'<img src="'+image+'" alt="hospital picture">'+					
										'<section class="medical-info">'+
											'<input type="hidden" id="station_id" value="'+data[i].id+'">'+
											'<section>'+
												'<label id="station_name">'+data[i].name+'</label>'+
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
		});
	</script>
</section>
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