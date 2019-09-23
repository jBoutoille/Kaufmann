<?php ob_start(); ?>

<?php 
    require './views/visitor/inc/nav.php'; 
?>

			<div class="boxPremary">
	              <div>
	                    <h1 id="titileForm">| Demandez un rendez-vous</h1>
	              </div>

	              <div class="containerText">
	                    <p class="blockText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat optio expedita minus accusantium facere placeat magnam maiores nulla magni dolore blanditiis eligendi, aliquam odio voluptates cum ut officia sit nemo.</p>

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
	                                <label>Activité :</label>
	                                <input type="text" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>Télèphone :</label>
	                                <input type="number" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>E-mail :</label>
	                                <input type="email" class="form-control wow fadeInUp">
	                          </div>

	                          <div class="inputData">
	                                <label>Message :</label>
	                                <textarea rows="3" class="form-control wow fadeInUp"></textarea>
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

