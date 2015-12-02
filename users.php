<?php
include "config.php";
?>

<meta charset='UTF-8'>
<?php

$cik = 3; //viena lapa
$pg = $_GET['pg'];
if ($pg == 1 or $pg == 0) {
	$no = 0;
}else{
	$no = $pg * $cik - $cik;
}
$sel = mysql_query("SELECT * FROM registration order by id desc LIMIT $no, $cik");
while ($row = mysql_fetch_array($sel)) {
	echo "$row[email]<br />";
}


$sel = mysql_query("SELECT * FROM registration");
$num = mysql_num_rows($sel);
$lpp = floor($num/$cik)+1;
$s = 1;
while($s <= $lpp){
	echo "<a href='registration.php?pg=$s'>$s</a>";
	$s++;
}
?>