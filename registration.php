<?php
include "config.php";
?>

<html>
<head>
	<title>Registration</title>
	<meta charset='UTF-8'>
</head>
<body>

<?php

if($_POST){
	$in = mysql_query("INSERT INTO registration(vards, uzvards, email, dzd, dzimums, parole) 
		VALUES ('$_POST[vards]', '$_POST[uzvards]', '$_POST[email]', '$_POST[dzd]', '$_POST[dzimums]', '$_POST[parole]')");
	if($in){
		echo 'viss ok';
	} else {
		die(mysql_error());
	}
}

?>
<form method='post'>
	Vards: <input type='text' name='vards'><br/>
	Uzvards: <input type='text' name='uzvards'><br/>
	E-pasts: <input type='text' name='email'><br/>
	Dzimsanas datums: <input type='date' name='dzd'><br/>
	Dzimums: <input type='text' name='dzimums'><br/>
	Parole: <input type='password' name='parole'><br/>
	<input type='submit' value='registreties'>
</form>

</body>
</html>