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
			public function display(){
				echo "This is method exists";
			}
		}
		
		if(class_exists('Person')){
			$pr = new Person;
			if(method_exists($pr, 'display')){
				$pr->display();
			}
		}
	?>
</body>
</html>