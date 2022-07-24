<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		abstract class Person{
			 public function display(){
				echo "Base class constant and class name  ".__CLASS__." </br>"; // refare Class name (Person)
				echo "Base class function and class name  ".get_class($this)." </br>"; // refare  Object class name (garandPerson)
			}
		}

		class ChildPerson extends Person{
			public function describe(){
				echo "Child class constant and class name  ".__CLASS__." </br>"; // refare Class name (ChildPerson)
				echo "Child class function and class name  ".get_class($this)." </br>"; // refare Object class name (garandPerson)
			}
		}

		class garandPerson extends ChildPerson{
			public function details(){
				echo "Garand class constant and class name  ".__CLASS__." </br>"; //Class name (garandPerson)
				echo "Garand class function and class name  ".get_class($this)." </br>"; // refare Object class name (garandPerson)
			}
		}
		$pr = new garandPerson;
		$pr->display();
		$pr->describe();
		$pr->details();

	?>
</body>
</html>