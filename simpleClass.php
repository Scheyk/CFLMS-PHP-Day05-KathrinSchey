<!DOCTYPE html>
<html>
<head>
	<title>simple class</title>
</head>
<body>

	<?php

		class vehicles {
			public $name;
			public $model;
			public $makeYear;
			public $color;
			public $fuelType;

			function __construct($name,$model)
  			{
      			$this->name = $name;
      			$this->model = $model;      			     			
  			}

  			public function show() {
  				return "your car is ".$this->name." and the model is ".$this->model;
  			}  			  			
		}

		$vehicle1 = new vehicles("Tesla","ModelX");		
		$toPrint = $vehicle1->show();
		echo $toPrint;
		echo "<br>";
		echo "<hr>";

		$vehicle2 = new vehicles("Audi","A3");		
		$toPrint = $vehicle2->show();
		echo $toPrint;
		echo "<br>";
		echo "<hr>";

		$vehicle3 = new vehicles("VW","Golf IV");		
		$toPrint = $vehicle3->show();
		echo $toPrint;
		echo "<br>";
		echo "<hr>";


		/**
		 * start task 2 
		 */

		class ships extends vehicles
		{
			public $month;
			public $year;
			
			function __construct($month,$year)
			{
				
				$this->month = $month;
				$this->year = $year;
			}

			public function show() {
				return parent::show()."<br> the month was ".$this->month." and the year was ".$this->year;
			}
		}

		$ship1 = new ships(10,2020);
		$ship1->name = "Tesla";
		$ship1->model = "S";
		echo $ship1->show();
		echo "<br>";
		echo "<hr>";

		$ship2 = new ships(12,1990);
		$ship2->name = "VW";
		$ship2->model = "GOLF III";
		echo $ship2->show();
		echo "<br>";
		echo "<hr>";

		$ship3 = new ships(01,1985);
		$ship3->name = "Ford";
		$ship3->model = "Mustang";
		echo $ship3->show();
		echo "<br>";
		echo "<hr>";


		
	?>

</body>
</html>