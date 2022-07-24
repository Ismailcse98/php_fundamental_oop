<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
         class Person{ // Class
         	// public $name="Md. Ismail";	// Property
         	public $name;
         	public $age;

         	public function psersonName(){ // Method
         		echo "Person Name is =".$this->name."<br>";
         	}
         	public function psersonAge($value){ // Method
         		echo "Person Age is =".$this->age = $value;
         	}
         }

         $newPerson = new Person; // Object
         $newPerson->name="Md. Ismail";	//Property
         $newPerson->psersonName();
         $newPerson->psersonAge(28);
	?>
</body>
</html>