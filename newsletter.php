<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once 'include/head.php';?>
	</head>
	<body>
		<?php require_once 'include/header_img.php';?>
		<div class="container">
			<div class="col-md-12">
				<div class="news-section">
					<div class="text-center">
						<h2 class="page-header">News du festival</h2>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-6 col-sm-6 col-xs-12 news-first">
							<a href="/page_film.php" class=""><img class="img-responsive" src="/assets/img/serie5.jpg" alt="poster3"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="news-date">
								07 Mars 2019
							</div>
							<a class="news-title-first" href="/page_film.php">Les grandes figures du cinéma rejouées... par le cinéma !</a>
							<p>
								Proposer aux joueurs une nouvelle franchise est un exercice difficile en 2019. Car il faut à la fois satisfaire la majorité des joueurs, c’et à dire les plus amateurs, et les hardcore gamers, ceux qui passent des centaines d’heures sur un titre pour le dominer et en exploiter tous les aspects. Anthem a été dévoilé comme ça : beau, fun, simple à jouer et difficile à maîtriser au haut niveau. Alors, la promesse a-t-elle été tenue ?
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 news">
						<a href="/page_film.php" class="">
							<img class="" src="/assets/img/serie1.jpg" alt="poster4">
							<span class="trailer glyphicon glyphicon-film"></span>
						</a>
						<div class="news-date">
							08 Mars 2019
						</div>
						<a  class="news-title"href="#">News - Tournées</a>
						<p>
							Stranger Things : découvrez les secrets de la mère d'Eleven dans le livre prequel "Suspicious Minds"
						</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 news">
						<a href="/page_film.php" class="">
							<img class="" src="/assets/img/serie4.jpg" alt="poster5">
							<span class="trailer glyphicon glyphicon-film"></span>
						</a>
						<div class="news-date">
							09 Mars 2019
						</div>
						<a class="news-title" href="#">News - Acteurs</a>
						<p>
							Demain nous appartient : ce qui vous attend dans l'épisode 417 du lundi 11 mars 2019 [SPOILERS]
						</p>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 news">
						<a href="/page_film.php" class="">
							<img class="" src="/assets/img/serie3.jpg" alt="poster5">
							<span class="trailer glyphicon glyphicon-film"></span>
						</a>
						<div class="news-date">
							10 Mars 2019
						</div>
						<a class="news-title" href="#">News - Films</a>
						<p>
							Jared Padalecki et Jensen Ackles, ce n'est pas QUE Supernatural !
						</p>
					</div>
				</div>
				<div class="text-center">
					<h2 class="page-header">Inscrivez-vous à notre Newsletter!</h2>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 text-center">
					<a href="#" class="cine-img img-responsive"><img class="cine-img img-rounded" src="/assets/img/cine.png" alt="cinema"></a>
				</div>
				<div  class="col-md-6 col-sm-12 col-xs-12">
					<form method="post" action="#">
						<fieldset>
							<legend>
								Vos coordonnées
							</legend>
							<div class="form-group">
								<p class="row">
									<label for="nom" class="col-md-6 col-sm-6 col-xs-6">Nom:</label>
									<input type="text" name="nom" id="nom" class="col-md-6 col-sm-6 col-xs-6 form-control"/>
								</p>
								<p class="row">
									<label for="prenom" class="col-md-6 col-sm-6 col-xs-6">Prénom:</label>
									<input type="text" name="prenom" id="prenom" class="col-md-6 col-sm-6 col-xs-6 form-control"/>
								</div>
							</p>
							<div class="form-group">
								<p class="row">
									<label for="email" class="col-md-6 col-sm-6 col-xs-6">Adresse email:</label>
									<input type="email" name="email" id="email" class="col-md-6 col-sm-6 col-xs-6 form-control"/>
								</p>
							</div>
							<div class="validation-inscription">
								<button class="btn btn-success">Envoyer</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<br>
		<?php require_once 'include/footer.php';?>
	</body>
</html>
