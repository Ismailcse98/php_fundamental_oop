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
			public $name;
			public $age;

			// public function __construct(){ // constructor auto loaded
			// 	echo "Constructor created";
			// }

			public function __construct($name, $age){
				$this->name = $name;
				$this->age = $age;
			}
			public function personDetails(){
				echo "Person name is {$this->name} and Person age is {$this->age}";
			}
		}
		$newPerson = new Person('Md. ismail',28);
		$newPerson->personDetails();
	?>
</body>
</html>