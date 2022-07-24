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
			public $a = 0;
			public $b = 0;
			public $result;

			public function getValue($x,$y){
				$this->a = $x;
				$this->b = $y;
				return $this;
			}
			public function getResult(){
				$this->result = $this->a*$this->b;
				return $this->result;
			}

		}
		$pr = new Person;
		echo "Result is = ".$pr->getValue(5,3)->getResult();

	?>
</body>
</html>