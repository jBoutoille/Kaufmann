<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<div class="boxPremary">
	<div>
		<h1 id="titileForm" class="foo-2"><i class="far fa-handshake"></i> Prendre rendez-vous</h1>
	</div>
	<div class="containerText">
		<form action="./?treatment" method="POST">
			<div class="inputData">
				<label class="foo-3">Nom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorRdvNom">
			</div>
			<div class="inputData">
				<label class="foo-3">Prénom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorRdvPrenom">
			</div>
			<div class="inputData">
				<label class="foo-3">Activité :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorRdvActivite">
			</div>
			<div class="inputData">
				<label class="foo-3">Téléphone :</label>
				<input type="number" class="form-control wow fadeInUp foo-3" name="visitorRdvTelephone">
			</div>
			<div class="inputData">
				<label class="foo-3">E-mail :</label>
				<input type="email" class="form-control wow fadeInUp foo-3" name="visitorRdvMail">
			</div>
			<div class="inputData">
				<label class="foo-3">Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-3" name="visitorRdvMessge"></textarea>
			</div>
			<div class="add-prod wow fadeInUp foo-3">
				<button type="submit" name="formVisitorRdv" class="foo-3">ENVOYER</button>
			</div>
		</form>
	</div>
</div>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Demander un rendez-vous | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

