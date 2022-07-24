<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php

		class Person{
			public function personAge(){
				echo "My age is 25 years";
			}
		}
		class Calculation{
			//Array pass
			// public function getArray(array $x){
			// 	foreach ($x as $value) {
			// 		foreach($value as $y){
			// 			echo $y."<br/>";
			// 		}
			// 	}
			// }


			//Object pass
			public $a;
				public function __construct(Person $x){
					$this->a = $x;
					$this->a->personAge();
				}
		}

		// $cal = new Calculation;
		//Pass Array
		// $arr = array(
		// 			array(10,20,30),
		// 			array(40,50,60)
		// );
		// $cal->getArray($arr);

		//Pass Object
		$pr = new Person;
		new Calculation($pr);

	?>
</body>
</html>