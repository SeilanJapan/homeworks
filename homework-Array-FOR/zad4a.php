<?php
		$a=0;

	for($i = 1; $i<=10; $i++){
		$b = $i*$a;
		echo "$a x $i = $b </br>";
		for($a = 2; $a<=8; $a++) {
			$b = $i*$a;
			echo "$a x $i = $b </br>";
		}
	}
?>
