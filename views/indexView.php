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
		<h2 id="titleOne">| Le cabinet</h2>
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
		<h2 id="titleTwo">Notre expertise en quelques chiffres :</h2>
		<div id="barOne"></div>
		<p id="texteSectionTwo">
			Pourquoi faire du cabinet G.KAUFMANN votre partenaire ? Présent à Boulogne/Mer, nos compétences multiples ainsi que notre expertise feront de nous un allié de poids.
			<br>
			<br>
			Confiez-nous vos retards comptabilité, la gestion de vos projets, ou toute autre besoin.
		</p>
		
		<p class="sizeNumber">350 40</p>
		<div class="experienceOne">
			<h2>Clients</h2>
		</div>
		<div class="experienceTwo">
			<h2>Années/expertise</h2>
		</div>
	</div>

	

	<!-- SERVICES SECTION -->
	<div class="titleNav">
		<h2>| Nos services</h2>
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