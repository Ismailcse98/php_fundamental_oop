<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		trait java{
			public function myJava(){
				echo "I love java";
			}
		}

		class myClass{
			use java; //trait name
		}

		$mc= new myClass;
		$mc->myJava();

	?>
</body>
</html>