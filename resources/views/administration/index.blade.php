<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('css/admin/homeAdmin.css') }}" rel="stylesheet">
		<link href="{{ asset('css/never_touch_mc/modal.min.css') }}" rel="stylesheet">
	</head>
	<body>
		@extends('layouts.app')
		@extends('layouts.bottomAdmin')
		@section('content')
			<a class = "addStationLink" href="{{ url('adminSide\add_station')}}">Add Station</a>

		@endsection


		<!-- This section is for the table of the police station -->
		<section class="listStations">
			<div class="row">
				<div class="col-md-12">
					<br />
					<h5 align="center">Police Stations</h5>
					<br />

					<table class="table table-bordered">
						<tr>
							<th>Name of Station</th>
							<th>State</th>
							<th>City</th>
							<th>Address</th>
							<th>Zip Code</th>
							<th>Options</th>

							@foreach($data as $value)
							<tr>
								<td>{{$value->name_of_station}}</td>
								<td>{{$value->state}}</td>
								<td>{{$value->city}}</td>
								<td>{{$value->street}}</td>
								<td>{{$value->zip}}</td>
								<td>
									<button>View</button>
									<button>Edit</button>
									<button>Delete</button>
								</td>
							</tr>
							@endforeach
						</tr>
					</table>
				</div>
			</div>
		</section>

	</body>
</html>

