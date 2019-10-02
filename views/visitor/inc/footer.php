<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" id="footerColor">
	<div class="container text-center text-md-left">
		<div class="row text-center text-md-left mt-3 pb-3">
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<a href="<?php if(!empty($_GET)){ echo './';} ?>#accueil">
					<img data-scroll src="./public/img/logo/logo4white.png" id="imgFooter" class="foo-2" alt="Logo du cabinet G.KAUFMANN">
				</a>
				<div class="row">
					<div class="col-md-12">
						<a href="https://www.cncc.fr/" target="_blank"><img src="./public/img/logo/cncc2.png" id="imgLogoOne" class="foo-2" alt="Logo CNCC"></a>
						<a href="https://www.experts-comptables.fr/" target="_blank"><img src="./public/img/logo/ordre.png" id="imgLogoTwo" class="foo-2" alt="Logo Ordre des experts comptables"></a>     
					</div>             
				</div>
			</div>
			  <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mt-4 foo-2" id="horaires">
		        <h6 class="text-uppercase mb-4 font-weight-bold">Horaires</h6>
		        <div class="dateTime">Lundi : <div class="time">08:30-12:00, 14:00-18:00</div></div>
		        <div class="dateTime">Mardi : <div class="time">08:30-12:00, 14:00-18:00</div></div>
		        <div class="dateTime">Mercredi : <div class="time">08:30-12:00, 14:00-18:00</div></div>
		        <div class="dateTime">Jeudi : <div class="time">08:30-12:00, 14:00-18:00</div></div>
		        <div class="dateTime">Vendredi : <div class="time">08:30-12:00, 14:00-18:00</div></div>
		        <div class="dateTime">Samedi : <div class="time">Fermé</div></div>
		        <div class="dateTime">Dimanche : <div class="time">Fermé</div></div>
		      </div>
			<hr class="w-50 clearfix d-md-none foo-2" id="footerBar">
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 foo-2" id="footerContact">
				<h6 class="text-uppercase mb-4 font-weight-bold foo-2"><?= $RFooter['footerTitreCoordonnees'] ?></h6>
				<p class="footerText foo-2">
				<i class="fas fa-building mr-2"></i><?= $RConfig['configAdresse'] ?><br><?= $RConfig['configCP'] ?>, <?= $RConfig['configVille'] ?></p>
				<p class="footerText foo-2">
				<i class="fas fa-envelope mr-2 footerIco"></i><?= $RConfig['configMail'] ?></p>
				<p class="footerText foo-2">
				<i class="fas fa-phone mr-2 footerIco"></i><?= $RConfig['configTelephone'] ?></p>
				<p class="footerText foo-2">
				<i class="fas fa-print mr-2 footerIco"></i><?= $RConfig['configFax'] ?></p>
				<ul>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1 foo-2" href="<?= $RFooter['footerLinkedin'] ?>" target="_blank">
							<i class="fab fa-linkedin" id="linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="row d-flex align-items-center">
			<div class="col-md-12" id="footerStyleOne">
				<p class="text-center text-md-left footerTextStyle"><?= $RFooter['footerCopyrights'] ?> |  
				Développeur
				<a href="#">JBoutoille</a> . 
				<a href="#">JFasquelle</a> | 
				<a href="./?page=mentions-legales">Mentions légales</a> |
				<a href="./?page=politique-de-confidentialite">Politique de confidentialité</a> |
				<a href="./public/pdf/rapport-de-transparence.pdf" target="_blank">Rapport de transparence</a> |
				<a href="./?page=gk-admin">Admin</a>
				</p>
			</div>
			<div class="col-md-5 col-lg-4 ml-lg-0"></div>
		</div>
	</div>
</footer>