<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		interface Schoole{
			public function schoole();
		}
		interface Collage{
			public function collage();
		}
		interface Versity{
			public function versity();
		}

		class Teacher implements Schoole{
			public function __construct(){
				$this->schoole();
				$this->collage();
				$this->versity();
			}

			public function schoole(){
				echo "I am a Schoole teacher <br>";
			}
			public function collage(){
				echo "I am a versity teacher <br>";
			}
			public function versity(){
				echo "I am a versity teacher <br>";
			}
		}
		class Student implements Schoole{
			public function __construct(){
				$this->schoole();
				$this->collage();
				$this->versity();
			}

			public function schoole(){
				echo "I am a Schoole student <br>";
			}
			public function collage(){
				echo "I am a versity student <br>";
			}
			public function versity(){
				echo "I am a versity student <br>";
			}
		}

		$teacher = new Teacher;
		$student = new Student;
	?>
</body>
</html>