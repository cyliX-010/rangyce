<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('css/admin/homeAdmin.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/never_touch_mc/modal.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/jquery.dataTables.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap-datatable.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">				
	</head>
	<body>		
		@include('layouts.app')		
		<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLongTitle">Add New Police Statio</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      <div class="modal-body">
		        <div>
		        	<input type="text" id="name_of_station" placeholder="Name of Station" required>
		        	<input type="text" id="state" placeholder="State" required>
		        </div>

		        <div>
		        	<input type="text" id="city" placeholder="City" required>
		        	<input type="text" id="street" placeholder="Street" required>
		        </div>

		        <div>
		        	<input type="text" id="zip" placeholder="Zip Code" required>
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id="save-new-PS">Add Station</button>
		      </div>
		    </div>
		  </div>
		</div>
		<a class="addStationLink" href="#" data-toggle="modal" data-target="#add-modal">Add Station</a>


		<!-- This section is for the table of the police station -->
		<section class="listStations">
			<div class="row">
				<div class="col-md-12">
					<br />
					<h5 align="center">Police Stations</h5>
					<br />
					<table class="table table-striped table-bordered" id="list-police-table">
						<thead>
							<tr>
								<th>Name of Station</th>
								<th>State</th>
								<th>City</th>
								<th>Address</th>
								<th>Zip Code</th>
								<th>Date Added</th>
								<th>Options</th>							
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</section>
		@include('layouts.bottomAdmin')
		<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('js/moment.js') }}"></script>
		<script src="{{ asset('js/moment-with-locales.js') }}"></script>
		<script src="{{ asset('js/modal.min.js') }}"></script>		
		<script src="{{ asset('js/modalmanager.min.js') }}"></script>
		<script src="{{ asset('js/sweetalert2@8.0.7.js') }}"></script>
		<script type="text/javascript">
			$(document).ready( function () {
			    console.log( "ready!" );
			    $('#list-police-table').DataTable( {
			           "processing": true,
			           "ajax": "{{ route('get_list_Station') }}",
			           columns: [
		                    { 
		                        data: 'name_of_station'
		                    },                
		                    {
		                        data: 'state',
		                    },
		                    { 
		                        data: 'city'
		                    },                
		                    {
		                        data: 'street',
		                    },
		                    { 
		                        data: 'zip'
		                    },                
		                    {
		                        data: 'created_at',
		                        render: function ( data, type, row ) 
		                        {
		                        	return moment(data).format('llll');
		                        }
		                    },
		                ],
			       } );

		        // Add new police station
		    	$('#save-new-PS').click(function(){
		    		var $this = $(this);
		    		$.ajax({
		    			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
		    			url: '{{route('add_new_station')}}',
		    			type: 'get',
		    			data: {
		    				name: $('#name_of_station').val(),
		    				state: $('#state').val(),
		    				city: $('#city').val(),
		    				street: $('#street').val(),
		    				zip: $('#zip').val(),
		    			},
		    			success:function(data){ 
		    			    Swal.fire(
		    			          '',
		    			          'Successfuly Added',
		    			          'success'
		    			        )      
		    			    $('#close').click();                     
		    			},
		    		});
		    	});
			});				
		</script>		
	</body>
</html>

