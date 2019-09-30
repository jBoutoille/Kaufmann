<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4" id="footerColor">
	<div class="container text-center text-md-left">
		<div class="row text-center text-md-left mt-3 pb-3">
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<a href="./">
					<img src="./public/img/logo/logo4white.png" id="imgFooter" class="foo-3" alt="Logo du cabinet G.KAUFMANN">
				</a>
				<div class="row">
					<div class="col-md-12">
						<a href="https://www.cncc.fr/" target="_blank"><img src="./public/img/logo/cncc2.png" id="imgLogoOne" class="foo-4" alt="Logo CNCC"></a>
						<a href="https://www.experts-comptables.fr/" target="_blank"><img src="./public/img/logo/ordre.png" id="imgLogoTwo" class="foo-5" alt="Logo Ordre des experts comptables"></a>     
					</div>             
				</div>
			</div>
			<hr class="w-50 clearfix d-md-none foo-3" id="footerBar">
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 foo-4" id="footerContact">
				<h6 class="text-uppercase mb-4 font-weight-bold foo-5"><?= $RFooter['footerTitreCoordonnees'] ?></h6>
				<p class="footerText foo-5">
				<i class="fas fa-building mr-2"></i><?= $RConfig['configAdresse'] ?><br><?= $RConfig['configCP'] ?>, <?= $RConfig['configVille'] ?></p>
				<p class="footerText foo-5">
				<i class="fas fa-envelope mr-2 footerIco"></i><?= $RConfig['configMail'] ?></p>
				<p class="footerText foo-5">
				<i class="fas fa-phone mr-2 footerIco"></i><?= $RConfig['configTelephone'] ?></p>
				<p class="footerText foo-5">
				<i class="fas fa-print mr-2 footerIco"></i><?= $RConfig['configFax'] ?></p>
				<ul>
					<li class="list-inline-item">
						<a class="btn-floating btn-sm rgba-white-slight mx-1 foo-5" href="<?= $RFooter['footerLinkedin'] ?>" target="_blank">
							<i class="fab fa-linkedin foo-5" id="linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<hr style="border-top: 1px solid #f8f9fa">
		<div class="row d-flex align-items-center">
			<div class="col-md-12" style="color: white;display: flex;justify-content: center;">
				<p class="text-center text-md-left" style="color: white"><?= $RFooter['footerCopyrights'] ?> |  
				Développeur
				<a href="#" style="color: white">JBoutoille</a> . 
				<a href="#" style="color: white">JFasquelle</a> | 
				<a href="./?page=mentions-legales" style="color: white">Mentions légales</a> | 
				<a href="./?page=gk-admin" style="color: white">Admin</a>
				</p>
			</div>
			<div class="col-md-5 col-lg-4 ml-lg-0" style="color: white"></div>
		</div>
	</div>
</footer>