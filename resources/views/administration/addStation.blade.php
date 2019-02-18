<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<form action="/adminSide/add_station" method="POST">
			{{ csrf_field() }}
			<div>
				<input type="text" name="name_of_station" placeholder="Name of Station" required>
				<input type="text" name="state" placeholder="State" required>
			</div>

			<div>
				<input type="text" name="city" placeholder="City" required>
				<input type="text" name="street" placeholder="Street" required>
			</div>

			<div>
				<input type="text" name="zip" placeholder="Zip Code" required>
				<input type="submit" name="btnAddStation"  Value="Add Station">
			</div>


		</form>
		
	</body>
</html>