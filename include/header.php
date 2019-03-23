<nav class="navbar navbar-default navbar-fixed-top navbar-autohide">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Les Films en Plein Air</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse pull-right col-md-5 col-sm-5 col-xs-12" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="/"><span class="glyphicon glyphicon-home"></span></a>
				</li>
				<li><a href="list.php">Liste des films</a></li>
				<li><a href="newsletter.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
<header>
	<a href="inscription.php">
		<div class="sticky-top text-center">
			<div class="sticky-inscription-top">
				S'inscrire pour une séance!
			</div>
		</div>
	</a>
	<div id="carousel-example-generic" class="carousel slide slider" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active" style="background-image:url(/assets/img/plein-air2.jpg); height:100%">
				<div class="carousel-caption">
					<h4>Venez découvrir nos différents stands!</h4>
				</div>
			</div>
			<div class="item" style="background-image:url(/assets/img/plein-air3.jpg); height:100%">
				<div class="carousel-caption">
					<h4>Profitez de nos séances toute la journée!</h4>
				</div>
			</div>
			<div class="item" style="background-image:url(/assets/img/plein-air4.jpg); height:100%">
				<div class="carousel-caption">
					<h4>Des moments de partage et convivialité inégalés!</h4>
				</div>
			</div>
			<div class="arrow text-center">
				<a href="#film-poster"><img src="/assets/img/arrow.gif" alt="arrow"></a>
			</div>
		</div>
		<!-- Controls  -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>
