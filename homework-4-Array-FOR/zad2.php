<?php
	$x = 4;
	$y = 56;
	$a = $x;
	while($a<=$y){
		
		if($a%3==0){
			echo "$a ";
		}
		elseif($a%7==0){
			echo "$a ";
		}
		$a++;
	}
?>
