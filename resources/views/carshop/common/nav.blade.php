    <!-- Navigation-->
    <header id="navbar-spy" class="header header-1">
		<!-- .top-bar end -->
		<nav id="primary-menu" class="navbar navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="logo" href="{{route('top')}}">
					<img src="{{asset('assets/images/logo/logo-light.png')}}" alt="Autoshop">
					</a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a href="{{route('top')}}">Home</a>
						</li>
						<li class="has-dropdown">
							<a href="{{route('category.show', $categories[0]->id)}}">RENT RVs</a>
						</li>
						<li class="has-dropdown">
							<a href="{{route('category.show', $categories[1]->id)}}">RENT MOTORCYCLE</a>
						</li>
						<li>
							<a href="about.html">about</a>
						</li>
						<li class="has-dropdown">
							<a href="{{route('faq')}}">faq</a>
						</li>
						<li class="has-dropdown pull-left">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">contact</a>
						</li>
						<!-- li end -->
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
