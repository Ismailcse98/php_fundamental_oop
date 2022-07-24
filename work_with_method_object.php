<?php
include "Work_with_method_object_class.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		First Number =  <input type="number" name="fName"> <br>
		Second Number =  <input type="number" name="lName"> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if(isset($_REQUEST['submit'])){
		$fNumber = $_REQUEST['fName'];
		$lNumber = $_REQUEST['lName'];
		if(empty($fNumber) or empty($lNumber)){
			echo "<span style='color:red;'>Field must not be empty</span>";
		}else{
			$obj = new MathClass;
	        echo $fNumber.' + '.$lNumber.' = '.$obj->sum($fNumber, $lNumber)."<br/>";
	        echo $fNumber.' - '.$lNumber.' = '.$obj->sub($fNumber, $lNumber)."<br/>";
	        echo $fNumber.' * '.$lNumber.' = '.$obj->mul($fNumber, $lNumber)."<br/>";
	        echo $fNumber.' / '.$lNumber.' = '.$obj->div($fNumber, $lNumber)."<br/>";
        }
	}
	?>
</body>
</html>