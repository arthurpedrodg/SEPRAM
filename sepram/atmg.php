<!DOCTYPE html>
<html lang="pt" ng-app="sepram" ng-controller="sepramCtrl">
	<head>
		<?php
            include "head.php"
        ?>
		<title>{{posts[0].titulo}}</title>
	</head>
	<body class="bg">
		<div class="corpo">
			<!--nav-->
			<?php
                include "nav.php"
             ?>
			<!--fim nav-->
			<!--content-->
			<div class="container">
				<div class="row">
					<div class="col col-12">
						<section>
							<div class="conteudo">
								<div class="row">
									<div class="col col-12 col-12-m perf">
										<div class="perf-img">
											<img src="{{posts[0].imagem}}" alt="">
										</div>
										<div class="perf-name">
											<h1>{{posts[0].titulo}}</h1>
											<p>Por: <a href="perf_italo.php">{{posts[0].autor}}</a></p>
											<span><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[0].localidade}}</span>	
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div class="row">
					<div class="col col-6 col-12-m">
						<div class="row">
							<div class="col col-12">
								<div class="padding-20">
									<section class="padding-10">
										<h4>Detalhes:</h4>
										<div class="perf-sobre" style="height: 106px; line-height: 23px;">
											<p><i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 10px;margin-left: 1px;"></i>{{posts[0].horas}}</p>
											<p><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[0].data}}</p>
											<p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 13px;margin-left: 2px;"></i>{{posts[0].localidade}}</p>
											<p><i class="fa fa-envelope-o" aria-hidden="true" style="margin-right: 10px;"></i>{{posts[0].email}}</p>
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-20">
									<section class="padding-10">
										<h4>Descrição:</h4>
										<div class="perf-sobre">
											<p>{{posts[0].descricao}}</p>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-6 col-12-m">
						<div class="row">
							<div class="col col-12">
								<div class="padding-21">
									<section class="padding-10">
										<h4>Habilidades necessárias:</h4>
										<div class="proj-hab" style="height: 130px;">
											<a href="#"><span>{{posts[0].tag1}}</span></a>
											<a href="#"><span>{{posts[0].tag2}}</span></a>
											<a href="#"><span>{{posts[0].tag3}}</span></a>											
										</div>
									</section>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12">
								<div class="padding-21">
									<section class="padding-10">
										<h4>Quem participa:</h4>
										<div class="proj-list scroll" style="height: 221px;">
											<div class="proj-part">
												<div class="proj-img" style="background-image: url(img/perf.png)"></div>
												<div class="proj-title">
													<a href="">
														<h3>Ítalo Sousa</h3>
													</a>
													<p>italusousa@gmail.com</p>
												</div>
											</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--content fim-->
		</div>
		<footer>
			<?php
                include "footer.php"
            ?>
		</footer>
	</body>
</html>