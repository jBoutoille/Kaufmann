<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<div class="boxPremary">
	<div>
		<h1 id="titileForm">| Demander un rendez-vous</h1>
	</div>
	<div class="containerText">
		<form action="./?treatment" method="POST">
			<div class="inputData">
				<label>Nom :</label>
				<input type="text" class="form-control wow fadeInUp" name="visitorRdvNom">
			</div>
			<div class="inputData">
				<label>Prénom :</label>
				<input type="text" class="form-control wow fadeInUp" name="visitorRdvPrenom">
			</div>
			<div class="inputData">
				<label>Activité :</label>
				<input type="text" class="form-control wow fadeInUp" name="visitorRdvActivite">
			</div>
			<div class="inputData">
				<label>Téléphone :</label>
				<input type="number" class="form-control wow fadeInUp" name="visitorRdvTelephone">
			</div>
			<div class="inputData">
				<label>E-mail :</label>
				<input type="email" class="form-control wow fadeInUp" name="visitorRdvMail">
			</div>
			<div class="inputData">
				<label>Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp" name="visitorRdvMessge"></textarea>
			</div>
			<div class="add-prod wow fadeInUp">
				<button type="submit" name="formVisitorRdv">ENVOYER</button>
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

