<?php ob_start(); ?>


    <!-- HTML DE LA PAGE INDEX -->
<header>
	<div id="imgHeader">
	 <div id="filter">
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
	<div>
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
	</div>
	<div id="bluBoxOne">
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
	</div>

	<!-- SERVICES SECTION -->
	<h2 class="titleNav">| Nos services</h2>	
	<div id="serviceBox">
		
		<h2 class="serviceSectionOne">AUDIT</h2>
		
			<p>Nous intervenons au titre de vos besoins en matière de:</p>
				
				<ul>
					<li> Commissairiat aux comptes.</li>
					<li> Audit Contractuel.</li>
					<li> Commissariat à la transformation.</li>
					<li> Commissariat à la fusion.</li>
					<li> Audit d'acquisition.</li>
				</ul>
		
		<h2 class="serviceSectionTwo">EXPERTISE COMPTABLE</h2>

			<p>Nous vous proposons un accompagnement sur mesure en comptabilité, 
			fiscalité, social et juridique.</p>
		
					<ul>
						<li>Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie...)</li>
						<li>Associations (tenue, accompagnement, révision...)</li>
						<li>Particuliers (Impot sur le revenu, IFI, conseil patrimonial...)</li>
						<li>Entreprises (tenue complète, comptabilité partagée, révision, secrétariat, paie...)</li>
					</ul>


			<h2 class="serviceSectionTree">CONSEILS / ACCOMPAGNEMENT</h2>
		
					<ul>
						<li>Création / reprise de socités.</li>
						<li>Mise en place de tableaux de boards.</li>
						<li>Prévisionnels.</li>
						<li>Évaluation de socités.</li>
						<li>Mise à disposition de logiciels sans engagement à tarifs avantageux:
							"comptabilité, facturation, notes de frais"</li>
					</ul>
	</div>

	<!-- CONTACT SECTION -->
	<div id="bluBoxTwo">
		<div class="titleNav">
			<h2 id="contact">| Contact</h2>
			<div id="boxContact">
				<div id="boxAddress"></div>
				<div id="boxDevis"></div>
				<div id="boxRejoin"></div>
			</div>
		</div>
	</div>
	<!-- ACTUALITES SECTION -->
	<div class="titleNav">
		<h2>| Actualités</h2>
	</div>

<?php
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/visitor/template.php';
?>