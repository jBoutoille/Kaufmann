<?php ob_start(); ?>
<?php 
    require './views/visitor/inc/nav.php'; 
?>

<!-- TEXT MENTIONS LEGALES -->
<!-- TEXT MENTIONS LEGALES -->
			<div id="textePresentation">

				<h1 class="texteIntro">POLITIQUE DE CONFIDENTIALITE</h1>
				<p class="textePara">
				La présente politique de confidentialité est fondée sur le Règlement UE 2016/679 relatif à la protection des données (RGPD) ainsi que sur votre consentement éclairé. Elle a pour objectif de vous informer sur le traitement de vos données à caractère personnel.<br><br>
				Cette politique de confidentialité ne s'applique qu'aux renseignements recueillis par le présent site, bien que ce dernier puisse contenir des liens vers d'autres sites externes. Vous comprenez bien que nous ne pouvons vous garantir que ces sites appliquent la même politique que nous en matière de respect de la vie privée, c'est pourquoi nous vous engageons à prendre connaissance des politiques de confidentialité des sites web que vous seriez amené(e) à visiter à partir de celui-ci avant de remettre vos données personnelles.<br><br>
				Nous nous réservons la possibilité de modifier à tout moment cette politique de confidentialité, ces modifications entrant en vigueur immédiatement. Or, à chaque nouvelle utilisation du présent site, vous vous soumettez à la politique de confidentialité en vigueur.<br><br>
				Aussi, nous vous invitons à relire régulièrement cette page afin de maintenir votre consentement.
				</p>
				<br>
			</div>


<?php
	
    $htmlTitle = 'Confidentialité | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>

