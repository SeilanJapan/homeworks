<?php

	/* Зад.5* Да се напише метод, който сумира 
	 масива в трети масив ($c[$i] = $a[$i] + $b[$i]). 
	 Двата масива може да са с различен размер.*/

	$arr1 = array('Maria' => 25, 'Mimi' => 30);
	$arr2 = array('Hristo' => 30, 'Nasko' => 41, 'Ivan' => 85 );

	$all = array_merge($arr1, $arr2);

	print_r($arr1);
	echo "<br/>";
	print_r($arr2);
	echo "<br/>";
	print_r($all);
?>
