<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<div class="boxPremary">
	<div>
		<h1 id="titleForm" class="foo-2"><i class="far fa-handshake"></i> Prendre rendez-vous</h1>
	</div>
	<div class="containerText">
		<form action="./?treatment" method="POST">
			<div class="inputData">
				<label class="foo-1">Nom :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvNom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Prénom :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvPrenom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Activité :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvActivite" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Téléphone :</label>
				<input type="number" class="form-control wow fadeInUp foo-1" name="visitorRdvTelephone" required>
			</div>
			<div class="inputData">
				<label class="foo-1">E-mail :</label>
				<input type="email" class="form-control wow fadeInUp foo-1" name="visitorRdvMail" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-1" name="visitorRdvMessage" required></textarea>
			</div>
			<div class="add-prod wow fadeInUp foo-1">
				<button type="submit" name="formVisitorRdv" class="foo-1">ENVOYER</button>
			</div>
		</form>
	</div>
</div>

<?php

    $htmlTitle = 'Demander un rendez-vous | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

