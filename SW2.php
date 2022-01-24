<html>
<head>
<title>Seatwork 2</title>
</head>

<?php
$choice = "";
$iteration = "";
$limit = "";
$sentence = "";
$funct = "";
$output = "";
?>

<body>

<form method="POST">
<p>Select from the menu:
		<select name="choice">
			<option value="" disabled selected>Select Action</option>
			<option value="for">FOR LOOP</option>
			<option value="dowhile">DO-WHILE LOOP</option>
			<option value="while">WHILE LOOP</option>
		</select>
</p>

<p>Value 1: <input type="text" name="var1" value="<?php echo $iteration; ?>"> </p>
<p>Value 2: <input type="text" name="var2" value="<?php echo $limit; ?>"> </p>
<p>Value 2: <input type="text" name="var3" value="<?php echo $sentence; ?>"> </p>

	<p>Which function:
		<select name="funct">
			<option value="" disabled selected>Select Action</option>
			<option value="rev">strrev()</option>
			<option value="wordcount">str_word_count()</option>
			<option value="normal">normal string output</option>
		</select>
	</p>
	
<p><input type="Submit" name="Submit"></p>
</form>

<p>
	Loop Output:
	<?php
$choice = "";
$iteration = "";
$limit = "";
$sentence = "";
$funct = "";
$output = "";

if(isset($_POST['Submit']))
{
	
	$iteration = $_POST['var1'];
	$limit = $_POST['var2'];
	$sentence = $_POST['var3'];

	if($_POST['choice'] == "for")
	{
		if($_POST['funct'] == "rev"){
			for($i=$iteration;$i<$limit;$i++){
			echo strrev($sentence);
			}
		}
		else if($_POST['funct'] == "wordcount"){
			for($i=$iteration;$i<$limit;$i++){
			echo str_word_count($sentence);
			}
		}
		else if($_POST['funct']== "normal")
		{
			for($i=$iteration;$i<$limit;$i++){
			echo $sentence;
			}
		}
	}
	else if($_POST['choice'] == "dowhile")
	{
		if($_POST['funct'] == "rev")
		{
			do{
			echo strrev($sentence);
			$iteration++;
			}while($iteration<$limit);
		}
		else if($_POST['funct'] == "wordcount")
		{
			do{
			echo str_word_count($sentence);
			$iteration++;
			}while($iteration<$limit);
		}
		else if($_POST['funct'] == "normal")
		{
			do{
			echo $sentence;
			$iteration++;
			}while($iteration<$limit);
		}
	}
	else if($_POST['choice'] == "while")
	{
		if($_POST['funct'] == "rev")
		{
			while($iteration<$limit)
			{
				echo strrev($sentence);
				$iteration++;
			}
		}
		else if($_POST['funct'] == "wordcount")
		{
			while($iteration<$limit)
			{
				echo str_word_count($sentence);
				$iteration++;
			}
		}
		else if($_POST['funct'] == "normal")
		{
			while($iteration<$limit)
			{
				echo $sentence;
				$iteration++;
			}
		}
	}
}
	?>
</p>
</body>
</html>