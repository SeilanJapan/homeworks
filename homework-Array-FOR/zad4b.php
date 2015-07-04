<!DOCTYPE html>
<html>
<head></head>
<body>

	<table border="1";>

<?php
		$a=0;
		
	for($i = 1; $i<=10; $i++){
		$b = $i*$a;
		echo "<tr><td>$a x $i = $b <td/></tr>";

		for($a = 2; $a<=8; $a++) {
			$b = $i*$a;
			echo "<tr><td>$a x $i = $b <td/><tr/>";
		}
	}	
?>

	</table>
</body>
</html>
