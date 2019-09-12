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
		<h2>| Le cabinet</h2>
		<p class="texteSection">On sait depuis longtemps que travailler avec du texte lisible et contenant du sens 
		est source de distractions, et empêche de se concentrer sur la mise en page elle-même. 
		L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.'
		</p>
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