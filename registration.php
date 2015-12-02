<?php

if(!empty($_POST)){

	$vards = $db->real_escape_string($_POST['vards']);
	$uzvards = $db->real_escape_string($_POST['uzvards']);
	$email = $db->real_escape_string($_POST['email']);
	$parole = $db->real_escape_string($_POST['parole']);
	$parole2 = $_POST['parole2'];
	$dzd = $db->real_escape_string($_POST['dzd']);
	$dzimums = $db->real_escape_string($_POST['dzimums']);

	if (!($vards != '' and $uzvards != '' and $email != '' and $parole != '' and $dzd != '' and $dzimums != '0')) { /* Pārbaudam, vai paroles sakrīt */
		echo get_error('danger', 'Visi lauki netika aizpildīti.');
	} elseif (!user_is_unique($email)) { /* Pārbaudam vai lietotājs ir unikāls*/
		// Šāds lietotājs jau ir reģistrēts!
		echo get_error('danger', 'Šāds lietotājs jau ir reģistrēts');
	} elseif ($parole != $parole2) {
		// Visi lauki nav aizpildīti
		echo get_error('danger', 'Paroles Nesakrīt!');
	} else {
		// Viss kārtībā, reģistrējam lietotāju.

		$query = "INSERT INTO registration
			(vards, uzvards, email, dzd, dzimums, parole) VALUES
			('$vards','$uzvards','$email','$dzd','$dzimums','$parole')";
		$query = $db->query($query);

		if ($query) {
			echo get_error('success', 'Viss ok! :)');
		} else {
			echo get_error('danger', 'Sistēmas kļūda! Mēģini vēlāk.');
		}
		
	}

}

?>

<div class="container">
	<div class="row">
		<div class="col-md-3">

		</div>

		<div class="col-md-6">
			<form method="post" action="/lietotaji/?page=registration.php">
			  <div class="form-group">
			    <label>Vārds: </label>
			    <input type="text" class="form-control" id="vards" name="vards" placeholder="Vārds">
			  </div>
			  <div class="form-group">
			    <label>Uzvārds: </label>
			    <input type="text" class="form-control" id="uzvards" name="uzvards" placeholder="Uzvārds">
			  </div>
			  <div class="form-group">
			    <label>E-pasts</label>
			    <input type="text" class="form-control" id="email" name="email" placeholder="E-pasts">
			  </div>
			  <div class="form-group">
			    <label>Parole: </label>
			    <input type="password" class="form-control" id="parole" name="parole" placeholder="Parole">
			  </div>
			  <div class="form-group">
			    <label>Parole atkārtoti: </label>
			    <input type="password" class="form-control" id="parole2" name="parole2" placeholder="Parole">
			  </div>
			  <div class="form-group">
			    <label>Dzimšanas diena (YYYY-MM-DD)</label>
			    <input type="text" class="form-control" id="dzd" name="dzd" placeholder="1996-10-27">
			  </div>
			  <div class="form-group">
			    <label>Dzimums</label>
			    <select class="form-control" id="dzimums" name="dzimums">
			    	<option value="0">--- Izvēlies dzimumu ---</option>
			    	<option value="1">Vīrietis</option>
			    	<option value="2">Sieviete</option>
			    </select>
			  </div>


			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>

		<div class="col-md-3">

		</div>
	</div>
</div>