<?php ob_start(); ?>

<!-- SECTION HEADER -->
<header id="accueil">
	<?php require './views/visitor/inc/nav.php'; ?>
	<section id="boxHeader">
		<img src="./public/img/photoHeader.JPG" id="imgHeader" alt="photo du cabinet">	
		<div id="filterOne">
			<div id="titleHeader" class="foo-4"> 
				<p class="sarl foo-4"><?= $RHeader['headerType'] ?></p>
				<p id="kaufmann" class="foo-4"><?= $RHeader['headerTitre'] ?></p>
				<h1 id="textOne" class="foo-5"><?= $RHeader['headerDesc'] ?></h1>
				<div class="foo-6"><a id="animGif" data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#cabinet"></a></div>
			</div>
		</div>
	</section>
</header>

<!-- SECTION CABINET -->
<div id="cabinet">
	<section>
		<h2 class="titleNav foo-2"><?= $RCabinet['cabinetTitre'] ?></h2>
			<p id="texteSectionOne">
				<span class="foo-2"><?= $RCabinet['cabinetTxt1'] ?></span>
				<br>
				<br>
				<span class="foo-2"><?= $RCabinet['cabinetTxt2'] ?></span>
			</p>
	</section>
</div>

<!-- SECTION EXPERTISE -->
<div id="expertise">
	<section id="BoxOne">
		<img src="./public/img/photoBureau.JPG" id="imgBoxOne" alt="photo d'une réunion">
		<div id="filterTwo">
				<h2 id="titleOne" class="foo-2"><?= $RExpertise['expertiseTitre'] ?></h2>
				<div id="barOne"></div>
				<p id="texteSectionTwo" class="foo-2">
					<?= $RExpertise['expertiseTxt1'] ?>
					<br>
					<br>
					<?= $RExpertise['expertiseTxt2'] ?>
				</p>
				<div id="experiences">
					<div class="experienceOne foo-2">
						<p class="sizeNumber foo-2" id="numberOne"><?= $RExpertise['expertiseChiffre1'] ?></p>
						<h2 class="expertiseNumber"><?= $RExpertise['expertiseTitre1'] ?></h2>
					</div>
					<div class="experienceTwo foo-2">
						<p class="sizeNumber foo-2" id="numberTwo"><?= $RExpertise['expertiseChiffre2'] ?></p>
						<h2 class="expertiseNumber"><?= $RExpertise['expertiseTitre2'] ?></h2>
					</div>
				</div>
		</div>
	</section>
</div>

<!-- SECTION SERVICES -->
<div id="services">
	<section id="globalBoxService">	
		<h2 class="titleNav foo-2"><?= $RServices['servicesTitre'] ?></h2>	
		  <div id="globalBox">
				<div class="serviceBox">
					<h2 class="serviceSection foo-2"><i class="fas fa-chart-pie"></i><br> <?= $RServices['services1Titre'] ?></h2>	
					<p class="titleServices foo-2"><?= $RServices['services1Desc'] ?></p>		
					<ul class="listeServices">
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services1SS1'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services1SS2'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services1SS3'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services1SS4'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services1SS5'] ?></li>
					</ul>
				</div>
				<div class="serviceBox">
					<h2 class="serviceSection foo-2"><i class="fas fa-poll"></i> <?= $RServices['services2Titre'] ?></h2>
					<p class="titleServices foo-2"><?= $RServices['services2Desc'] ?></p>
					<ul class="listeServices">
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services2SS1'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services2SS2'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services2SS3'] ?></li>
						<li class="foo-2"><i class="fas fa-tag fa-lg customIco"></i> <?= $RServices['services2SS4'] ?></li>
					</ul>
				</div>
				<div class="serviceBox">
					<h2 class="serviceSection foo-2"><i class="fas fa-address-card"></i> <?= $RServices['services3Titre'] ?></h2>
					<p class="titleServices foo-2"><?= $RServices['services3Desc'] ?></p>
					<ul class="listeServices">
						<li class="foo-2"><button class="far fa-play-circle fa-lg btnSeeMore customIco" data-toggle="modal" data-target="#ExampleModalTree"></button><?= $RServices['services3SS1'] ?></li>				
						<li class="foo-2"><button class="far fa-play-circle fa-lg btnSeeMore customIco" data-toggle="modal" data-target="#ExampleModalFour"></button><?= $RServices['services3SS2'] ?></li>				
						<li class="foo-2"><button class="far fa-play-circle fa-lg btnSeeMore customIco" data-toggle="modal" data-target="#ExampleModalFive"></button><?= $RServices['services3SS3'] ?></li>			
						<li class="foo-2"><button class="far fa-play-circle fa-lg btnSeeMore customIco" data-toggle="modal" data-target="#ExampleModalOne"></button><?= $RServices['services3SS4'] ?></li>
						<li class="foo-2"><button class="far fa-play-circle fa-lg btnSeeMore customIco" data-toggle="modal" data-target="#ExampleModalTwo"></button><?= $RServices['services3SS5'] ?></li>
					</ul>
				</div>
		  </div>
	</section>
