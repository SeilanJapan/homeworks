<?php

	/*  Зад.4 Даден е двумерен масив с размери $M x $N с произволни числа. 
	Да се извика метод, който отпечатва индексите на масива и тяхната стойност */
	
	function print_arr($i, $j)
	{
		$matrix = array(array());

		for ($i=0; $i <=5 ; $i++) { 
		 	for ($j=0; $j <=4 ; $j++) { 
		 		$matrix[$i][$j]= rand(1,9);
		 	}
		 } 

		 for ($i=0; $i <=5 ; $i++) { 
		 	for ($j=0; $j <=4 ; $j++) { 
		 		echo "[$i][$j]-";
		 		echo $matrix[$i][$j] . '  ';
		 	}
		 	echo "<br/>";
		 } 
	}

		echo "<br/>";
	print_arr(5, 9);
		echo "<br/>";
	print_arr(4, 6);

?>
