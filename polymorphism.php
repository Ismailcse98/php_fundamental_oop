<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		class UserData {
			public $user_name;
			public $user_id;

			public function __construct($name,$id){
				$this->user_name = $name;
				$this->user_id = $id;
			}

			public function display(){
				echo "User name is : {$this->user_name} And User id is {$this->user_id}<br/>";
			}
		}

		class Admin extends UserData{
			public $add;
			public function display(){ //Polymorphism
					echo "User name is : {$this->user_name} And User id is {$this->user_id}  And User add is {$this->add}<br/>";
			}
		}

		$pr = new UserData("Md. ismail",0);
		$pr->display();

		$ad = new Admin('admin',1);
		$ad->add='chandpur';
		$ad->display();
	?>
</body>
</html>