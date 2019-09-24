<?php ob_start(); ?>

    <!-- HTML DE LA PAGE INDEX -->
<header>

		<?php 
        	require './views/visitor/inc/nav.php'; 
    	?>

	<!-- HEADER -->
	<section id="boxHeader">
	<img src="./public/img/photoHeader.JPG" id="imgHeader" alt="">	
	 <div id="filterOne">
      <div id="titleHeader"> 
    	<p class="sarl">S.A.R.L</p>
    	<p id="kaufmann">G.KAUFMANN</p>
    	<h1 id="textOne">Expertise comptable, Audit<br>Conseil & Accompagement</h1>
    	<div href="#cabinet" id="animGif"></div>
      </div>
     </div>
    </section>
</header>

    <!-- CABINET SECTION -->
    <a name="cabinet"></a>
	<section>
		<h2 class="titleNav">| Le cabinet</h2>
			<p id="texteSectionOne">
				Indépendant et à taille humaine, notre cabinet, à vocation régionale, est implanté sur la côte d'opale.

				Au service d'une clientèle variée, nous accompagnons depuis longtemps les acteurs économiques majeurs du territoire.

				Nous vous assistons dans toutes les étapes de la vie de votre entreprise et mettons à votre disposition l'ensemble de nos compétences en matière de comptabilité, d'audit, de fiscalité, de droit social.
				<br>
				<br>
				En matière associative, nous sommes en mesure de répondre à vos principaux besoins notamment en  expertise comptable ou en commissariat aux comptes.

				Notre expertise en matière de fiscalité personnelle fait également partie de nos compétences reconnues.
			</p>
	</section>
	<section id="BoxOne">
		<img src="./public/img/photoBureau.JPG" id="imgBoxOne" alt="">
		<div id="filterTwo">
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
						<li class="liPuce"> Commissairiat aux comptes,</li>
						<li class="liPuce"> Audit Contractuel,</li>
						<li class="liPuce"> Commissariat à la transformation,</li>
						<li class="liPuce"> Commissariat à la fusion,</li>
						<li class="liPuce"> Audit d'acquisition,</li>
					</ul>
			
			<h2 class="serviceSection">EXPERTISE COMPTABLE </h2>

				<p>Nous vous proposons un accompagnement sur mesure en comptabilité, 
				fiscalité, social et juridique :</p>
			
						<ul>
							<li class="liPuce">Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie)</li>
							<li class="liPuce">Associations (tenue, accompagnement, révision)</li>
							<li class="liPuce">Particuliers (impôts sur le revenu, IFI, conseil patrimonial)</li>
							<li class="liPuce">Entreprises (tenue complète, comptabilité partagée, révision, secrétariat juridique, paie, déclarations fiscales, consolidation)</li>
						</ul>

			<h2 class="serviceSection">CONSEIL/ACCOMPAGNEMENT</h2>

				<p>Partenaire privilégié du dirigeant, nous vous assistons sur de nombreux thèmes :</p>
			
					<ul>
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTree">+
						</button> Création/reprise de sociétés,
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFour">+</button> Mise en place de tableaux de bords,
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalFive">+</button> Prévisionnels,
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalOne">+
						</button> Évaluation de sociétés,
						</li>
						
						<li><button class="btnSeeMore" data-toggle="modal" data-target="#ExampleModalTwo">+
						</button> Mise à disposition de logiciels spécifiques à nos différents métiers : (logiciels de comptabilité, de facturation, de notes de frais, de caisse...) 
						</li>
					</ul>
		</div>
	</section>
	<!-- CONTACT SECTION -->
	<a name="contact"></a>
	<section id="boxTwo">
		<img src="./public/img/photoContact.JPG" id="imgContact" alt="">
		<div class="filterOne">

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
						<a href="index.php?page=rdv"><button class="myBtn">DEMANDEZ UN R.D.V</button></a>
					</div>
					<div id="boxContactTwo">
						<p class="textBtn"> Rejoindre notre équipe</p>
						<a href="index.php?page=cv"><button class="myBtn">ENVOYER UN CV</button></a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- NEWSLETTER SECTION -->	
	 <a name="newsletter"></a>
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