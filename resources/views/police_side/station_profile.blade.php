@include('web_layouts/side_left')
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/responsive.bootstrap4.min.css') }}">
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
	<a href="" style=" text-decoration: none;">
		<div class="station_btn" id="station_logout">Logout</div>
	</a>
</section>

<section>	
	<div id="contentDiv" style="position:absolute; top:0px; left: 25%; height: 100%; width: 75%; background-color: #e3e3ec;">
		<!-- Edit Details of Station -->
		<section id="secEditStation" class="detailsStation" style="position:relative; top:0px; left: 0%; height: 50%; width: 100%; background-color: #e3d2fc; display: none; ">
			<div class="titleSection" style="padding-top: 10px; padding-left:50px;  height: 13%; background-color: #2080f7; font-weight: bold; ">Edit Station Informations</div>

				<div>	
					<label style="margin-top:20px; margin-left:380px; font-weight: bold;">Name of Station</label>
					<input id="name_of_station" style="margin-top:0px; margin-left:380px; padding-left: 10px; height: 40px; width: 270px; border-radius: 5px; " type="text"  value="{{$station->name_of_station}}" required>
				</div>
				<div>	
					<label style="margin-top:10px; margin-left:380px; font-weight: bold;">Description</label>
					<textarea  id="description" style="margin-top:0px; margin-left:380px; padding-left: 10px; height: 60px; width: 270px; border-radius: 5px;" required>{{$station->description}}</textarea>
				</div>
				<div>	
					<label style="margin-top:5px; margin-left:380px; font-weight: bold;">City</label>
					<input id="city" style="margin-top:0px; margin-left:380px; padding-left: 10px; height: 40px; width: 270px; border-radius: 5px; " type="text"  value="{{$station->city}}" required >
				</div>
				<div>	
					<label style="position: absolute; top:65px; right:250px; font-weight: bold;">Street</label>
					<input id="street" type="text" style="position: absolute; top:97px; left:715px;padding-left: 10px; height: 40px; width: 270px; border-radius: 5px; " type="text"  value="{{$station->street}}" required >
				</div>
				<div>	
					<label style="position: absolute; top:150px; right:210px; font-weight: bold;">Postal Code</label>
					<input id="zip" type="text" style="position: absolute; top:180px; left:715px;padding-left: 10px; height: 40px; width: 270px; border-radius: 5px; " type="text"  value="{{$station->zip}}" required >
				</div>
				<div>
					<img id="station_livePreview" src="{{$station->file_path}}"  style="position: absolute; top: 20%; left: 3%; height:60%; width: 27%;">
					<input type="file" id="file_path" style="position: absolute; top:290px; left:50px;" accept="image/*">
				</div>

				<div>
					<input id="btnupdateStationInfo" type="submit" style="position: absolute; height: 40px; width: 100px; bottom:27px; right:40px; border: none;  background-color: #92c8e8; " value="Update">

					<input id="btnCancelupdateStationInfo" type="submit" style="position: absolute; height: 40px; width:100px; bottom:27px; right:150px; border: none;  background-color: #ec1e31; " value="Cancel">
				</div>
		</section>

		<!-- Station Information -->
		<section id="secStationInfo" class="detailsStationInfo" style="position:relative; top:0px; left: 0%; height: 50%; width: 100%; background-color: #e3d2fc;"> 
			<div class="titleSection" style="padding-top: 10px; padding-left:50px;  height: 13%; background-color: #2080f7; font-weight: bold; ">
				Station Informations
			</div>

			<div>
				<img src="{{$station->file_path}}"  style="position: absolute; top: 20%; left: 3%; height:72%; width: 30%;">
			</div>

			<div>	
				<label style="margin-top:40px; margin-left:380px; font-weight: bold;">Name of Station</label>
				<label style="margin-top:0px; margin-left:380px;">{{ $station->name_of_station}}</label>
			</div>

			<div>	
				<label style="margin-top:20px; margin-left:380px; font-weight: bold;">Description</label>
				<p style="margin-top:0px; margin-left:380px; width: 30%; height: 120px; font-size: 14px; ">{{ $station->description}} </p>
			</div>

			<div>	
				<label style="position: absolute; top:80px; right:250px; font-weight: bold;">Address</label>
				<p style="position: absolute; top:117px; left:715px;">{{ $station->street}}, {{ $station->city}}</p>
			</div>

			<div>
				<button id="btneditstation" style="position: absolute; height: 40px; width: 200px; bottom:30px; right:40px; border: none;  background-color: #92c8e8; ">Edit Station</button>
			</div>

		</section>



		{{-- Edit Manager of Station Info --}}
		<section id="editManagerInfo" class="detailsStationInfo" style="position:relative; top:0%; left: 0%; height: 50%; width: 100%; background-color: #e3d2fc; overflow: auto; display: none;">
			<div class="titleSection" style="position: fixed; padding-top: 10px; padding-left:50px;  height: 7%; width: 100%; background-color: #2080f7; font-weight: bold; ">
				Edit Owner Informations
			</div>

				<div>	
					<label style="margin-top:67px; margin-left:400px; font-weight: bold;">Firstname</label>
					<input id="first_name" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->first_name }}" required>
				</div>

				<div>	
					<label style="margin-top:10px; margin-left:400px; font-weight: bold;">Lastname</label>
					<input id="last_name" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->last_name }}" required>
				</div>

				<div>	
					<label style="margin-top:10px; margin-left:400px; font-weight: bold;">Birthdate</label>
					<input id="birthdate" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="date"  value="{{ Auth::user()->birthdate }}" required>
				</div>
				<div>	
					<label style="margin-top:10px; margin-left:400px; font-weight: bold;">Gender</label>
					<input id="gender" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->gender }}" required>
				</div>
				<div>	
					<label style="margin-top:10px; margin-left:400px; font-weight: bold;">Mobile Number</label>
					<input id="mobile_number" style="margin-top:0px;  margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->mobile_number }}" required >
				</div>

				<div>	
					<label style="margin-top:5px; margin-left:400px; font-weight: bold;">City</label>
					<input id="owner_city" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->city }}" required >
				</div>

				<div>	
					<label style="margin-top:5px; margin-left:400px; font-weight: bold;">Street</label>
					<input id="owner_street" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->street }}" required >
				</div>

				<div>	
					<label style="margin-top:5px; margin-left:400px; font-weight: bold;">Postal Code</label>
					<input id="zip_code" style="margin-top:0px; margin-left:400px; padding-left: 10px; height: 40px; width: 350px; border-radius: 5px; " type="text"  value="{{ Auth::user()->zip_code }}" required >
				</div>

				
				<div>
					<img id="owner_livePreview" src="{{ Auth::user()->file_path }}"  style="margin-top: -100%; margin-left: 30px;  height:60%; width: 30.66%;">
					<input type="file" id="ownerfile_path" style="position: absolute; top: 310px; left: 70px" accept="image/*">
				</div>

				<div>
					<input id="btnupdateOwnerInfo" type="submit" style="position: absolute; top: 730px; right: 10px; height: 40px; width: 100px; bottom:27px; right:40px; border: none;  background-color: #92c8e8; " value="Update">

					<input id="btnCancelupdateOwnerInfo" type="submit" style="position: absolute; top: 730px; right: 260px; height: 40px; width:100px; bottom:27px; right:150px; border: none;  background-color: #ec1e31; " value="Cancel">
				</div>

				<div style="position: absolute; top: 780px; right: 260px; height: 40px; width:100px; bottom:27px; right:150px; border: none;  background-color: transparent; display: block;"> </div>
		</section>

		<!-- Owner of Station Info-->
		<section id="secOwnerInfo" class="detailsStationInfo" style="position:relative; top:0%; left: 0%; height: 50%; width: 100%; background-color: #e3d2fc; "> 
			<div class="titleSection" style="padding-top: 10px; padding-left:50px;  height: 13%; background-color: #2080f7; font-weight: bold; ">
				Owner Informartions
			</div>

			<div>
				<img src="{{Auth::user()->file_path}}"  style="position: absolute; top: 20%; left: 3%; height:72%; width: 30%;">
			</div>

			<div>	
				<label style="margin-top:40px; margin-left:380px; font-weight: bold;">Name of Owner</label>
				<label style="position: absolute; top:115px; left:380px;">{{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}} </label>
			</div>

			<div>	
				<label style="margin-top:40px; margin-left:380px; font-weight: bold;">Birthdate</label>
				<label style="position: absolute; top:185px; left:380px;">{{Auth::user()->birthdate}}</label>
			</div>

			<div>	
				<label style="margin-top:30px; margin-left:380px; font-weight: bold;">Gender</label>
				<label style="position: absolute; top:245px; left:380px;">{{Auth::user()->gender}}</label>
			</div>

			<div>	
				<label style="margin-top:20px; margin-left:380px; font-weight: bold;">Mobile Number</label>
				<label style="position: absolute; top:295px; left:380px;">{{Auth::user()->mobile_number}}</label>
			</div>

			<div>	
				<label style="position: absolute; top:80px; right:250px; font-weight: bold;">Address</label>
				<p style="position: absolute; top:117px; left:715px;">{{ Auth::user()->street}}, {{ Auth::user()->city}}</p>
			</div>

			<div>
				<button id="toEditOwnerInfo" style="position: absolute; height: 40px; width: 200px; bottom:30px; right:40px; border: none;  background-color: #92c8e8; ">Edit Owner Details</button>
			</div>
		</section>
		
	</div>
