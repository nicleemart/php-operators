<?php

function calculator () {
	$numOne = $_GET["numOne"];
	$numTwo = $_GET["numTwo"];
	$operator = $_GET["operator"];

	if ($operator == "+") {
		echo $numOne + $numTwo;
	}
	elseif ($operator == "-") {
		echo $numOne - $numTwo;
	}
	elseif ($operator == "*") {
		echo $numOne * $numTwo;
	}
	elseif ($operator == "/") {
		echo $numOne / $numTwo;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form>
		<input type="text" name="numOne">
		<input type="text" name="operator">
		<input type="text" name="numTwo">
		<input type="submit">
	</form>

	<?php calculator(); ?>	

</body>
</html>