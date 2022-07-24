<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		abstract class Student{
			public $name;
			public $age;

			public function desplay(){
				echo "My name is {$this->name} and my age is {$this->age}<br/>";
			}
			abstract public function details();
		}
		 
		class Boy extends Student{
			public function describe(){
				return parent::desplay()." And I am a boy <br/>";
			}
			public function details(){
				return "I am a students";
			}
		}

		$s=new Boy;
		$s->name="Md ismail";
		$s->age= 20;
		echo $s->describe();
		echo $s->details();
	?>
</body>
</html>