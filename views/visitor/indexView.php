<?php ob_start(); ?>

<!-- HEADER -->
<header id="top">
	<?php require './views/visitor/inc/nav.php'; ?>
	<section id="boxHeader">
		<img src="./public/img/photoHeader.JPG" id="imgHeader" alt="">	
		<div id="filterOne">
			<div id="titleHeader"> 
				<p class="sarl"><?= $RHeader['headerType'] ?></p>
				<p id="kaufmann"><?= $RHeader['headerTitre'] ?></p>
				<h1 id="textOne"><?= $RHeader['headerDesc'] ?></h1>
				<div href="#cabinet" id="animGif"></div>
			</div>
		</div>
	</section>
</header>

<!-- SECTION CABINET -->
<div id="cabinet">
	<section>
		<h2 class="titleNav"><?= $RCabinet['cabinetTitre'] ?></h2>
			<p id="texteSectionOne">
				<?= $RCabinet['cabinetTxt1'] ?>
				<br>
				<br>
				<?= $RCabinet['cabinetTxt2'] ?>
			</p>
	</section>
</div>

<!-- SECTION EXPERTISE -->
<section id="BoxOne">
	<img src="./public/img/photoBureau.JPG" id="imgBoxOne" alt="">
	<div id="filterTwo">
		<h2 id="titleOne"><?= $RExpertise['expertiseTitre'] ?></h2>
		<div id="barOne"></div>
		<p id="texteSectionTwo">
			<?= $RExpertise['expertiseTxt1'] ?>
			<br>
			<br>
			<?= $RExpertise['expertiseTxt2'] ?>
		</p>
		<div id="experiences">
			<div class="experienceOne">
				<p class="sizeNumber" id="numberOne"><?= $RExpertise['expertiseChiffre1'] ?></p>
				<h2><?= $RExpertise['expertiseTitre1'] ?></h2>
			</div>
			<div class="experienceTwo">
				<p class="sizeNumber" id="numberTwo"><?= $RExpertise['expertiseChiffre2'] ?></p>
				<h2><?= $RExpertise['expertiseTitre2'] ?></h2>
			</div>
		</div>
	</div>
</section>

<!-- SERVICES SECTION -->
<div id="services">
	<section id="globalBoxService">	
		<h2 class="titleNav"><?= $RServices['servicesTitre'] ?></h2>	
		<div id="serviceBox">
			<h2 class="serviceSection"><?= $RServices['services1Titre'] ?></h2>	
			<p><?= $RServices['services1Desc'] ?></p>		
			<ul>
				<li class="liPuce"><?= $RServices['services1SS1'] ?></li>
				<li class="liPuce"><?= $RServices['services1SS2'] ?></li>
				<li class="liPuce"><?= $RServices['services1SS3'] ?></li>
				<li class="liPuce"><?= $RServices['services1SS4'] ?></li>
				<li class="liPuce"><?= $RServices['services1SS5'] ?></li>
			</ul>
			<h2 class="serviceSection"><?= $RServices['services2Titre'] ?></h2>
			<p><?= $RServices['services2Desc'] ?></p>
			<ul>
				<li class="liPuce"><?= $RServices['services2SS1'] ?></li>
				<li class="liPuce"><?= $RServices['services2SS2'] ?></li>
				<li class="liPuce"><?= $RServices['services2SS3'] ?></li>
				<li class="liPuce"><?= $RServices['services2SS4'] ?></li>
			</ul>
			<h2 class="serviceSection"><?= $RServices['services3Titre'] ?></h2>
			<p><?= $RServices['services3Desc'] ?></p>
			<ul>
				<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTree">+</button><?= $RServices['services3SS1'] ?></li>				
				<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFour">+</button><?= $RServices['services3SS2'] ?></li>				
				<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFive">+</button><?= $RServices['services3SS3'] ?></li>			
				<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalOne">+</button><?= $RServices['services3SS4'] ?></li>
				<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTwo">+</button><?= $RServices['services3SS5'] ?></li>
			</ul>
		</div>
	</section>
</div>

<!-- CONTACT SECTION -->
<div id="contact">
	<section id="boxTwo">
		<img src="./public/img/photoContact.JPG" id="imgContact" alt="">
		<div class="filterOne">
			<h2 class="titleNav" id="contact"><?= $RContact['contactTitre'] ?></h2>
			<div id="boxContner">
				<ul id="boxAdresse">
					<h3 id="coordonnees"><?= $RContact['contactCoordonnees'] ?></h3>
					<li id="adresse"><i class="fas fa-building mr-2"></i><?= $RConfig['configAdresse'] ?><br><?= $RConfig['configCP'] ?>, <?= $RConfig['configVille'] ?></li>
					<li id="adMail"><i class="fas fa-envelope mr-2"></i><?= $RConfig['configMail'] ?></li>
					<li id="telMobile"><i class="fas fa-phone mr-2"></i><?= $RConfig['configTelephone'] ?></li>
					<li id="numFax"><i class="fas fa-print mr-2"></i><?= $RConfig['configFax'] ?></li>
				</ul>
				<div id="twoBox">
					<div id="boxContactOne">
						<p class="textBtn"><?= $RContact['contactDescBtn1'] ?></p>
						<a href="./?page=rendez-vous">
							<button class="myBtn"><?= $RContact['contactBtn1'] ?></button>
						</a>
					</div>
					<div id="boxContactTwo">
						<p class="textBtn"><?= $RContact['contactDescBtn2'] ?></p>
						<a href="./?page=rejoignez-nous"><button class="myBtn">
							<?= $RContact['contactBtn2'] ?></button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- SECTION NEWSLETTER -->	
<section class="newsletter" id="newsletter">
	<div class="container">
		<div class="news-data">
			<div class="section-subheading">
				<h1 class="wow fadeInUp"><?= $RNewsletter['newsletterTitre'] ?></h1>
			</div>
			<div class="input-group wow fadeInUp">
				<input type="email" class="form-control" placeholder="<?= $RNewsletter['newsletterTxtForm'] ?>">
				<span class="input-group-btn">
					<button class="btn" type="submit"><?= $RNewsletter['newsletterTxtBtn'] ?></button>
				</span>
			</div>
		</div>
	</div>
</section>

<!-- API GOOGLE MAP -->	
<div style="height:40vh">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.4996106340805!2d1.6007255077783342!3d50.72309948130056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c42e0ba61b7%3A0x7b8d42d029cd746d!2s5%20Place%20d&#39;Angleterre%2C%2062200%20Boulogne-sur-Mer!5e0!3m2!1sfr!2sfr!4v1568721375304!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>