<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<div class="boxPremary">
	<div>
		<h1 id="titleForm" class="foo-2"><i class="fas fa-users"></i>  Nous rejoindre</h1>
	</div>
	<div class="containerText">
		<p class="blockText foo-1">Envoyez-nous votre CV et Lettre de motivation en remplissant le formulaire ci-dessous</p>
		<form action="./?treatment" method="POST" enctype="multipart/form-data">
			<div class="inputData">
				<label class="foo-1">Nom<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidatureNom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Prénom<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidaturePrenom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Adresse e-mail<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidatureMail" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Téléphone<span class="asterix">*</span> :</label>
				<input type="number" class="form-control wow fadeInUp foo-1" name="visitorCandidatureTelephone" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Poste recherché<span class="asterix">*</span> :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidaturePoste" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Message<span class="asterix">*</span> :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-1" name="visitorCandidatureMessage" required></textarea>
			</div>
			<label class="foo-1" for="fileOne">CV (5Mo Max) (PDF uniquement)<span class="asterix">*</span></label>
			<div class="custom-file">
				<input class="customFileBtn foo-1" type="file" name="fileOne" id="fileOne" value="5000000" accept="application/pdf" required>
			</div>
			<label class="labelFile2 foo-1" for="fileTwo">Lettre de motivation (5Mo Max) (PDF uniquement)<span class="asterix">*</span></label>
			<div class="custom-file customFileFile">
				<input class="customFileBtn foo-1" type="file" name="fileTwo" id="fileTwo" value="5000000" accept="application/pdf" required>
			</div>
			<div class="custom-control custom-checkbox mb-3 foo-1">
				<input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
				<label class="acceptLois custom-control-label" for="customControlValidation1"> J'ai lu et j'accepte les <a href="./?page=mentions-legales">mentions légales</a> et la <a href="./?page=politique-de-confidentialite">politique de confidentalité</a>.</label>
			</div>
			<p><span class="asterix">*</span> champs obligatoire</p>
			<div class="add-prod wow fadeInUp foo-1">
				<button type="submit" name="formVisitorCandidature" class="foo-1">ENVOYER</button>
			</div>
		</form>
	</div>
</div>

<?php
    $htmlTitle = 'Nous rejoindre | ' . $RConfig['configNomSite'];
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

