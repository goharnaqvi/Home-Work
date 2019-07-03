<!DOCTYPE html>
<html>

<body>
		<?php

					$x = "hello word!";
					$y = "hello word!";

					echo $x;
					echo "<br>";
					echo $y;
					//php integer
					echo "<br>";
					$x = 5985;

					var_dump($x);
					//php float
					echo "<br>";

					$x = 59.855;

					var_dump($x);
					//php array
					echo "<br>";
					$cars = array ("Volvo","BMW","Toyota");
					var_dump($cars);
					//php objects
					echo "<br>";
					class car {

						function car(){
							$this->model = "VW";
						}

					}
					$herbie = new car();

					echo $herbie->model;
					//nul value
					echo "<br>";
					$x = "hello word!";
					$x = null;

					var_dump($x);


		?>

</body>

</html>