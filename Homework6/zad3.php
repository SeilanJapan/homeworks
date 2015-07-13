<?php
	/*
	Зад. 3.Да се генерира двумерен масив с размери МxN, 
	който има следните стойности:
	а) за M=3, N=4
	*/
	$matrix = array(array());

	$num = 0;
	for ($i=0; $i <=2 ; $i++) {
		for ($j=0; $j <=3 ; $j++) { 
				$matrix[$i][$j] = $num+5;
				$num++;
		}
	}

	for ($i=0; $i <=2 ; $i++) {
		for ($j=0; $j <=3 ; $j++) { 
				echo $matrix[$i][$j] . "";
		}
		echo "<br/>";
	}
?>

<?php
	/*
	Да се генерира двумерен масив с размери МxN, 
	който има следните стойности:
	б)за М = 4, N = 4
	*/
	$matrix = array(array());

	$num = 0;
	for ($i=0; $i <=3 ; $i++) {
		for ($j=0; $j <=3 ; $j++) { 
				$matrix[$i][$j] = $num+1;
				$num++;
		}
		$num = $num * -2;
	}

	for ($i=0; $i <=3 ; $i++) {
		for ($j=0; $j <=3 ; $j++) { 
				echo $matrix[$i][$j] . "";
		}
		echo "<br/>";
	}
?>
