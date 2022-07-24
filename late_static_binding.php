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
			public function describe(){
				echo static::getClass()."<br/>";
			}

			public static function getClass(){
				return __CLASS__;
			}
		}

		class myPerson extends Person{
			public static function getClass(){
				return __CLASS__;
			}
		}

		$pr = new Person;
		echo $pr->describe();
		$mypr = new myPerson;
		echo $mypr->getClass();
	?>
</body>
</html>