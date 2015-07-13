<?php
	/*Задача1b. Да се напише програма, 
	която която генерира масив от 10
	произволни числа б) Да се намери сумата 
	на нечетните и сумата на четните числа. 
	Да се отпечатва коя от 2-те суми е по-голяма?*/

	$a = array();

	for($i = 0; $i <=9; $i++){
		$a[$i] = rand(1, 20);
		echo $a[$i] . " ";
	}

	$sum = 0;
	$num = 0;
	for($i = 0; $i <=9; $i++){
		if ($a[$i]%2==0) {
			$sum = $sum + $a[$i];
		}
		elseif ($a[$i]%2!=0) {
			$num = $num + $a[$i];
			
		}
	}
	echo "<br/>Sum of even: $sum";
	echo "<br/>Sum of no even: $num";

	if ($sum>$num) {
		echo "<br/>The bigger is sum of even - $sum";
	}
	else {
		echo "<br/>The bigger is sum of no even - $num";
	}
?>
