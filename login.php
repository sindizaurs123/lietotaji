<?php
include "config.php";
?>
<html>
<head>
	<title>dadas</title>
	<meta charset='UTF-8'>
</head>
<body>


<?php

if($_POST){
	$sel = mysql_query("SELECT * FROM registration WHERE email = '$_POST[email]' AND parole = '$_POST[parole]';");
	$num = mysql_num_rows($sel);
	if ($num !== 0) {
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['parole'] = $_POST['parole'];
		// echo "User = ".$_SESSION['email'];
	}else{
		echo "Nepareizi dati";
	}
}
?>

<?php
if(isset($_SESSION['email'])){
	echo "Email ir ".$_SESSION['email']." <br /><a href='logout.php'>Iziet</a>";
}else{
?>

<form method='post'>
	E-pasts: <input type='text' name='email'><br/>
	Parole: <input type='password' name='parole'><br/>
	<input type='submit' value='ielogoties'>
</form>

<?php
}
?>
</body>
</html>