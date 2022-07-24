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
		public $id;

		public function setId($id){
			$this->id = $id;
		}

		public function __destruct(){
			if(!empty($this->id)){
				echo "Saving Person";
			}
		}
	}
	$newPerson  = new Person;
	$newPerson->setId(101);
	?>
</body>
</html>