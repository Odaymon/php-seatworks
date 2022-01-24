<!DOCTYPE html>
<html>
<head>
	<title>4/21/2018</title>
</head>
<body>

<?php
	$arr = array(1,'a','b','c',2,'d','e','f',3);

	function getSum($arr){
		$sum = 0;
		for($x = 0; $x < count($arr);$x++){
			if(is_String($arr[$x])){
				echo "This is a String: ".$arr[$x]."<br>";
			}
			else
				$sum += $arr[$x];
		}
		return $sum;
	}

	echo "Sum is: ".getSum($arr);

	$test = array(1,2,3,4,100,101,102);

	function minMax($var){
		sort($var);
		echo "<br><br>Lowest: ".$var[0]." Highest: ".$var[count($var)-1]."<br>";
	}

	function sum($var){
		$sum = 0;
		foreach($var as $a){
			$sum += $a;
		}
		echo "Sum: ".$sum;
	}

	minMax($test);
	sum($test);

	echo "<br><br>today is ".date("Y/m/d")."<br>";
	echo "today is ".date("Y.m.d")."<br>";
	echo "today is ".date("Y-m-d")."<br>";
	echo "today is ".date("l")."<br>";

	date_default_timezone_set("America/New_York");
	echo "<br>time is ".date("h:i:sa")."<br>";

	?>

	<br>&copy;2010.
	<?php echo date("Y"); ?>
</body>
</html>