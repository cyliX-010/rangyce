@include('web_layouts/side_left')

<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/never_touch_mc/responsive.bootstrap4.min.css') }}">
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
	<div id="contentDiv" style="position:absolute; top:0px; left: 25%; height: 100%; width: 75%; background-color: #a9b7c5;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered dt-responsive nowrap" id="list-report-table" style="width: 100%; margin-bottom: 10px; margin-top: 10px; padding-left: 2px;">
						<thead>
							<tr>
								<th>Date Reported</th>	
								<th>Reporter Name</th>
								<th>Address</th><!-- 
								<th>Street</th> -->
								<th>Incident</th>
								<th>Status</th>
								<th>Action</th>															
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
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


<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.responsive.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/moment-with-locales.js') }}"></script>
<script src="{{ asset('js/modal.min.js') }}"></script>		
<script src="{{ asset('js/modalmanager.min.js') }}"></script>
<script>
	$(document).ready( function () {
	    console.log( "ready!" );

	  	var report_table = $('#list-report-table').DataTable({
	    		responsive: true,
	           "processing": true,
	           "ajax": "{{ route('get_list_Reports') }}",
	           columns:[
		           {
		               data: 'created_at',
		               render: function ( data, type, row ) 
		               {
		               	return moment(data).format('llll');
		               }
		           },
                    { 
                        data: 'user.name'
                    },  
                    { 
                        data: 'user',
                        render: function ( data, type, row ) 
                        {
                        	return data.street +' '+ data.city;                     	
                        }
                    }, 
                    /*{ 
                        data: 'user.street'
                    }, */              
                    { 
                        data: 'incidents'
                    },                
                    {
                        data: 'status',
                        render: function ( data, type, row ) 
                        {
                        	if(data == 0)
                        		return '<label style="background-color: #e8b659;  margin-bottom: -10px left: 5px; height: 35px; width: 100%; padding-top: 5px; text-align:center;">Pending</label>';
                        	else if(data == 1)
                        		return '<label style="background-color: #6bc532;  margin-bottom: -10px left: 5px; height: 35px; width: 100%; padding-top: 5px; text-align:center;">Resolved</label>';
                        	else if(data == 2)
                        		return '<label style="background-color: #af3711;  margin-bottom: -10px; left: 5px; height: 35px; width: 100%; padding-top: 5px; text-align:center;">Unresolved</label>';
                        }
                    },               
                    {
                    	data: 'status',
                    	render: function(data, type, row)
                    	{
                    		if(data == 0)
                        		return '<button class="btn btn-primary" id="resolve-btn" style="background-color: #6bc532;   left: 5px; height: 40; width: 100%; padding-top: 10px; text-align:center;" data-statustype="1">Resolve</button>';
                        	else if(data == 1)
                        		return '<button class="btn btn-primary" id="resolve-btn" style="background-color:  #af3711;   left: 5px; height: 40; width: 100%; padding-top: 10px; text-align:center;" data-statustype="2">Unresolved</button>';
                        	else if(data == 2)
                        		return '<button class="btn btn-primary" id="resolve-btn" style="background-color: #6bc532;   left: 5px; height: 40; width: 100%; padding-top: 10px; text-align:center;" data-statustype="1">Resolve</button>';	
                    	}
                    }
                ],
	    });		

		$('#list-report-table').on('click','#resolve-btn',function(e){
			var report = report_table.row($(this).parents('tr')).data();
			$.ajax({
					headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
					url: '{{route('update_StatusReports')}}',
					type: 'POST',
					data: { 
							report_id : report.id,
							type : $(this).data('statustype'), 
							},
					success:function(data){ 
					    if(data.success)
					    {
					    	report_table.ajax.reload(null, false);
					    	Swal.fire(
					    	      '',
					    	      'Successfuly Added',
					    	      'success'
					    	    )      
					    	$('#add-modal').modal('hide'); 
					    }                  
					},
				});
		});
	});
	 
</script>