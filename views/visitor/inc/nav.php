<!-- NAV -->
<nav class="nav">
	<span id="brand">
		<a href="./"><img src="./public/img/logo/logo2white.png" class="logoBaner" alt="logo du cabinet kaufmann"></a>
	</span>
	<ul class="menu foo-1">
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#accueil">Accueil</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#cabinet">Le cabinet</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#expertise">Expertise</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#services">Nos services</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#contact">Contact</a></li>		
		<li><a data-scroll href="./?page=actualite">Actualités</a></li>
		<li><a data-scroll href="<?= $RConfig['configClient'] ?>" class="btn btn-primary customer" target="blank"><i class="fas fa-users"></i> Espace client </a></li>
	</ul>
	<div id="toggle">
		<div class="span"><i class="fas fa-bars"></i></div>
	</div>
</nav>

<!-- NAV MOBILE-->
<div id="resize">
	<div class="close-btn">
		<i class="fas fa-times burger"></i>
	</div>
	<ul class="menu">
		<li><a data-scroll href="<?= $RConfig['configClient'] ?>" class="btn btn-primary customer" target="blank"><i class="fas fa-users"></i> Espace client </a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#accueil">Accueil</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#cabinet">Le cabinet</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#expertise">Expertise</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#services">Nos services</a></li>
		<li><a data-scroll href="<?php if(!empty($_GET)){ echo './';} ?>#contact">Contact</a></li>
		<li><a data-scroll href="./?page=actualite">Actualités</a></li>
	</ul>
</div>