</div>

<!-- SECTION CONTACT -->
<div id="contact">
	<section id="boxTwo">
		<img src="./public/img/photoContact.JPG" id="imgContact" alt="photo du personnel">
		<div class="filterOne">
			<h2 class="titleNav foo-2" id="contactTwo"><?= $RContact['contactTitre'] ?></h2>
			<div id="boxContner">
				<ul id="boxAdresse" class="foo-2">
					<li><h3 id="coordonnees"><?= $RContact['contactCoordonnees'] ?></h3></li>
					<li id="adresse"><i class="fas fa-building mr-2 customIco"></i><?= $RConfig['configAdresse'] ?><br><?= $RConfig['configCP'] ?>, <?= $RConfig['configVille'] ?></li>
					<li id="adMail"><i class="fas fa-envelope mr-2 customIco"></i><?= $RConfig['configMail'] ?></li>
					<li id="telMobile"><i class="fas fa-phone mr-2 customIco"></i><?= $RConfig['configTelephone'] ?></li>
					<li id="numFax"><i class="fas fa-print mr-2 customIco"></i><?= $RConfig['configFax'] ?></li>
				</ul>
				<div id="twoBox">
					<div id="boxContactOne" class="foo-2">
						<p class="textBtn"><?= $RContact['contactDescBtn1'] ?></p>
						<a href="./?page=rendez-vous" class="myBtn"><?= $RContact['contactBtn1'] ?></a>
					</div>
					<div id="boxContactTwo" class="foo-2">
						<p class="textBtn"><?= $RContact['contactDescBtn2'] ?></p>
						<a href="./?page=rejoignez-nous" class="myBtn"><?= $RContact['contactBtn2'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- SECTION NEWSLETTER -->	
<section class="newsletter">
	<div class="container">
		<div class="news-data">
			<div class="section-subheading">
				<h2 class="wow fadeInUp foo-2"><?= $RNewsletter['newsletterTitre'] ?></h2>
			</div>
			<form action="./?treatment" method="POST">
				<div class="input-group wow fadeInUp">
					<input type="email" class="form-control foo-2" name="visitorNewsletterMail" placeholder="<?= $RNewsletter['newsletterTxtForm'] ?>" required>
					<span class="input-group-btn">
						<button class="btn foo-2" type="submit" name="formVisitorNewsletter"><?= $RNewsletter['newsletterTxtBtn'] ?></button>
					</span>
				</div>
			</form>
		</div>
	</div>
</section>

<!-- API GOOGLE MAP -->	
<div class="foo-2" id="apiGoogle">
	<iframe 
	src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.4996106340805!2d1.6007255077783342!3d50.72309948130056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c42e0ba61b7%3A0x7b8d42d029cd746d!2s5%20Place%20d&#39;	Angleterre%2C%2062200%20Boulogne-sur-Mer!5e0!3m2!1sfr!2sfr!4v1568721375304!5m2!1sfr!2sfr"
	allowfullscreen="">
	</iframe>
</div>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>