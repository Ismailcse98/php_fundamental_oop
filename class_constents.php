<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		class person{
			const MYNAME = 'Md. ismail Hossain';

			public function desplay(){
				echo person::MYNAME;
			}
		}
		$pr = new person;
		$pr->desplay();
	?>
</body>
</html>