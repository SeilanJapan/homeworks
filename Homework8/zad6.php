<?php
	
	/* Зад.6* Да се напише метод, който намира най-малък елемент в масив. 
	Чрез този метод да се сортират елементите на масива по големина 
	(пряка селекция, алгоритъм е онагледен тук на Select). */

	//Функцията sort() сортира масива по стойности
	$men = array('Hristo' => 65, 'Nasko' => 41, 'Ivan' => 85 );

		print_r($men);

		echo "<br/>";

	asort($men);

	foreach ($men as $key => $value) {
		echo "($key - $value) ";
	}

?>