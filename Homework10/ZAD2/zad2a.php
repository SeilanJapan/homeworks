<!DOCTYPE html>
<head>
		<!--Bootstrap files-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<!--jQuery library-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
</head>
<body>
	
	<h1>Dlops</h1>

	<img src="https://www.helpsoft.dk/img/viggo/welcome.png" width="15%"/>


<?php

	$conn = mysqli_connect('localhost', 'root', '', 'vratsa_dlopia');

	if (!$conn) {
		die("Connection failed:" . 
			mysqli_connect_error());
	}

	echo "Welcome in Dlopia!<br/>";


	$q = "SELECT * from dlops";
	$result = mysqli_query($conn,$q);


	echo "<a href='form.php'><input type='button' class='btn btn-info' value='Add New Type of Dlop' name='submit'/></a><br/><br/>";

	echo "<table class='table table-striped'>";
			echo "<tr>
					<td>№</td>
					<td>First name</td>
					<td>Last name</td>
					<td>Race</td>
					<td>Gender</td>
					<td>Birth</td>
					<td>Weight</td>
					<td>Status</td>
					<td>Edit</td>
					<td>Delet</td>
				</tr>";
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "
					  <td>$row[id]</td>
					  <td>$row[first_name] </td>
					  <td>$row[last_name] </td>
					  <td>$row[race]</td> 
					  <td>$row[gender]</td> 
					  <td>$row[date_of_birth]</td> 
					  <td>$row[weight]</td> 
					  <td>$row[status]</td>";
				echo "<td> <button type='button' class='btn btn-warning'>Edit</button></td>
					  <td><button type='button' class='btn btn-danger'>Delete</button></td>";	
				echo "<tr/>";
			}
		}
	echo "</table>";
?>

</body>
</html>
