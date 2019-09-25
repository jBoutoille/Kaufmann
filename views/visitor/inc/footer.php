<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 foo-3" style="background-color: rgba(11,36,91)">
	<div class="container text-center text-md-left">
		<div class="row text-center text-md-left mt-3 pb-3">
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
				<a href="./">
					<img src="./public/img/logo/logo4white.png" style="width: 30vh" alt="Logo du cabinet G.KAUFMANN">
				</a>
				<div class="row">
					<div class="col-md-12">
						<a href="https://www.cncc.fr/"><img src="./public/img/logo/cncc2.png" style="width: 15vh;margin-top: 3vh;margin-right: 3vh" alt="Logo CNCC"></a>
						<a href="https://www.experts-comptables.fr/"><img src="./public/img/logo/ordre.png" style="width: 15vh;margin-top: 3vh" alt="Logo Ordre des experts comptables"></a>     
					</div>             
				</div>
			</div>
			<hr class="w-50 clearfix d-md-none" style="border-top: 1px solid #f8f9fa; margin: 0 auto; margin-top: 5%;">
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="color: white">
				<h6 class="text-uppercase mb-4 font-weight-bold"><?= $RFooter['footerTitreCoordonnees'] ?></h6>
				<p style="color: white">
				<i class="fas fa-building mr-2"></i><?= $RConfig['configAdresse'] ?><br><?= $RConfig['configCP'] ?>, <?= $RConfig['configVille'] ?></p>
				<p style="color: white">
				<i class="fas fa-envelope mr-2" style="color: white"></i><?= $RConfig['configMail'] ?></p>
				<p style="color: white">
				<i class="fas fa-phone mr-2" style="color: white"></i><?= $RConfig['configTelephone'] ?></p>
				<p style="color: white">
				<i class="fas fa-print mr-2" style="color: white"></i><?= $RConfig['configFax'] ?></p>
				<li class="list-inline-item">
					<a class="btn-floating btn-sm rgba-white-slight mx-1" href="<?= $RFooter['footerLinkedin'] ?>" target="_blank">
						<i class="fab fa-linkedin" style="color: white; font-size: 6vh;"></i>
					</a>
				</li>
			</div>
		</div>
		<hr style="border-top: 1px solid #f8f9fa">
		<div class="row d-flex align-items-center">
			<div class="col-md-12" style="color: white;display: flex;justify-content: center;">
				<p class="text-center text-md-left" style="color: white"><?= $RFooter['footerCopyrights'] ?> |  
				Développé par 
				<a href="#" style="color: white">JBoutoille</a> & 
				<a href="#" style="color: white">JFasquelle</a> | 
				<a href="./?page=mentions" style="color: white">Mentions légales</a> | 
				<a href="./?page=gk-admin" style="color: white">Admin</a>
				</p>
			</div>
			<div class="col-md-5 col-lg-4 ml-lg-0" style="color: white"></div>
		</div>
	</div>
</footer>