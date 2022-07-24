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
			public $name = "Md. ismail";
			public $age = 25;
			public $add = "Chandpur";
			private $email = "ismail@gmail.com";
			protected $password = "123";

			public function innerSide(){
				foreach ($this as $key => $value) {
					echo "$key => $value <br/>";
				}
			}
		}

		$pr = new Person;
		$pr->innerSide();

	?>
</body>
</html>