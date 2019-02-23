<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once 'include/head.php';?>
	</head>
	<body>
		<?php require_once 'include/header.php';?>
		<section id="formulaire">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 text-center">
						<a href="#" class="cine-img"><img class="cine-img img-rounded" src="/assets/img/cine.png" alt="cinema"></a>
					</div>
					<div  class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-center"><h2 class="page-header">Inscrivez-vous!</h2></div>
						<form method="post" action="#">
							<fieldset>
								<legend>
									Vos coordonnées
								</legend>
								<div class="form-group">
									<p class="row">
										<label for="nom" class="col-md-6 col-sm-6 col-xs-6">Nom:</label>
										<input type="text" name="nom" id="nom" class="col-md-6 col-sm-6 col-xs-6"/>
									</p>
									<p class="row">
										<label for="prenom" class="col-md-6 col-sm-6 col-xs-6">Prénom:</label>
										<input type="text" name="prenom" id="prenom" class="col-md-6 col-sm-6 col-xs-6"/>
									</div>
								</p>
								<div class="form-group">
									<p class="row">
										<label for="email" class="col-md-6 col-sm-6 col-xs-6">Adresse email:</label>
										<input type="email" name="email" id="email" class="col-md-6 col-sm-6 col-xs-6"/>
									</p>
									<p class="row">
										<label for="email" class="col-md-6 col-sm-6 col-xs-6">Quel(s) jour(s) souhaitez-vous participer?</label>
										<input type="date" name="date" id="date" class="col-md-6 col-sm-6 col-xs-6"/>
									</p>
									<p class="row">
										<label  class="col-md-12 col-sm-12 col-xs-12">S'inscrire à la newsletter <input type="checkbox"></label>
									</p>
								</div>
								<p>
									<label for="precisions" class="col-md-12 col-sm-12 col-xs-12">Si "Autre", veuillez préciser:</label>
									<br>
									<textarea name="precisions" id="precisions" class="col-md-12 col-sm-12 col-xs-12" rows="4"></textarea>
									<br>
								</p>
								<br>
								<p>
									<button class="btn btn-success">Envoyer</button>
								</p>
								<br>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php require_once 'include/footer.php';?>
	</body>
</html>