<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once 'include/head.php';?>
	</head>
	<body>
		<?php require_once 'include/header.php';?>
		<section id="film-poster">
			<div class="container">
				<div class="col-md-12">
					<div class="text-center"><h2 class="page-header">Les films à l'affiche</h2></div>
					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="#poster1" data-toggle="tab">Le sens de la fête</a></li>
						<li><a href="#poster2" data-toggle="tab">Les vacances de la passion</a></li>
						<li><a href="#poster3" data-toggle="tab">Life</a></li>
					</ul>
					<br>
					<div class="container">
						<div class="tab-content">
							<div class="tab-pane active" id="poster1">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film1.jpg" alt="poster1"></a>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
									<h3>Le sens de la fête</h3>
									<p>
										  Max est traiteur depuis trente ans. Des fêtes il en a organisé des centaines, il est même un peu au bout du parcours. Aujourd'hui c'est un sublime mariage dans un château du 17ème siècle, un de plus, celui de Pierre et Héléna.
									</p>
									<p>
										 Comme d'habitude, Max a tout coordonné : il a recruté sa brigade de serveurs, de cuisiniers, de plongeurs, il a conseillé un photographe, réservé l'orchestre, arrangé la décoration florale, bref tous les ingrédients sont réunis pour que cette fête soit réussie...
									</p>
								</div>
							</div>
							<div class="tab-pane fade" id="poster2">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film4.jpg" alt="poster2"></a>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
									<h3>Les vacances de la passion</h3>
									<p>
										  Max est traiteur depuis trente ans. Des fêtes il en a organisé des centaines, il est même un peu au bout du parcours. Aujourd'hui c'est un sublime mariage dans un château du 17ème siècle, un de plus, celui de Pierre et Héléna.
									</p>
									<p>
										 Comme d'habitude, Max a tout coordonné : il a recruté sa brigade de serveurs, de cuisiniers, de plongeurs, il a conseillé un photographe, réservé l'orchestre, arrangé la décoration florale, bref tous les ingrédients sont réunis pour que cette fête soit réussie...
									</p>
								</div>
							</div>
							<div class="tab-pane fade" id="poster3">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film6.jpg" alt="poster3"></a>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
									<h3>Life</h3>
									<p>
										  Max est traiteur depuis trente ans. Des fêtes il en a organisé des centaines, il est même un peu au bout du parcours. Aujourd'hui c'est un sublime mariage dans un château du 17ème siècle, un de plus, celui de Pierre et Héléna.
									</p>
									<p>
										 Comme d'habitude, Max a tout coordonné : il a recruté sa brigade de serveurs, de cuisiniers, de plongeurs, il a conseillé un photographe, réservé l'orchestre, arrangé la décoration florale, bref tous les ingrédients sont réunis pour que cette fête soit réussie...
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div  class="container">
					<div class="text-center"><h2 class="page-header">Les prochains films</h2></div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film2.jpg" alt="poster3"></a>
						<a href="#"><p>Le sens des sentiments</p></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film1.jpg" alt="poster4"></a>
						<a href="#"><p>Le sens des sentiments</p></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a href="/page_film.php" class="thumbnail"><img class="poster" src="/assets/img/film4.jpg" alt="poster5"></a>
						<a href="#"><p>Le sens des sentiments</p></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
				</div>
			</section>
			<section id="auteur">
				<div  class="container">
					<div class="text-center"><h2 class="page-header">Les auteurs à l'affiche</h2></div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a data-toggle="modal" href="/page_auteur.php" data-target="#infos" class="thumbnail"><img class="poster" src="/assets/img/author2.jpg" alt="author1"></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a data-toggle="modal" href="/page_auteur.php" data-target="#infos" class="thumbnail"><img class="poster" src="/assets/img/author2.jpg" alt="author2"></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
					<div class="col-md-4 col-sm-8 col-xs-12 article col-centered">
						<a data-toggle="modal" href="/page_auteur.php" data-target="#infos" class="thumbnail"><img class="poster" src="/assets/img/author2.jpg" alt="author3"></a>
						<p>
							De Dimitri Beg
						</p>
					</div>
					<div class="modal fade" id="infos">
						<div class="modal-dialog">
							<div class="modal-content"></div>
						</div>
					</div>
				</div>
				<br>
				<br>
			</div>
		</section>
		<?php require_once 'include/footer.php';?>
	</body>
</html>