</section>
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
	$(document).ready( function () {
	    console.log( "ready!" );

	    //Edit Station Info
	    $('#btneditstation').click(function (){
	    	$('#secStationInfo').hide();
	    	$('#secEditStation').css({
	    		display: 'block'
	    	});
	    });

		$('#btnCancelupdateStationInfo').click(function (){
			$('#secStationInfo').show();
			$('#secEditStation').css({
				display: 'none'
			});
		});

		$('#btnupdateStationInfo').click(function(){	
    		$.ajax({
    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
    			url: '{{route('update_station_info')}}',
    			type: 'POST',
    			data: {

    				station_id : {{ $station->id }},
    				name_of_station: $('#name_of_station').val(),
    				description: $('#description').val(),
    				city: $('#city').val(),
    				street: $('#street').val(),
    				zip: $('#zip').val(),
    				file_path: $('#station_livePreview').attr('src'),
    			},
    			success:function(data){ 
    				console.log(data, data.success);
    			    if(data.success)
    			    {
    			    	swal.fire(
    			    	      '',
    			    	      'Successfuly Updated',
    			    	      'success'
    			    	    )      
    			    	/*$('#add-modal').modal('hide'); */
    			    }                  
    			},
    		});
    	});


    	$('#file_path').change(function(){
	        if (this.files && this.files[0]) {
	             var reader = new FileReader();
	             reader.onload = function (e) {
	                var image = document.createElement('img');
	                image.src = e.target.result;

	                image.onload = function(){
	                    var canvas = document.createElement('canvas');
	                        canvas.width = image.width;
	                        canvas.height = image.height;
	                        var newHeight = 100;
	                        var newWidth = 100;
	                        var changeSize = false;

	                        if (this.height > newHeight) {
	                            changeSize = true;
	                        }
	                        else if (this.width > newWidth) {
	                            changeSize = true;
	                        }
	                        if (changeSize) {
	                            if (this.height > this.width) {
	                                var x = ((this.height - newHeight) / this.height) * this.width;
	                                newWidth = this.width - x;
	                            }
	                            else {
	                                var x = ((this.width - newWidth) / this.width) * this.height;
	                                newHeight = this.height - x;
	                            }
	                        }
	                        else {
	                            newHeight = this.height;
	                            newWidth = this.width;
	                        }
	                        canvas.width = newWidth;
	                        canvas.height = newHeight;
	                        var ctx = canvas.getContext("2d");
	                        ctx.drawImage(image, 0, 0, newWidth, newHeight);
	                        var dataurlTemp = canvas.toDataURL();
	                        $('#station_livePreview').attr('src', dataurlTemp);
	                }

	             }
	             reader.readAsDataURL(this.files[0]);
	        }
        });




    	//Edit Owner Info
	    $('#toEditOwnerInfo').click(function (){
	    	$('#secOwnerInfo').hide();
	    	$('#editManagerInfo').css({
	    		display: 'block'
	    	});
	    });

		$('#btnCancelupdateOwnerInfo').click(function (){
			$('#secOwnerInfo').show();
			$('#editManagerInfo').css({
				display: 'none'
			});
		});

        //Edit Manager or Owner's Inforamtion of the Station
        		$('#btnupdateOwnerInfo').click(function(){	
            		$.ajax({
            			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            			url: '{{route('update_manager_info')}}',
            			type: 'POST',
            			data: {

            				user_id : {{ Auth::user()->id }},
            				first_name: $('#first_name').val(),
            				last_name: $('#last_name').val(),
            				birthdate: $('#birthdate').val(),
            				gender: $('#gender').val(),
            				mobile_number: $('#mobile_number').val(),
            				city: $('#owner_city').val(),
            				street: $('#owner_street').val(),
            				zip_code: $('#zip_code').val(),
            				file_path: $('#owner_livePreview').attr('src'),
            			},
            			success:function(data){ 
            				console.log(data, data.success);
            			    if(data.success)
            			    {
            			    	swal.fire(
            			    	      '',
            			    	      'Successfuly Updated',
            			    	      'success'
            			    	    )      
            			    	/*$('#add-modal').modal('hide'); */
            			    }                  
            			},
            		});
            	});


            	$('#ownerfile_path').change(function(){
        	        if (this.files && this.files[0]) {
        	             var reader = new FileReader();
        	             reader.onload = function (e) {
        	                var image = document.createElement('img');
        	                image.src = e.target.result;

        	                image.onload = function(){
        	                    var canvas = document.createElement('canvas');
        	                        canvas.width = image.width;
        	                        canvas.height = image.height;
        	                        var newHeight = 100;
        	                        var newWidth = 100;
        	                        var changeSize = false;

        	                        if (this.height > newHeight) {
        	                            changeSize = true;
        	                        }
        	                        else if (this.width > newWidth) {
        	                            changeSize = true;
        	                        }
        	                        if (changeSize) {
        	                            if (this.height > this.width) {
        	                                var x = ((this.height - newHeight) / this.height) * this.width;
        	                                newWidth = this.width - x;
        	                            }
        	                            else {
        	                                var x = ((this.width - newWidth) / this.width) * this.height;
        	                                newHeight = this.height - x;
        	                            }
        	                        }
        	                        else {
        	                            newHeight = this.height;
        	                            newWidth = this.width;
        	                        }
        	                        canvas.width = newWidth;
        	                        canvas.height = newHeight;
        	                        var ctx = canvas.getContext("2d");
        	                        ctx.drawImage(image, 0, 0, newWidth, newHeight);
        	                        var dataurlTemp = canvas.toDataURL();
        	                        $('#owner_livePreview').attr('src', dataurlTemp);
        	                }

        	             }
        	             reader.readAsDataURL(this.files[0]);
        	        }
                });




	});
	 
</script>