<?php
include "config.php";
?>

<meta charset='UTF-8'>
<?php
if (isset($_SESSION['email'])) {
	if ($_POST) {
		if ($_POST['old'] == $_SESSION['parole']) {
			$up = mysql_query("UPDATE email SET parole = '$_POST[new]' WHERE email = '$_SESSION[email]'");
			echo "Parole nomainita";
		}else{
			echo "Vecā parole nav pareiza!";
		}
	}else{
?>		
			<form method='post'>
			Iepriekseja parole: <input type='password' name='old'><br/>
			Jaunā: <input type='password' name='new'><br/>
			<input type='submit' value='labot'>
			</form>
<?php
	}
}
?>