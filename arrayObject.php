<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$arr = array('HTML','CSS','PHP');
    	$lang = new ArrayObject($arr);
    	$lang->append('JavaScript');
    	$iterator = $lang->getIterator();

    	while($iterator->valid()){
    		echo $iterator->current()."<br/>";
    		$iterator->next();
    	}

	?>
</body>
</html>