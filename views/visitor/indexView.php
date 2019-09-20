<?php ob_start(); ?>


    <!-- HTML DE LA PAGE INDEX -->
<header>

		<?php 
        	require './views/visitor/inc/nav.php'; 
    	?>

	
	<!-- HEADER -->
	<div id="imgHeader">	
	 <div class="filterOne">
      <div id="titleHeader"> 
    	<p class="sarl">S.A.R.L</p>
    	<p id="kaufmann">G.KAUFMANN</p>
    	<h1 id="textOne">Expertise comptable, Audit<br>Conseil & Accompagement</h1>
    	<div href="#cabinet" id="animGif"></div>
      </div>
     </div>
    </div>
</header>
<img src="./public/img/photoIndex.jpg" id="ione" alt="">
    <!-- CABINET SECTION -->
    <a name="cabinet"></a>
	<section>
		<h2 class="titleNav">| Le cabinet</h2>
			<p id="texteSectionOne">
				On sait depuis longtemps que travailler avec du texte lisible et contenant du sens 
				est source de distractions, et empêche de se concentrer sur la mise en page elle-même. 
				L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'
				<br>
				<br>
				On sait depuis longtemps que travailler avec du texte lisible et contenant du sens 
				est source de distractions, et empêche de se concentrer sur la mise en page elle-même. 
				L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'
			</p>
	</section>
	<section id="bluBoxOne">
		<div class="filter">
			<h2 id="titleOne">Notre expertise en quelques chiffres :</h2>
			<div id="barOne"></div>
			<p id="texteSectionTwo">
				Pourquoi faire du cabinet G.KAUFMANN votre partenaire ? Présent à Boulogne/Mer, nos compétences multiples ainsi que notre expertise feront de nous un allié de poids.
				<br>
				<br>
				Confiez-nous vos retards de comptabilité, la gestion de vos projets, ou toute autres besoins.
			</p>
			<div id="experiences">
				<div class="experienceOne">
					<p class="sizeNumber">350</p>
					<h2>Clients</h2>
				</div>
				<div class="experienceTwo">
					<p class="sizeNumber">40</p>
					<h2>Années d'expertises</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- SERVICES SECTION -->
	<a name="services"></a>
	<section id="globalBoxService">	
		<h2 class="titleNav">| Nos services</h2>	
		<div id="serviceBox">
			<h2 class="serviceSection">AUDIT</h2>
			
				<p>Nous intervenons au titre de vos besoins en matière de :</p>
					
					<ul>
						<li class="liPuce"> Commissairiat aux comptes.</li>
						<li class="liPuce"> Audit Contractuel.</li>
						<li class="liPuce"> Commissariat à la transformation.</li>
						<li class="liPuce"> Commissariat à la fusion.</li>
						<li class="liPuce"> Audit d'acquisition.</li>
					</ul>
			
			<h2 class="serviceSection">EXPERTISE COMPTABLE</h2>

				<p>Nous vous proposons un accompagnement sur mesure en comptabilité, 
				fiscalité, social et juridique :</p>
			
						<ul>
							<li class="liPuce">Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie...)</li>
							<li class="liPuce">Associations (tenue, accompagnement, révision...)</li>
							<li class="liPuce">Particuliers (impôts sur le revenu, IFI, conseil patrimonial...)</li>
							<li class="liPuce">Entreprises (tenue complète, comptabilité partagée, révision, secrétariat, paie...)</li>
						</ul>

			<h2 class="serviceSection">CONSEIL ET ACCOMPAGNEMENT</h2>

				<p>texte à définir :</p>
			
					<ul>
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTree">+
						</button> Création et reprise de sociétés 
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFour">+</button> Mise en place de tableaux de bords
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFive">+</button> Prévisionnels 
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalOne">+
						</button> Évaluation de sociétés
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTwo">+
						</button> Mise à disposition de logiciels sans engagement à tarifs avantageux 
						</li>
					</ul>
		</div>
	</section>
	<!-- CONTACT SECTION -->
	<a name="contact"></a>
	<section id="bluBoxTwo">
		<div class="filter">

		<h2 class="titleNav" id="contact">| Contact</h2>

			<div id="boxContner">
				<ul id="boxAdresse">
					<h3 id="coordonnees">Coordonnées :</h3>

						<li id="adresse"><i class="fas fa-building mr-2"></i>5 Place d'Angleterre <br>62200, Boulogne-sur-mer</li>
						<li id="telMobile"><i class="fas fa-phone mr-2"></i>03 21 30 19 19</li>
						<li id="adMail"><i class="fas fa-envelope mr-2"></i>contact@kaufmann.fr</li>
						<li id="numFax"><i class="fas fa-print mr-2"></i>03 91 18 65 65</li>

				</ul>
				<div id="twoBox">
					<div id="boxContactOne">
						<p class="textBtn"> Optenir un rendez-vous de comptable et d'experts-comptables</p>
						<a href="index.php?rdv"><button class="myBtn">DEMANDEZ UN R.D.V</button></a>
					</div>
					<div id="boxContactTwo">
						<p class="textBtn"> Rejoindre notre équipe</p>
						<a href="index.php?cv"><button class="myBtn">ENVOYER UN CV</button></a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- NEWSLETTER SECTION -->	
    <section class="newsletter">
      <div class="container">
        <div class="news-data">
        <div class="section-subheading">
              <h1 class="wow fadeInUp">Abonnez vous à notre Newsletter</h1>
        </div>
        <div class="input-group wow fadeInUp">
              <input type="email" class="form-control" placeholder="Entrez votre e-mail">
              <span class="input-group-btn">
                    <button class="btn" type="submit">S'abonner</button>
              </span>
        </div>
        </div>
      </div>
    </section>
    <!-- API GOOGLE MAP -->	
    <div style="height:40vh"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.4996106340805!2d1.6007255077783342!3d50.72309948130056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c42e0ba61b7%3A0x7b8d42d029cd746d!2s5%20Place%20d&#39;Angleterre%2C%2062200%20Boulogne-sur-Mer!5e0!3m2!1sfr!2sfr!4v1568721375304!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>



<?php
	require './views/visitor/inc/modals.php';
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>