<?php
	/*Задача2a. Да се напише програма, 
	която която генерира масив от 10
	произволни числа Да се намери сумата на числата.
	ДА се използва rand()*/

	$a = array();

	for($i = 0; $i <=9; $i++){
		$a[$i] = rand(1, 20);
		echo $a[$i] . " ";
	}

	$sum = 0;
	for($i = 0; $i <=9; $i++){
		$sum = $sum + $a[$i];	
	}
	echo "</br>Total: $sum";
?>
