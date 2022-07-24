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
			public $user_name;
			public $user_id;

			public function __construct($name, $id){
				$this->user_name = $name;
				$this->user_id = $id;

				echo "User name is {$this->user_name} And user id is {$this->user_id}";
			}

			public function __destruct(){
				unset($this->user_name);
				unset($this->user_id);
			}
		}
		new Person('Md. ismail', 102);
	?>
</body>
</html>