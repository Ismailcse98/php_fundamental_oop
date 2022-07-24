<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		class Category{
			public $cat;
			public $framework;

			public function setCat($a){
				$this->cat = $a;
			}
			public function getCat(){
				return $this->cat;
			}
			public function setFrame($b){
				$this->framework = $b;
			}
			public function getFrame(){
				return $this->framework;
			}
		}

		$ct = new Category;
		$ct->setCat('OOP PHP');
		$ct->setFrame('Wordpress');
		

		$pr = clone $ct;
		$pr-> setCat("Row PHP");
		$ct->setFrame('Laravel');
		echo $pr ->getCat()."<br/>";
		echo $pr ->getFrame()."<br/>";

		echo $ct ->getCat()."<br/>";
		echo $ct ->getFrame()."<br/>";
	?>
</body>
</html>