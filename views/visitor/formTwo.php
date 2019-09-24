<?php ob_start(); ?>

<?php 
    require './views/visitor/inc/nav.php'; 
?>

			<div class="boxPremary">
	              <div>
	                    <h1 id="titileForm">| Nous rejoindre</h1>
	              </div>

	              <div class="containerText">
	                    <p class="blockText">Envoyez-nous votre CV et Lettre de motivation en remplissant le formulaire ci-dessous :</p>

	                    <form>
	                          <div class="inputData">
	                                <label>Nom :</label>
	                                <input type="text" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>Prénom :</label>
	                                <input type="text" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>Poste recherché :</label>
	                                <input type="text" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>Message :</label>
	                                <textarea rows="3" class="form-control wow fadeInUp"></textarea>
	                          </div>

	                          	<label>Cv</label>
	                          <div class="custom-file">
							    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
							    <label class="custom-file-label" for="validatedCustomFile">Choisir un fichié</label>
							    <div class="invalid-feedback">Fichier non valide</div>
							  </div>

							  <label>Lettre de motivation</label>
	                          <div class="custom-file">
							    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
							    <label class="custom-file-label" for="validatedCustomFile">Choisir un fichié</label>
							    <div class="invalid-feedback">Fichier non valide</div>
							  </div>

	                   
	                          <div class="add-prod wow fadeInUp">
	                                <a href="#">Envoyer</a>
	                          </div>
	                    </form>

	              </div>
	        </div>


<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Rendez-vous | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

