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
				<label class="foo-1">Nom :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidatureNom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Prénom :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidaturePrenom" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Adresse e-mail :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidatureMail" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Téléphone :</label>
				<input type="number" class="form-control wow fadeInUp foo-1" name="visitorCandidatureTelephone" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Poste recherché :</label>
				<input type="text" class="form-control wow fadeInUp foo-1" name="visitorCandidaturePoste" required>
			</div>
			<div class="inputData">
				<label class="foo-1">Message :</label>
				<textarea rows="3" class="form-control wow fadeInUp foo-1" name="visitorCandidatureMessage" required></textarea>
			</div>
			<label class="foo-1" for="fileOne">CV (10Mo max)</label>
			<div class="custom-file">
				<input class="foo-1" type="file" name="fileOne" id="fileOne" value="10000000" required>
			</div>
			<label class="foo-1" for="fileTwo">Lettre de motivation (10Mo max)</label>
			<div class="custom-file">
				<input class="foo-1" type="file" name="fileTwo" id="fileTwo" value="10000000" required>
			</div>
			<div class="add-prod wow fadeInUp foo-1">
				<button type="submit" name="formVisitorCandidature" class="foo-1">ENVOYER</button>
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

