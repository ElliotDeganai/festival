<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once 'include/head.php';?>
	</head>
	<body>
		<?php require_once 'include/header.php';?>
		<section id="film-poster">
			<div class="container">
				<div class="text-center">
					<h2 class="page-header">Les films à l'affiche</h2>
				</div>
				<div class="col-md-8">
					<div class="title-section">
						<h3 class="title-section">A l'affiche</h3>
					</div>
					<div id="carousel-small" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-small" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-small" data-slide-to="1"></li>
							<li data-target="#carousel-small" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active" style="background-image:url(/assets/img/film11.jpg); height:100%">
								<div class="carousel-caption carousel-small">
									<div class="date">
										SORTIE LE 04 Mars
									</div>
									<h5>
										J'ai toujours rêvé
									</h5>
									<div class="description">
										Juliet Forrest à la recherche de son père disparu fait appel aux services du détective privé Rigby Deardon.
									</div>
								</div>
							</div>
							<div class="item" style="background-image:url(/assets/img/film8.jpg); height:100%">
								<div class="carousel-caption carousel-small">
									<div class="date">
										SORTIE LE 05 Mars
									</div>
									<h5>
										Les Cadavres sans costard
									</h5>
									<div class="description">
										Will est un ancien caïd qui a fui Londres et le milieu du crime pour échapper à la violence et à la dépravation de ses jeunes années.
									</div>
								</div>
							</div>
							<div class="item" style="background-image:url(/assets/img/film9.jpg); height:100%">
								<div class="carousel-caption carousel-small">
									<div class="date">
										SORTIE LE 06 Mars
									</div>
									<h5>
										J'ai rencontré le Diable
									</h5>
									<div class="description">
										Ce film-marathon se concentre sur la vie de trois parisiens d'une vingtaine d'années, qui vivent un ménage à trois peu conventionnel.
									</div>
								</div>
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#carousel-small" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-small" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="title-section">
						<h3 class="title-section">Prochainement</h3>
					</div>
					<ul class="list-entity">
						<li class="list-item first-child">
							<div class="next-film">
								<a href="/page_film.php" class="">
									<div class="next-film">
										<img class="first-child" src="/assets/img/film6.jpg" alt="poster3">
										<div class="trailer text-center">
											<span class="glyphicon glyphicon-play-circle"></span>
										</div>
									</div>
								</a>
							</div>
							<div class="meta">
								<div class="meta-title-first">
									<p>
										Captain Marvel
									</p>
								</div>
							</div>
						</li>
						<li class="list-item">
							<div class="next-film">
								<a href="#">Voyage au bout de l'Enfer</a>
								<a href="#"><span class="glyphicon glyphicon-play-circle pull-right"></span></a>
							</div>
						</li>
						<li class="list-item">
							<a href="#">Dracula, mort et heureux de l'être</a>
							<a href="#"><span class="glyphicon glyphicon-play-circle pull-right"></span></a>
						</li>
						<li class="list-item">
							<a href="#">Les Dents de la mer 2</a>
							<a href="#"><span class="glyphicon glyphicon-play-circle pull-right"></span></a>
						</li>
						<li class="list-item">
							<a href="#">La Maman et la Putain</a>
							<a href="#"><span class="glyphicon glyphicon-play-circle pull-right"></span></a>
						</li>
					</ul>
					<a class="list-complete" href="/liste.php">La liste complète de films</a>
				</div>
			</section>
			<section>
				<div  class="container">
					<div class="text-center">
						<h2 class="page-header">Les prochains films</h2>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="title-section">
							<h3 class="title-section">A ne pas manquer</h3>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a href="/page_film.php" class=""><img class="" src="/assets/img/film2.jpg" alt="poster3"></a>
							<a class="meta-title" href="#">Le sens des sentiments</a>
							<div class="author">
								Dimitri Beg
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a href="/page_film.php" class=""><img class="" src="/assets/img/film1.jpg" alt="poster4"></a>
							<a  class="meta-title"href="#">L'homme idéal</a>
							<div class="author">
								Stéphane Edouard
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a href="/page_film.php" class=""><img class="" src="/assets/img/film4.jpg" alt="poster5"></a>
							<a class="meta-title" href="#">Le deuxième sexe</a>
							<div class="author">
								Simone de Beauvoir
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a href="/page_film.php" class=""><img class="" src="/assets/img/film3.jpg" alt="poster5"></a>
							<a class="meta-title" href="#">Le capital</a>
							<div class="author">
								Karl Marx
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="title-section">
							<h3 class="title-section">Le film du jour</h3>
						</div>
						<div class="col-md-12 col-sm-6 col-xs-12 article">
							<div class="film-card">
								<a href="/page_film.php" class="">
									<img class="col-side" src="/assets/img/film5.jpg" alt="poster5">
									<i class="trailer glyphicon glyphicon-play-circle text-center"></i>
								</a>
							</div>
							<a class="meta-title" href="#">La volonté de puissance</a>
							<div class="author">
								Friedrich Nietzsche
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="auteur">
				<div  class="container">
					<div class="text-center">
						<h2 class="page-header">Les auteurs à l'affiche</h2>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="title-section">
							<h3 class="title-section">Le top des auteurs</h3>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a data-toggle="modal" href="/page_author.php" data-target="#infos" class=""><img class="" src="/assets/img/author2.jpg" alt="author1"></a>
							<div class="author">
								Dimitri Beg
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a data-toggle="modal" href="/page_author.php" data-target="#infos" class=""><img class="" src="/assets/img/author1.jpg" alt="author2"></a>
							<div class="author">
								Lily Daft
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a data-toggle="modal" href="/page_author.php" data-target="#infos" class=""><img class="" src="/assets/img/author4.jpg" alt="author3"></a>
							<div class="author">
								Nicole Poirier
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 article col-centered">
							<a data-toggle="modal" href="/page_author.php" data-target="#infos" class=""><img class="" src="/assets/img/author5.jpg" alt="author3"></a>
							<div class="author">
								Vincent Pouillon
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="title-section">
							<h3 class="title-section">La biographie</h3>
						</div>
						<div class="col-md-12 col-sm-6 col-xs-12 article">
							<div class="film-card">
								<a data-toggle="modal" href="/page_author.php" data-target="#infos" class="">
									<img class="col-side" src="/assets/img/author6.jpg" alt="poster5">
									<span class="trailer text-center glyphicon glyphicon-play-circle"></span>
								</a>
							</div>
							<div class="author">
								Valérie Mik
							</div>
						</div>
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
