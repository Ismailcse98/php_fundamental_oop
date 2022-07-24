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
			public static $name="Md. ismail";
			public $age = 20;

			public function myAge(){
				echo $this->age.'<br>';
			}
			public static function desplay(){
				echo self::$name;
			}
		}
		$pr = new Person;
		$pr->myAge();
		Person::desplay();
	?>
</body>
</html>