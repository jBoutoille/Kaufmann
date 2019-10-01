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
		<form action="./?treatment" method="POST" enctype="multipart/form-data">
			<div class="inputData">
				<label class="foo-3">Nom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidatureNom" required>
			</div>
			<div class="inputData">
				<label class="foo-3">Prénom :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidaturePrenom" required>
			</div>
			<div class="inputData">
				<label class="foo-3">Adresse e-mail :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidatureMail" required>
			</div>
			<div class="inputData">
				<label class="foo-3">Téléphone :</label>
				<input type="number" class="form-control wow fadeInUp foo-3" name="visitorCandidatureTelephone" required>
			</div>
			<div class="inputData">
				<label class="foo-3">Poste recherché :</label>
				<input type="text" class="form-control wow fadeInUp foo-3" name="visitorCandidaturePoste" required>
			</div>
			<div class="inputData">
				<label class="foo-3">Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-3" name="visitorCandidatureMessage" required></textarea>
			</div>
			<label class="foo-3" for="fileOne">CV (10Mo max)</label>
			<div class="custom-file">
				<input class="foo-3" type="file" name="fileOne" id="fileOne" value="10000000" required>
			</div>
			<label class="foo-3" for="fileTwo">Lettre de motivation (10Mo max)</label>
			<div class="custom-file">
				<input class="foo-3" type="file" name="fileTwo" id="fileTwo" value="10000000" required>
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

