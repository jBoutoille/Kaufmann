<?php ob_start(); ?>


    <!-- HTML DE LA PAGE INDEX -->
<header>
	<div id="imgHeader">
	 <div class="filterOne">
      <div id="titleHeader"> 
    	<p class="sarl">S.A.R.L</p>
    	<p id="kaufmann">G.KAUFMANN</p>
    	<h1 id="textOne">Expertise comptable, Audit<br>Conseil & Accompagement</h1>
    	<div id="animGif"></div>
      </div>
     </div>
    </div>
</header>

    <!-- CABINET SECTION -->
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
		<h2 id="titleOne">Notre expertise en quelques chiffres :</h2>
		<div id="barOne"></div>
		<p id="texteSectionTwo">
			Pourquoi faire du cabinet G.KAUFMANN votre partenaire ? Présent à Boulogne/Mer, nos compétences multiples ainsi que notre expertise feront de nous un allié de poids.
			<br>
			<br>
			Confiez-nous vos retards comptabilité, la gestion de vos projets, ou toute autre besoin.
		</p>
		<div id="experiences">
			<div class="experienceOne">
				<p class="sizeNumber">350</p>
				<h2>Clients</h2>
			</div>
			<div class="experienceTwo">
				<p class="sizeNumber">40</p>
				<h2>Années d'expertise</h2>
			</div>
		</div>
	</section>

	<!-- SERVICES SECTION -->
	<section id="globalBoxService">	
		<h2 class="titleNav">| Nos services</h2>	
		<div id="serviceBox">
			
			<h2 class="serviceSection">AUDIT</h2>
			
				<p>Nous intervenons au titre de vos besoins en matière de :</p>
					
					<ul>
						<li> Commissairiat aux comptes.</li>
						<li> Audit Contractuel.</li>
						<li> Commissariat à la transformation.</li>
						<li> Commissariat à la fusion.</li>
						<li> Audit d'acquisition.</li>
					</ul>
			
			<h2 class="serviceSection">EXPERTISE COMPTABLE</h2>

				<p>Nous vous proposons un accompagnement sur mesure en comptabilité, 
				fiscalité, social et juridique :</p>
			
						<ul>
							<li>Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie...)</li>
							<li>Associations (tenue, accompagnement, révision...)</li>
							<li>Particuliers (Impot sur le revenu, IFI, conseil patrimonial...)</li>
							<li>Entreprises (tenue complète, comptabilité partagée, révision, secrétariat, paie...)</li>
						</ul>


			<h2 class="serviceSection">CONSEILS / ACCOMPAGNEMENT</h2>

				<p>text à définir :</p>
			
						<ul>
							<li>Création / reprise de socités.</li>
							<li>Mise en place de tableaux de boards.</li>
							<li>Prévisionnels.</li>
							<li>Évaluation de socités.</li>
							<li>Mise à disposition de logiciels sans engagement à tarifs avantageux:
								"comptabilité, facturation, notes de frais"</li>
						</ul>
		</div>
	</section>
		<!-- CONTACT SECTION -->
		<section id="bluBoxTwo">
			<div class="filterTwo">

			<h2 class="titleNav" id="contact">| Contact</h2>

				<div id="boxContner">
					<ul id="boxAdresse">
						<h3 id="coordonnees">Coordonnées :</h3>

							<li id="adresse">5 Place d'Angleterre <br>62200 BOULOGNE SUR MER</li>
							<li id="telMobile">03 21 30 19 19</li>
							<li id="adMail">contact@kaufman.fr</li>
							<li id="numFax">03 91 18 65 65</li>

					</ul>
					<div id="twoBox">
						<div id="boxContactOne">
							<p class="textBtn"> Optenir un devis de comptable et d'experts-comptables</p>
							<button class="myBtn">REMPLIR LE DEVIS</button>
						</div>
						<div id="boxContactTwo">
							<p class="textBtn"> Rejoindre notre équipe</p>
							<button class="myBtn">ENVOYER UN C.V</button>	
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
                          <h1 class="wow fadeInUp">Recevoir notre newsletter</h1>
                    </div>

                    <div class="input-group wow fadeInUp">
                          <input type="email" class="form-control" placeholder="Entrez votre Email">
                          <span class="input-group-btn">
                                <button class="btn" type="submit">S'abonner</button>
                          </span>
                    </div>
                    </div>

                  </div>

           </section>

<?php
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>