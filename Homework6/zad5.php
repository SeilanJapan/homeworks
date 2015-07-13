<?php

	$info = array(array());

	$info[0] = array('name' => 'Rambo', 'year' => 1995, 
		'budget' => '$5000', 'type' => 'action', 'actor' => 'Silvester Staloun');
	$info[1] = array('name' => 'Cudjo', 'year' => 1995, 
		'budget' => '$6000', 'type' => 'horror', 'actor' => 'dog');
	$info[2] = array('name' => 'Rambo', 'year' => 1995, 
		'budget' => '$5000', 'type' => 'action', 'actor' => 'Silvester Staloun');
	$info[3] = array('name' => 'Rambo', 'year' => 1995, 
		'budget' => '$5000', 'type' => 'action', 'actor' => 'Silvester Staloun');
	$info[4] = array('name' => 'Rambo', 'year' => 1995, 
		'budget' => '$5000', 'type' => 'action', 'actor' => 'Silvester Staloun');

	for($i=0; $i<=4; $i++) {
		foreach($info[$i] as $k => $v) {
			echo "$k: $v <br/>";
		}
		echo "<br/>";
	}

	$career = array(array());

	$career[0] = array('name' => 'Jan klod', 'age' => 1995, 
		'nationality' => 'French', 'Oscars' => 0);
	$career[1] = array('name' => 'Jan klod', 'age' => 1995, 
		'nationality' => 'French', 'Oscars' => 0);
	$career[2] = array('name' => 'Jan klod', 'age' => 1995, 
		'nationality' => 'French', 'Oscars' => 0);
	$career[3] = array('name' => 'Jan klod', 'age' => 1995, 
		'nationality' => 'French', 'Oscars' => 0);
	$career[4] = array('name' => 'Jan klod', 'age' => 1995, 
		'nationality' => 'French', 'Oscars' => 0);

	for($i=0; $i<=4; $i++) {
		foreach($career[$i] as $k => $v) {
			echo "$k: $v <br/>";
		}
		echo "<br/>";
	}

?>
