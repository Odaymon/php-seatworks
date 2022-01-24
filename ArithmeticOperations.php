<html>
<head>
<title>Arithmetic Operations</title>
</head>

<?php
$answer = "";
$v1 = "";
$v2 = "";
if(isset($_POST['Submit']))
{
$v1 = $_POST['var1'];
$v2 = $_POST['var2'];
$answer = $v1 + $v2;
}
?>

<body>
<h2><b>INPUT TWO NUMBERS:</b></h2>

<form method="POST">
<p>Value 1: <input type="number" name="var1" value="<?php echo $v1; ?>"> </p>
<p>Value 2: <input type="number" name="var2" value="<?php echo $v2; ?>"> </p>
<p><input type="Submit" name="Submit"></p>
</form>

<p> Answer: 
<?php
echo $answer;
?> 
</p>
</body>
</html>
