<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<div class="boxPremary">
	<div>
		<h1 id="titileForm" class="foo-2"><i class="fas fa-users"></i>  Nous rejoindre</h1>
	</div>
	<div class="containerText">
		<p class="blockText foo-2">Envoyez-nous votre CV et Lettre de motivation en remplissant le formulaire ci-dessous</p>
		<form action="./?treatment" method="POST">
			<div class="inputData">
				<label class="foo-3">Nom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidatureNom">
			</div>
			<div class="inputData">
				<label class="foo-3">Prénom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidaturePrenom">
			</div>
			<div class="inputData">
				<label class="foo-3">Poste recherché :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidaturePoste">
			</div>
			<div class="inputData">
				<label class="foo-3">Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-3" name="visitorCandidatureMessage"></textarea>
			</div>
			<label class="foo-3">Cv</label>
			<div class="custom-file">
				<input type="file" class="custom-file-input foo3" id="validatedCustomFile" name="visitorCandidatureFile1" required>
				<label class="custom-file-label foo-3" for="validatedCustomFile">Choisir un fichier</label>
				<div class="invalid-feedback foo-3">Fichier non valide</div>
			</div>
			<label class="foo-3">Lettre de motivation</label>
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="validatedCustomFile" name="visitorCandidatureFile2" required>
				<label class="custom-file-label foo-3" for="validatedCustomFile">Choisir un fichier</label>
				<div class="invalid-feedback foo-3">Fichier non valide</div>
			</div>
			<div class="add-prod wow fadeInUp foo-3">
				<button type="submit" name="formVisitorCandidature" class="foo-3">ENVOYER</button>
			</div>
		</form>
	</div>
</div>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Nous rejoindre | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

