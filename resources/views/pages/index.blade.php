@extends('layouts/app')

@section('content')

	<!--Slider-->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/background.png">
				<div class="carousel-caption">
					<h1 class="display-2">Making it happen</h1>
					<h3>Turning good ideas into great results</h3>
					<button type="button" class="btn btn-outline-light btn-lg">VIEW DEMO</button>
					<button type="button" class="btn btn-primary btn-lg">Get Started</button>
				</div>
			</div>
			<div class="carousel-item"><img src="img/background2.png"></div>
			<div class="carousel-item"><img src="img/background3.png"></div>
		</div>
	</div>
	<!--End of slider-->

	<!--- Jumbotron-->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">Tempus metus vel lacinia penatibus viverra sociosqu, sollicitudin ligula dui mauris turpis tellus, porttitor taciti varius nam sem pulvinar. Mauris mi auctor mattis congue egestas torquent libero.</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="#"><button class="btn btn-outline-secondary btn-lg">More...</button> </a>
			</div>
		</div>
	</div>

	<!--- Welcome section-->
	<div class="container-fluid padding">
		<div class="row text-center welcome">
			<div class="col-12">
				<h1 class="display-4">Web development tools</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">Ullamcorper pulvinar, dictumst sollicitudin imperdiet tellus fermentum netus nisl euismod pellentesque blandit. Velit aliquam quisque taciti odio.</p>
			</div>
		</div>
	</div>

	<!-- Three Column Section-->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>HTML5</h3>
				<p>Etiam semper tortor luctus sagittis nulla </p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-bold"></i>
				<h3>BOOTSTRAP</h3>
				<p>Taciti platea bibendum, sapien rhoncus </p>
			</div>
			<div class="col-sm-12 col-md-4">
				<i class="fab fa-laravel"></i>
				<h3>Laravel</h3>
				<p>Porttitor fusce faucibus cubilia donec</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--- Two Column Section-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<img src="img/desk.png" class="img-fluid">
			</div>
			<br>
			<div class="col-lg-6">
				<h2>Collaborative working environment (CWE) </h2>
				<p>Urna taciti nisl pellentesque vehicula augue elementum placerat</p>
				<p>Iaculis scelerisque libero platea imperdiet auctor sagittis, lacinia cras cum mauris viverra etiam ut.</p>
				<p>Rermentum sociosqu dignissim, netus sapien id blandit .</p>
				
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
		</div>
	</div>

	<!--- Tteam div-->
	<div class="container-fluid-padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Our team</h1>
			</div>
			<hr>
		</div>
	</div>

	<!--- Cards section-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team1.png">
					<div class="card-body">
						<h4 class="card-title">Rasmus Lerdorf</h4>
						<p class="card-text">Eu pretium aptent augue habitant vel ante at luctus, donec in dignissim phasellus lacus integer viverra.</p>
						<a href="https://www.linkedin.com/" class="btn btn-outline-secondary">See profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team2.png">
					<div class="card-body">
						<h4 class="card-title">Grace Hopper</h4>
						<p class="card-text">Facilisis orci penatibus ac in nisl ut fames eleifend mauris quam, vestibulum ante nullam magna molestie.</p>
						<a href="https://www.linkedin.com/" class="btn btn-outline-secondary">See profile</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/team3.png">
					<div class="card-body">
						<h4 class="card-title">Linus Torvalds</h4>
						<p class="card-text">Primis tempus metus vel lacinia penatibus viverra sociosqu, sollicitudin ligula dui mauris turpis tellus.</p>
						<a href="https://www.linkedin.com/" class="btn btn-outline-secondary">See profile</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--- Two Column Section-->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6">
				<h2>Company's culture</h2>
				<p>Sollicitudin donec dui tellus pretium sed, in nisi platea feugiat. Quisque ante conubia elementum massa pellentesque urna ad pretium, magna vivamus est taciti condimentum facilisi vel class, malesuada et erat.</p>			
				<p>Mauris mi auctor mattis congue egestas torquent libero vehicula bibendum.</p>
			</div>
			<div class="col-lg-6">
				<img src="img/culture.png" class="img-fluid">
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!-- Connect-->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
				<a href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>

@endsection