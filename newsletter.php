<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once 'include/head.php';?>
	</head>
	<body>
		<?php require_once 'include/header.php';?>
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6 col-sm-12 col-xs-12 text-center">
					<a href="#" class="cine-img img-responsive"><img class="cine-img img-rounded" src="/assets/img/cine.png" alt="cinema"></a>
				</div>
				<div  class="col-md-6 col-sm-12 col-xs-12">
					<div class="text-center"><h2 class="page-header">Inscrivez-vous à notre Newsletter!</h2></div>
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
							</div>
							<button class="btn btn-success">Envoyer</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<br>
		<?php require_once 'include/footer.php';?>
	</body>
</html>
