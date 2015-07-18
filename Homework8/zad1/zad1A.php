<!DOCTYPE html>
<head></head>
<body>

/* Зад.1 Да се напише метод, който отпечатва числата от 42 до 11. Да се извика метода в 3 различни тага.  */

		<h3><?php print_num(); ?></h3>	
		<div><?php print_num(); ?></div>
		<textarea><?php print_num(); ?></textarea>


			<?php
				
				function print_num()
				{
					$sum = 0;
					for($i = 31; $i >= 0; $i--){
						$sum = $i + 11;
						echo $sum . " ";
					}
				}

			?>

</body>
</html>
