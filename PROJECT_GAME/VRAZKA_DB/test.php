<!DOCTYPE html>
<html>
<head>
	<!--CSS Files-->
		<link rel="stylesheet" type="text/css" href="style.css">

	<!--Bootstrap files-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<!--jQuery library-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<meta charset="UTF-8"/>


</head>
<body>

<?php 
	ini_set('display_errors', 1);

	header('Content-Type: text/html, charset=utf-8');
	
	$conn = mysqli_connect('localhost', 'root', '', 'br_rich');

	if (!$conn) {
		die("Connection failed:" . 
			mysqli_connect_error());
	}
	else{
		echo "Welcome in How want to be a millonare!<br/>";
	}

	$q = "SELECT * from questions_1";
	$result = mysqli_query($conn,$q);
/*Трябва да посочиш конкретен въпрос, който искаш да ти извди от базата данни, 
което предполагам ще стане като посочим конкретен ключ */
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "{$row['question']}<br/>";
					echo "A. {$row['a1']} ";
					echo "B. {$row['a2']}<br/>";
					echo "C. {$row['a3']}";
					echo "D. {$row['a4']}";
									}
			}
					
?>
