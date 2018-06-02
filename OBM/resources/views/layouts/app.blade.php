<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}">
	<title>OBM</title>

    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href=""><em class="fa fa-rocket"></em> Brand.name</a></h1>

				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.html"><em class="fa fa-dashboard"></em> a</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-calendar-o"></em> b</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-bar-chart"></em> c</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-hand-o-up"></em> d</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-pencil-square-o"></em> e</a></li>
					<li class="nav-item"><a class="nav-link" href=""><em class="fa fa-clone"></em> f</a></li>
				</ul>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">TITULO</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1">Nom</h4>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em>Perfil</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Ajustes</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Desconnectar</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<div class="container">
					<section class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-8">
								<div class="jumbotron">
									<h1 class="mb-4">PROXIMO PARTIDO</h1>
									<div class="row">
										<div class="col-md-4">
											<div class="container">
												<div class="row">
													<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 140px;">
												</div>
												<div class="row">
													<span>Nombre equipo</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="container">
													<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 140px;">
											</div>
										</div>
										<div class="col-md-4">
											<div class="container">
												<div class="row">
													<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 140px;">
												</div>
												<div class="row">
													<span>Nombre equipo</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Top Users</h3>
										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 1</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 2</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10">
												<h6 class="pt-1">Username 3</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
										<div class="divider"></div>
										<div id="calendar"></div>
									</div>
								</div>
							</div>
						</div>
							<div class="row">
								<div class="col-md-12">
								<div class="card mb-4">
										<h3 class="card-title">Recent Orders</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Order #</th>
														<th>Product</th>
														<th>Customer</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>0001</td>
														<td>Product Name 1</td>
														<td>Customer 1</td>
														<td>Complete</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
							</div>
							</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Articles</h3>
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										<h6 class="card-subtitle mb-2 text-muted">Latest news</h6>
										<div class="divider" style="margin-top: 1rem;"></div>
										<div class="articles-container">
											<div class="article border-bottom">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->

											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->

											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															<div class="text-muted">Jun</div>
														</div>
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												<div class="clear"></div>
											</div><!--End .article-->
										</div>
									</div>
								</div>
							</div>

						</div>
						<section class="row">

						</section>
					</div>
				</section>
			</main>
		</div>

	</body>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/chart.min.js') }}"></script>
  <script src="{{ asset('js/chart-data.js') }}"></script>
  <script src="{{ asset('js/easypiechart.js') }}"></script>
  <script src="{{ asset('js/easypiechart-data.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


</html>
