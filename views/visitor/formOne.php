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
				<label class="foo-1">Nom<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvNom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Prénom<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvPrenom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Activité<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorRdvActivite" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Téléphone<span class="asterix">*</span> :</label>
				<input type="number" class="form-control wow fadeInUp foo-1" name="visitorRdvTelephone" required>
			</div>
			<div class="inputData">
				<label class="foo-1">E-mail<span class="asterix">*</span> :</label>
				<input type="email" class="form-control wow fadeInUp foo-1" name="visitorRdvMail" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Message<span class="asterix">*</span> :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-1" name="visitorRdvMessage" required></textarea>
			</div>
			<div class="custom-control custom-checkbox mb-3 foo-1">
				<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
				<label class="acceptLois custom-control-label" for="customControlValidation1"> J'ai lu et j'accepte les <a href="./?page=mentions-legales">mentions légales</a> et la <a href="./?page=politique-de-confidentialite">politique de confidentalité</a>.</label>
			</div>
			<p><span class="asterix">*</span> champs obligatoire</p>
			<div class="add-prod wow fadeInUp foo-1">
				<button type="submit" name="formVisitorRdv" class="foo-1">ENVOYER</button>
			</div>
		</form>
	</div>
</div>

<?php
    $htmlTitle = 'Demander un rendez-vous | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>