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
	<div class="titleNav">
		<h2 id="cabinet">| Le cabinet</h2>
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
	<div class="titleNav">
		<h2 id="services">| Nos services</h2>
	</div>
	<div id="serviceBox">
		
		<h2 id="audit">AUDIT</h2>
		<p>Nous intervenons au titre de vos besoins en matière de:</p>
		<ul>
			<li class="toto">Commissairiat aux comptes,</li>
			<li>Audit Contractuel,</li>
			<li>Commissariat à la transformation,</li>
			<li>Commissariat à la fusion,</li>
			<li>Audit d'acquisition,</li>
		</ul>
		<h2>EXPERTISE COMPTABLE</h2>
		<p>
			Nous vous proposons un accompagnement sur mesure en comptabilité, 
			fiscalité, social et juridique.<br><br>

			Professions libérales (déclaration fiscale annuelles, conseil patrimonial, assistance fiscale, paie...)<br>

			Associations (tenue, accompagnement, révision...)<br>

			Particuliers (Impot sur le revenu, IFI, conseil patrimonial...)<br>

			Entreprises (tenue complète, comptabilité partagée, révision, secrétariat, paie...)
		</p>
	</div>






	<!-- CONTACT SECTION -->
	<div class="titleNav">
		<h2>| Contact</h2>
	</div>
	<!-- ACTUALITES SECTION -->
	<div class="titleNav">
		<h2>| Actualités</h2>
	</div>

<?php
    $htmlTitle = 'Accueil | Cabinet G.KAUFMANN';
    $htmlContent = ob_get_clean();
    require './views/template.php';
?>