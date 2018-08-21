	<!--Navbar-->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="/"><img src="{{asset('img/logo.png')}}" id="logo-navbar"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="/case-studies">Case studies</a></li>
					<li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
					<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user-circle"></i></a>
						</li>
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="/home">Dashboard</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
			   						onclick="event.preventDefault();
							 		document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of navbar-->
