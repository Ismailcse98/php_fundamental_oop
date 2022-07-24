<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		// Magic method
		// i) __constract()
		// ii) __destract()
		// iii) __get($property)
		// iv) __set($property, $value)
		// v) __call($method, $arg-array)

	// iii) __get($property)

	// class Student{
	// 	public function __get($pm){
	// 		echo $pm;
	// 	}
	// }
	// $st = new Student;
	// $st->Hello;

	// iv) __set($property, $value)

	// class Student{
	// 	public function __set($pm,$value){
	// 		echo $pm."=>".$value;
	// 	}
	// }
	// $st = new Student;
	// $st->pm='Hello';

	// v) __call($method, $arg-array)

	class Student{
		public function __call($pm,$value){
			echo $pm."=>".implode(',' , $value);
		}
	}
	$st = new Student;
	$st->describe(2,3,6,5,4);


	?>
</body>
</html>