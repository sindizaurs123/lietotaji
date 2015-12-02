<?php

if($_POST){

	$email = $db->real_escape_string($_POST['email']);
	$parole = $db->real_escape_string($_POST['parole']);

	$query = "SELECT * FROM registration WHERE email = '$email' AND parole = '$parole'";
	$query = $db->query($query);

	if ($query->num_rows !== 0) {
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['parole'] = $_POST['parole'];
		// echo "User = ".$_SESSION['email'];
	}else{
		 echo get_error('danger', 'Nepareizi dati.');
	}
}
?>

<?php
if(isset($_SESSION['email'])){
	echo "Email ir ".$_SESSION['email']." <br /><a href='/lietotaji/?page=logout.php'>Iziet</a>";
}else{
?>
<div class="container">
	<div class="row">
		<div class="col-md-4">

		</div>

		<div class="col-md-4">
			<form method="post" action="/lietotaji/?page=login.php">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="parole" name="parole" placeholder="Password">
			  </div>

			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>

		<div class="col-md-4">

		</div>
	</div>
</div>

<?php
}
?>