<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Formulation</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url() ?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url() ?>/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url() ?>/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="<?= base_url() ?>/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>" class="brand-link">
				<img src="<?= base_url() ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url() ?>/spec" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Spec</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url() ?>/ingredients" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Ingredients</p>
									</a>
								</li>
								<!-- <li class="nav-item">
									<a href="<?= base_url() ?>/composition" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Composition</p>
									</a>
								</li> -->

								<li class="nav-item">
									<a href="<?= base_url() ?>/formulation" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Formulation</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url() ?>/" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Users</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Formulation</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Formulation</li>
							</ol>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<section class="content-header">
				<div class="row">
					<div class="form-group ml-2">
						<select name="species_type" id="species_type" class="form-control" style="width:200px">
							<!--<option value="0">-- Species Type --</option>-->
							<?php foreach ($species_type as $key => $value) {
								echo "<option value='" . $key . "'>" . $value . "</option>";
							} ?>
						</select>
					</div>&nbsp;
					<div class="form-group">
						<select name="species" id="species" class="form-control" style="width:200px">
							<!--<option value="0">-- Species Type --</option>-->
							<?php foreach ($species as $key => $value) {
								echo "<option value='" . $key . "'>" . $value . "</option>";
							} ?>
						</select>
					</div>&nbsp;
					<div class="form-group">
						<select name="production_system" id="production_system" class="form-control" style="width:200px">
							<!--<option value="0">-- Production System --</option>-->
							<?php foreach ($production_system as $key => $value) {
								echo "<option value='" . $key . "'>" . $value . "</option>";
							} ?>
						</select>
					</div>&nbsp;
					<div class="form-group">
						<select name="stage_weight" id="stage_weight" class="form-control" style="width:200px">
							<!--<option value="0">-- Stage/Weight --</option>-->
							<?php foreach ($stage_weight as $key => $value) {
								if ($key == '2') {
									echo "<option value='" . $key . "' selected>" . $value . "</option>";
								} else {
									echo "<option value='" . $key . "'>" . $value . "</option>";
								}
							} ?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="card-body">
						<div class="form-inline">
							<select class="form-control form-control-sm col-md-4" name="ingredients" id="ingre">
								<?php foreach ($ingredients as $key => $value) {
									echo "<option value='" . $key . "'>" . $value . "</option>";
								} ?>
							</select>
							<input type="text" class="form-control col-1 ml-2" placeholder="%" id="percent" />
							<input type="button" class="btn btn-primary col-1 ml-2" value="Add" id="calculate" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h2 class='text-center'>Indicators</h2>
						<hr>
						<ul class="list-group">
							<li><a class='myTag list-group-item' href="#" rel="one">Ingredients</a></li>
							<li><a class='myTag list-group-item' href="#" rel="two">Sustainability Indicators</a></li>
							<li><a class='myTag list-group-item' href="#" rel="three">Macro Nutrient Composition</a></li>
							<li><a class='myTag list-group-item' href="#" rel="four">Fiber</a></li>
							<li><a class='myTag list-group-item' href="#" rel="five">Aminoacids</a></li>
							<li><a class='myTag list-group-item' href="#" rel="six">Fattyacids</a></li>
							<li><a class='myTag list-group-item' href="#" rel="seven">Vitamins & Minerals</a></li>
							<li><a class='myTag list-group-item' href="#" rel="eight">Ratios</a></li>
							<li><a class='myTag list-group-item' href="#" rel="nine">ADC</a></li>
						</ul>
					</div>
					<div class="col-md-9">
						<h2 class='text-center'>Values</h2>
						<hr>
						<div class='one' style="display: none">
							<div class="card col-10 ml-2" style="background-color: darkorange;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Ingredients</span>
									</a>
								</header>
								<div class="collapse show" id="collapse11">
									<article class="card-body">
										<table id="pnl_ingre" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Ing Descr E</th>
													<th>%</th>
													<th></th>
												</tr>
											</thead>
										</table>
										Total = <span class="badge badge-dark" id="ttlPercent">0</span> &#37;
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='two' style="display: none">
							<div class="card ml-2 col-10" style="background-color: gold;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Sustainability Indicators</span>
									</a>
								</header>
								<div class="collapse show" id="collapse12">
									<article class="card-body">
										<table class="table-bordered col-8">
											<tr>
												<th>Recovery</th>
												<td><span class="badge badge-light" id="recovery">0</span></td>
												<td>&#37;</td>
											</tr>
											<tr>
												<th>Feces Produced</th>
												<td><span class="badge badge-light" id="recovery">0</span></td>
												<td>g/kg feed fed</td>
											</tr>
											<tr>
												<th>Unrecovered-Feces</th>
												<td><span class="badge badge-light" id="recovery">0</span></td>
												<td>g/kg feed fed</td>
											</tr>
											<tr>
												<th>Nitrogen Produced</th>
												<td><span class="badge badge-light" id="recovery">0</span></td>
												<td>g/kg feed fed</td>
											</tr>
											<tr>
												<th>Phophorus Produced</th>
												<td><span class="badge badge-light" id="recovery">0</span></td>
												<td>g/kg feed fed</td>
											</tr>
										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='three' style="display: none">
							<div class="card col-10 ml-2" style="background-color: olivedrab;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Macro Nutrient Composition</span>
									</a>
								</header>
								<div class="collapse show" id="collapse13">
									<article class="card-body">
										<table class="table-bordered col-8">
											<tr>
												<th>Dry Matter</th>
												<td><span class="badge badge-light" id="drymatter">0</span> g/kg</td>
												<td><span class="badge badge-light" id="drymatter_std">0</span></td>
												<td>Max</td>
											</tr>
											<tr>
												<th>Crude Protein</th>
												<td><span class="badge badge-light" id="crudeprotein">0</span> g/kg</td>
												<td><span class="badge badge-light" id="crudeprotein_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Crude Fat</th>
												<td><span class="badge badge-light" id="crudefat">0</span> g/kg</td>
												<td><span class="badge badge-light" id="crudefat_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Crude Ash</th>
												<td><span class="badge badge-light" id="crudeash">0</span> g/kg</td>
												<td><span class="badge badge-light" id="crudeash_std">0</span></td>
												<td>Max</td>
											</tr>
											<tr>
												<th>Crude Fiber</th>
												<td><span class="badge badge-light" id="crudefiber">0</span> g/kg</td>
												<td><span class="badge badge-light" id="crudefiber_std">0</span></td>
												<td>Max</td>
											</tr>
											<tr>
												<th>Gross Energy</th>
												<td><span class="badge badge-light" id="grossenergy">0</span> MJ/kg</td>
												<td><span class="badge badge-light" id="grossenergy_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Starch</th>
												<td><span class="badge badge-light" id="starch">0</span> g/kg</td>
												<td><span class="badge badge-light" id="starch_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Total Carbohydrate</th>
												<td><span class="badge badge-light" id="carbohydrate">0</span> g/kg</td>
												<td><span class="badge badge-light" id="carbohydrate_std">0</span></td>
												<td>Min</td>
											</tr>
										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='four' style="display: none">
							<div class="card ml-2 col-10" style="background-color: chocolate;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Fiber</span>
									</a>
								</header>
								<div class="collapse show" id="collapse14">
									<article class="card-body">
										<table class="table-bordered col-7">
											<tr>
												<th>NDF</th>
												<td><span class="badge badge-light" id="NDF">0</span> g/kg</td>
												<td><span class="badge badge-light" id="NDF_std">0</span></td>
												<td>Max</td>
											</tr>
											<tr>
												<th>ADF</th>
												<td><span class="badge badge-light" id="ADF">0</span> g/kg</td>
												<td><span class="badge badge-light" id="ADF_std">0</span></td>
												<td>Max</td>
											</tr>
											<tr>
												<th>ADL</th>
												<td><span class="badge badge-light" id="ADL">0</span> g/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td></td>
											</tr>

										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='five' style="display: none">
							<div class="card col-10 ml-2" style="background-color: pink;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Aminoacids</span>
									</a>
								</header>
								<div class="collapse show" id="collapse15">
									<article class="card-body">
										<table class="table-bordered col-7">
											<tr>
												<th>Arginine</th>
												<td><span class="badge badge-light" id="arginine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="arginine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Histidine</th>
												<td><span class="badge badge-light" id="histidine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="histidine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Isoleucine</th>
												<td><span class="badge badge-light" id="isoleucine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="isoleucine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Leucine</th>
												<td><span class="badge badge-light" id="leucine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="leucine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Lysine</th>
												<td><span class="badge badge-light" id="lysine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="lysine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Methionine</th>
												<td><span class="badge badge-light" id="methionine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="methionine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Methionine+Cystine</th>
												<td><span class="badge badge-light" id="methionine_cystine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="methionine_cystine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Phenylalanine</th>
												<td><span class="badge badge-light" id="phenylalanine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="phenylalanine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Tryptophan</th>
												<td><span class="badge badge-light" id="tryptophan">0</span> g/kg</td>
												<td><span class="badge badge-light" id="tryptophan_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Valine</th>
												<td><span class="badge badge-light" id="valine">0</span> g/kg</td>
												<td><span class="badge badge-light" id="valine_std">0</span></td>
												<td>Min</td>
											</tr>

										</table>

									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='six' style="display: none">
							<div class="card ml-2 col-10" style="background-color: lightblue;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Fattyacids</span>
									</a>
								</header>
								<div class="collapse show" id="collapse16">
									<article class="card-body">
										<table class="table-bordered col-7">
											<tr>
												<th>Linoleic 18:2 n-6</th>
												<td><span class="badge badge-light" id="linoleic182N6">0</span> g/kg</td>
												<td><span class="badge badge-light" id="linoleic182N6_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Linolenic 18:3 n-3</th>
												<td><span class="badge badge-light" id="linolenic183N3">0</span> g/kg</td>
												<td><span class="badge badge-light" id="linolenic183N3_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>EPA 20:5 n-3</th>
												<td><span class="badge badge-light" id="ePA205N3">0</span> g/kg</td>
												<td><span class="badge badge-light" id="ePA205N3_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Arachidonic 20:4 n-6</th>
												<td><span class="badge badge-light" id="arachidonic204N6">0</span> g/kg</td>
												<td><span class="badge badge-light" id="arachidonic204N6_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>DHA 22:6 n-3</th>
												<td><span class="badge badge-light" id="dHA226N3">0</span> g/kg</td>
												<td><span class="badge badge-light" id="dHA226N3_std">0</span></td>
												<td>Min</td>
											</tr>
										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='seven' style="display: none">
							<div class="card ml-2 col-10" style="background-color: olive;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Vitamins & Minerals</span>
									</a>
								</header>
								<div class="collapse show" id="collapse17">
									<article class="card-body">
										<table class="table-bordered col-8">
											<tr>
												<th>Niacin-B3</th>
												<td><span class="badge badge-light" id="niacinB3">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="niacinB3_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Folic acid-B9</th>
												<td><span class="badge badge-light" id="folicAcidB9">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="folicAcidB9_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin E</th>
												<td><span class="badge badge-light" id="vitaminE">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="vitaminE_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Pantothenic Acid-B5</th>
												<td><span class="badge badge-light" id="pantothenicAcidB5">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="pantothenicAcidB5_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin B2</th>
												<td><span class="badge badge-light" id="ADL">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin C</th>
												<td><span class="badge badge-light" id="vitaminC">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="vitaminC_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin K</th>
												<td><span class="badge badge-light" id="ADL">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>VITAMIN B1</th>
												<td><span class="badge badge-light" id="ADL">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>VITAMIN B6</th>
												<td><span class="badge badge-light" id="ADL">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>VITAMIN D3</th>
												<td><span class="badge badge-light" id="ADL">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="ADL_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin A</th>
												<td><span class="badge badge-light" id="vitaminA">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="vitaminA_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Vitamin B12</th>
												<td><span class="badge badge-light" id="vitaminB12">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="vitaminB12_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Biotin-B7</th>
												<td><span class="badge badge-light" id="biotinB7">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="biotinB7_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<td colspan="4">&nbsp;</td>
											</tr>
											<tr>
												<th>Iron (Fe)</th>
												<td><span class="badge badge-light" id="iron">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="iron_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Copper (Cu)</th>
												<td><span class="badge badge-light" id="copper">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="copper_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Zinc (Zn)</th>
												<td><span class="badge badge-light" id="zinc">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="zinc_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Inositol </th>
												<td><span class="badge badge-light" id="inositol">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="inositol_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Selenium (Se)</th>
												<td><span class="badge badge-light" id="selenium">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="selenium_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Cobalt (Co)</th>
												<td><span class="badge badge-light" id="cobalt">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="cobalt_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Iodine (I)</th>
												<td><span class="badge badge-light" id="iodine">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="iodine_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Manganese (Mn)</th>
												<td><span class="badge badge-light" id="manganese">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="manganese_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Calcium (Ca)</th>
												<td><span class="badge badge-light" id="calcium">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="calcium_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Phosphorus (P)</th>
												<td><span class="badge badge-light" id="phosphorus">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="phosphorus_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Potassium (K)</th>
												<td><span class="badge badge-light" id="potassium">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="potassium_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>Sodium (Na)</th>
												<td><span class="badge badge-light" id="sodium">0</span> mg/kg</td>
												<td><span class="badge badge-light" id="sodium_std">0</span></td>
												<td>Min</td>
											</tr>
										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>
						</div>

						<div class='eight' style="display: none">
							<div class="card col-10 ml-2" style="background-color: lightgreen;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">Ratios</span>
									</a>
								</header>
								<div class="collapse show" id="collapse18">
									<article class="card-body">
										<table class="table-bordered col-7">
											<tr>
												<th>Protein/Energy</th>
												<td><span class="badge badge-light" id="PE">0</span> mg/KJ</td>
												<td><span class="badge badge-light" id="PE_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>E-Protein/E-Fat</th>
												<td><span class="badge badge-light" id="PF">0</span> g/kg</td>
												<td><span class="badge badge-light" id="PF_std">0</span></td>
												<td>Min</td>
											</tr>
											<tr>
												<th>CN Ratio</th>
												<td><span class="badge badge-light" id="CN">0</span> g/kg</td>
												<td><span class="badge badge-light" id="CN_std">0</span></td>
												<td>Min</td>
											</tr>
										</table>
									</article> <!-- card-body.// -->
								</div> <!-- collapse .// -->
							</div>

						</div>

						<div class='nine' style="display: none">
							<div class="card ml-2 col-10" style="background-color: yellow;">
								<header class="card-header bg-primary">
									<a href="#" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" class="">
										<i class="icon-action fa fa-chevron-down"></i>
										<span class="title">ADC</span>
									</a>
								</header>
								<div class="collapse show" id="collapse20">
									<article class="card-body">
										<table class="table-bordered col-7">
											<tr>
												<th>ADC-Dry Matter</th>
												<td><span class="badge badge-light" id="ADCDryMatter">0</span> mg/kg</td>
											</tr>
											<tr>
												<th>ADC-Protein</th>
												<td><span class="badge badge-light" id="ADCProtein">0</span> mg/kg</td>
											</tr>
											<tr>
												<th>ADC-Fat</th>
												<td><span class="badge badge-light" id="ADCFat">0</span> mg/kg</td>
											</tr>
											<tr>
												<th>ADC-Ash</th>
												<td><span class="badge badge-light" id="ADCAsh">0</span> mg/kg</td>
											</tr>
										</table>
									</article>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- <div class="row">					
				</div> -->

				<!-- <div class="row">					
				</div> -->

				<!-- <div class="row">
				</div> -->

				<!-- <div class="row">
				</div> -->
				<hr>
				<div class="form-inline ml-2">
					<input type="text" class="form-control col-4" placeholder="Name of Formula" id="percent" />
					<button type="button" class="btn btn-primary ml-2" onclick="saveFormula()" title="Save Formula"> <i class="fa fa-save"></i> Save Formula</button>
				</div>

			</section>

			<!-- Main content -->
			<section class="content">

				<!-- /.row -->
			</section>
			<!-- Add modal content -->
			<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="text-center bg-info p-3">
							<h4 class="modal-title text-white" id="info-header-modalLabel">Add</h4>
						</div>
						<div class="modal-body">
							<form id="add-form" class="pl-3 pr-3">
								<div class="row">
									<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="ingCode"> Ing Code: </label>
											<input type="number" id="ingCode" name="ingCode" class="form-control" placeholder="Ing Code" maxlength="5" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="ingDescrE"> Ing Descr E: </label>
											<input type="text" id="ingDescrE" name="ingDescrE" class="form-control" placeholder="Ing Descr E" maxlength="60">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dryMatter"> Dry Matter: </label>
											<input type="text" id="dryMatter" name="dryMatter" class="form-control" placeholder="Dry Matter">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="moisture"> Moisture: </label>
											<input type="text" id="moisture" name="moisture" class="form-control" placeholder="Moisture">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="crudeProtein"> Crude Protein: </label>
											<input type="text" id="crudeProtein" name="crudeProtein" class="form-control" placeholder="Crude Protein">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="crudeLipids"> Crude Lipids: </label>
											<input type="text" id="crudeLipids" name="crudeLipids" class="form-control" placeholder="Crude Lipids">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="crudeFibre"> Crude Fibre: </label>
											<input type="text" id="crudeFibre" name="crudeFibre" class="form-control" placeholder="Crude Fibre">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="ash"> Ash: </label>
											<input type="text" id="ash" name="ash" class="form-control" placeholder="Ash">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="nFE"> NFE: </label>
											<input type="text" id="nFE" name="nFE" class="form-control" placeholder="NFE">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="nDF"> NDF: </label>
											<input type="text" id="nDF" name="nDF" class="form-control" placeholder="NDF">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDF"> ADF: </label>
											<input type="text" id="aDF" name="aDF" class="form-control" placeholder="ADF">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="totalCHO"> Total CHO: </label>
											<input type="text" id="totalCHO" name="totalCHO" class="form-control" placeholder="Total CHO">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="starch"> Starch: </label>
											<input type="text" id="starch" name="starch" class="form-control" placeholder="Starch">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sugars"> Sugars: </label>
											<input type="text" id="sugars" name="sugars" class="form-control" placeholder="Sugars">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="grossEnergyMJ"> Gross Energy MJ: </label>
											<input type="text" id="grossEnergyMJ" name="grossEnergyMJ" class="form-control" placeholder="Gross Energy MJ">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="grossEnergyKcal"> Gross energy Kcal: </label>
											<input type="number" id="grossEnergyKcal" name="grossEnergyKcal" class="form-control" placeholder="Gross energy Kcal" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dEFishCarni"> DE Fish Carni: </label>
											<input type="number" id="dEFishCarni" name="dEFishCarni" class="form-control" placeholder="DE Fish Carni" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dEFishOmni"> DE Fish Omni: </label>
											<input type="number" id="dEFishOmni" name="dEFishOmni" class="form-control" placeholder="DE Fish Omni" maxlength="4" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="dECarp"> DE Carp: </label>
											<input type="number" id="dECarp" name="dECarp" class="form-control" placeholder="DE Carp" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dEShrimp"> DE Shrimp: </label>
											<input type="number" id="dEShrimp" name="dEShrimp" class="form-control" placeholder="DE Shrimp" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dEPorcine"> DE Porcine: </label>
											<input type="text" id="dEPorcine" name="dEPorcine" class="form-control" placeholder="DE Porcine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="dEPoultry"> DE Poultry: </label>
											<input type="text" id="dEPoultry" name="dEPoultry" class="form-control" placeholder="DE Poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEFish"> ME Fish: </label>
											<input type="number" id="mEFish" name="mEFish" class="form-control" placeholder="ME Fish" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEGuelphFishCarni"> ME Guelph Fish Carni: </label>
											<input type="text" id="mEGuelphFishCarni" name="mEGuelphFishCarni" class="form-control" placeholder="ME Guelph Fish Carni">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEGuelphFishOmni"> ME Guelph Fish Omni: </label>
											<input type="text" id="mEGuelphFishOmni" name="mEGuelphFishOmni" class="form-control" placeholder="ME Guelph Fish Omni">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEGuelphCarp"> ME Guelph Carp: </label>
											<input type="text" id="mEGuelphCarp" name="mEGuelphCarp" class="form-control" placeholder="ME Guelph Carp">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEGuelphShrimp"> ME Guelph Shrimp: </label>
											<input type="text" id="mEGuelphShrimp" name="mEGuelphShrimp" class="form-control" placeholder="ME Guelph Shrimp">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEPoultry"> ME Poultry: </label>
											<input type="text" id="mEPoultry" name="mEPoultry" class="form-control" placeholder="ME Poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="mEPorcine"> ME Porcine: </label>
											<input type="text" id="mEPorcine" name="mEPorcine" class="form-control" placeholder="ME Porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="arginine"> Arginine: </label>
											<input type="text" id="arginine" name="arginine" class="form-control" placeholder="Arginine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="histidine"> Histidine: </label>
											<input type="text" id="histidine" name="histidine" class="form-control" placeholder="Histidine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="isoleucine"> Isoleucine: </label>
											<input type="text" id="isoleucine" name="isoleucine" class="form-control" placeholder="Isoleucine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="leucine"> Leucine: </label>
											<input type="text" id="leucine" name="leucine" class="form-control" placeholder="Leucine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="lysine"> Lysine: </label>
											<input type="text" id="lysine" name="lysine" class="form-control" placeholder="Lysine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="methionine"> Methionine: </label>
											<input type="text" id="methionine" name="methionine" class="form-control" placeholder="Methionine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="phenylalanine"> Phenylalanine: </label>
											<input type="text" id="phenylalanine" name="phenylalanine" class="form-control" placeholder="Phenylalanine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="threonine"> Threonine: </label>
											<input type="text" id="threonine" name="threonine" class="form-control" placeholder="Threonine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="tryptophan"> Tryptophan: </label>
											<input type="text" id="tryptophan" name="tryptophan" class="form-control" placeholder="Tryptophan">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="valine"> Valine: </label>
											<input type="text" id="valine" name="valine" class="form-control" placeholder="Valine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="cystine"> Cystine: </label>
											<input type="text" id="cystine" name="cystine" class="form-control" placeholder="Cystine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="tSAAMetCys"> TSAA Met Cys: </label>
											<input type="text" id="tSAAMetCys" name="tSAAMetCys" class="form-control" placeholder="TSAA Met Cys">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="tyrosine"> Tyrosine: </label>
											<input type="text" id="tyrosine" name="tyrosine" class="form-control" placeholder="Tyrosine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="pheTyr"> Phe Tyr: </label>
											<input type="text" id="pheTyr" name="pheTyr" class="form-control" placeholder="Phe Tyr">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="glutamic"> Glutamic: </label>
											<input type="text" id="glutamic" name="glutamic" class="form-control" placeholder="Glutamic">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aspartic"> Aspartic: </label>
											<input type="text" id="aspartic" name="aspartic" class="form-control" placeholder="Aspartic">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="glycine"> Glycine: </label>
											<input type="text" id="glycine" name="glycine" class="form-control" placeholder="Glycine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="serine"> Serine: </label>
											<input type="text" id="serine" name="serine" class="form-control" placeholder="Serine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="alanine"> Alanine: </label>
											<input type="text" id="alanine" name="alanine" class="form-control" placeholder="Alanine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sumEAAs"> Sum EAAs: </label>
											<input type="text" id="sumEAAs" name="sumEAAs" class="form-control" placeholder="Sum EAAs">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sumNEAAs"> Sum NEAAs: </label>
											<input type="text" id="sumNEAAs" name="sumNEAAs" class="form-control" placeholder="Sum NEAAs">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="taurine"> Taurine: </label>
											<input type="text" id="taurine" name="taurine" class="form-control" placeholder="Taurine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="argCoeff"> Arg Coeff: </label>
											<input type="text" id="argCoeff" name="argCoeff" class="form-control" placeholder="Arg Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="hisCoeff"> His Coeff: </label>
											<input type="text" id="hisCoeff" name="hisCoeff" class="form-control" placeholder="His Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="ileCoeff"> Ile Coeff: </label>
											<input type="text" id="ileCoeff" name="ileCoeff" class="form-control" placeholder="Ile Coeff">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="leuCoeff"> Leu Coeff: </label>
											<input type="text" id="leuCoeff" name="leuCoeff" class="form-control" placeholder="Leu Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="lysCoeff"> Lys Coeff: </label>
											<input type="text" id="lysCoeff" name="lysCoeff" class="form-control" placeholder="Lys Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="metCoeff"> Met Coeff: </label>
											<input type="text" id="metCoeff" name="metCoeff" class="form-control" placeholder="Met Coeff">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="pheCoeff"> Phe Coeff: </label>
											<input type="text" id="pheCoeff" name="pheCoeff" class="form-control" placeholder="Phe Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="thrCoeff"> Thr Coeff: </label>
											<input type="text" id="thrCoeff" name="thrCoeff" class="form-control" placeholder="Thr Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="trpCoeff"> Trp Coeff: </label>
											<input type="text" id="trpCoeff" name="trpCoeff" class="form-control" placeholder="Trp Coeff">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="valCoeff"> Val Coeff: </label>
											<input type="text" id="valCoeff" name="valCoeff" class="form-control" placeholder="Val Coeff">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digArgFish"> Dig Arg fish: </label>
											<input type="text" id="digArgFish" name="digArgFish" class="form-control" placeholder="Dig Arg fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digHisFish"> Dig His fish: </label>
											<input type="text" id="digHisFish" name="digHisFish" class="form-control" placeholder="Dig His fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digIleFish"> Dig Ile fish: </label>
											<input type="text" id="digIleFish" name="digIleFish" class="form-control" placeholder="Dig Ile fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digLeuFish"> Dig Leu fish: </label>
											<input type="text" id="digLeuFish" name="digLeuFish" class="form-control" placeholder="Dig Leu fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digLysFish"> Dig Lys fish: </label>
											<input type="text" id="digLysFish" name="digLysFish" class="form-control" placeholder="Dig Lys fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digMetFish"> Dig Met fish: </label>
											<input type="text" id="digMetFish" name="digMetFish" class="form-control" placeholder="Dig Met fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digPheFish"> Dig Phe fish: </label>
											<input type="text" id="digPheFish" name="digPheFish" class="form-control" placeholder="Dig Phe fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digThrFish"> Dig Thr fish: </label>
											<input type="text" id="digThrFish" name="digThrFish" class="form-control" placeholder="Dig Thr fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digTrpFish"> Dig Trp fish: </label>
											<input type="text" id="digTrpFish" name="digTrpFish" class="form-control" placeholder="Dig Trp fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digValFish"> Dig Val fish: </label>
											<input type="text" id="digValFish" name="digValFish" class="form-control" placeholder="Dig Val fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digCysFish"> Dig Cys fish: </label>
											<input type="text" id="digCysFish" name="digCysFish" class="form-control" placeholder="Dig Cys fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digTSAAMetCys"> Dig TSAA Met Cys: </label>
											<input type="text" id="digTSAAMetCys" name="digTSAAMetCys" class="form-control" placeholder="Dig TSAA Met Cys">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digTyrFish"> Dig Tyr fish: </label>
											<input type="text" id="digTyrFish" name="digTyrFish" class="form-control" placeholder="Dig Tyr fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="calcium"> Calcium: </label>
											<input type="text" id="calcium" name="calcium" class="form-control" placeholder="Calcium">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="phosphorus"> Phosphorus: </label>
											<input type="text" id="phosphorus" name="phosphorus" class="form-control" placeholder="Phosphorus">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="caCoeff"> Ca Coeff: </label>
											<input type="number" id="caCoeff" name="caCoeff" class="form-control" placeholder="Ca Coeff" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="pCoeff"> P coeff: </label>
											<input type="number" id="pCoeff" name="pCoeff" class="form-control" placeholder="P coeff" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="phytateP"> Phytate P: </label>
											<input type="text" id="phytateP" name="phytateP" class="form-control" placeholder="Phytate P">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="boneP"> Bone P: </label>
											<input type="text" id="boneP" name="boneP" class="form-control" placeholder="Bone P">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="cellularP"> Cellular P: </label>
											<input type="text" id="cellularP" name="cellularP" class="form-control" placeholder="Cellular P">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="monobasicP"> Monobasic P: </label>
											<input type="text" id="monobasicP" name="monobasicP" class="form-control" placeholder="Monobasic P">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dibasicP"> Dibasic P: </label>
											<input type="text" id="dibasicP" name="dibasicP" class="form-control" placeholder="Dibasic P">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="tribasicP"> Tribasic P: </label>
											<input type="text" id="tribasicP" name="tribasicP" class="form-control" placeholder="Tribasic P">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digPCarni"> Dig P Carni: </label>
											<input type="text" id="digPCarni" name="digPCarni" class="form-control" placeholder="Dig P Carni">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digPOmni"> Dig P Omni: </label>
											<input type="text" id="digPOmni" name="digPOmni" class="form-control" placeholder="Dig P Omni">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digPCarp"> Dig P Carp: </label>
											<input type="text" id="digPCarp" name="digPCarp" class="form-control" placeholder="Dig P Carp">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digPShrimp"> Dig P Shrimp: </label>
											<input type="text" id="digPShrimp" name="digPShrimp" class="form-control" placeholder="Dig P Shrimp">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sodium"> Sodium: </label>
											<input type="text" id="sodium" name="sodium" class="form-control" placeholder="Sodium">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="chlorine"> Chlorine: </label>
											<input type="text" id="chlorine" name="chlorine" class="form-control" placeholder="Chlorine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="potassium"> Potassium: </label>
											<input type="text" id="potassium" name="potassium" class="form-control" placeholder="Potassium">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="magnesium"> Magnesium: </label>
											<input type="text" id="magnesium" name="magnesium" class="form-control" placeholder="Magnesium">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sulfur"> Sulfur: </label>
											<input type="text" id="sulfur" name="sulfur" class="form-control" placeholder="Sulfur">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="copper"> Copper: </label>
											<input type="text" id="copper" name="copper" class="form-control" placeholder="Copper">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="iron"> Iron: </label>
											<input type="text" id="iron" name="iron" class="form-control" placeholder="Iron">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="manganese"> Manganese: </label>
											<input type="text" id="manganese" name="manganese" class="form-control" placeholder="Manganese">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="selenium"> Selenium: </label>
											<input type="text" id="selenium" name="selenium" class="form-control" placeholder="Selenium">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="zinc"> Zinc: </label>
											<input type="text" id="zinc" name="zinc" class="form-control" placeholder="Zinc">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="iodine"> Iodine: </label>
											<input type="text" id="iodine" name="iodine" class="form-control" placeholder="Iodine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="cobalt"> Cobalt: </label>
											<input type="text" id="cobalt" name="cobalt" class="form-control" placeholder="Cobalt">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="biotinB7"> Biotin B7: </label>
											<input type="text" id="biotinB7" name="biotinB7" class="form-control" placeholder="Biotin B7">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="folicAcidB9"> Folic acid B9: </label>
											<input type="text" id="folicAcidB9" name="folicAcidB9" class="form-control" placeholder="Folic acid B9">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="niacinB3"> Niacin B3: </label>
											<input type="text" id="niacinB3" name="niacinB3" class="form-control" placeholder="Niacin B3">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="pantothenicAcidB5"> Pantothenic Acid B5: </label>
											<input type="text" id="pantothenicAcidB5" name="pantothenicAcidB5" class="form-control" placeholder="Pantothenic Acid B5">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="pyridoxineB6"> Pyridoxine B6: </label>
											<input type="text" id="pyridoxineB6" name="pyridoxineB6" class="form-control" placeholder="Pyridoxine B6">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="riboflavinB2"> Riboflavin B2: </label>
											<input type="text" id="riboflavinB2" name="riboflavinB2" class="form-control" placeholder="Riboflavin B2">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="thiaminB1"> Thiamin B1: </label>
											<input type="text" id="thiaminB1" name="thiaminB1" class="form-control" placeholder="Thiamin B1">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminB12"> Vitamin B12: </label>
											<input type="text" id="vitaminB12" name="vitaminB12" class="form-control" placeholder="Vitamin B12">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminC"> Vitamin C: </label>
											<input type="text" id="vitaminC" name="vitaminC" class="form-control" placeholder="Vitamin C">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminA"> Vitamin A: </label>
											<input type="text" id="vitaminA" name="vitaminA" class="form-control" placeholder="Vitamin A">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminD"> Vitamin D: </label>
											<input type="text" id="vitaminD" name="vitaminD" class="form-control" placeholder="Vitamin D">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminE"> Vitamin E: </label>
											<input type="text" id="vitaminE" name="vitaminE" class="form-control" placeholder="Vitamin E">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="vitaminK"> Vitamin K: </label>
											<input type="text" id="vitaminK" name="vitaminK" class="form-control" placeholder="Vitamin K">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="choline"> Choline: </label>
											<input type="text" id="choline" name="choline" class="form-control" placeholder="Choline">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="inositol"> Inositol: </label>
											<input type="text" id="inositol" name="inositol" class="form-control" placeholder="Inositol">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="betaCarotene"> Beta Carotene: </label>
											<input type="text" id="betaCarotene" name="betaCarotene" class="form-control" placeholder="Beta Carotene">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="xanthophylls"> Xanthophylls: </label>
											<input type="number" id="xanthophylls" name="xanthophylls" class="form-control" placeholder="Xanthophylls" maxlength="4" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="antioxidant"> Antioxidant: </label>
											<input type="text" id="antioxidant" name="antioxidant" class="form-control" placeholder="Antioxidant">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCDMFish"> ADC DM fish: </label>
											<input type="number" id="aDCDMFish" name="aDCDMFish" class="form-control" placeholder="ADC DM fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCCPFish"> ADC CP fish: </label>
											<input type="number" id="aDCCPFish" name="aDCCPFish" class="form-control" placeholder="ADC CP fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCLipidFish"> ADC Lipid fish: </label>
											<input type="number" id="aDCLipidFish" name="aDCLipidFish" class="form-control" placeholder="ADC Lipid fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCGEFish"> ADC GE fish: </label>
											<input type="number" id="aDCGEFish" name="aDCGEFish" class="form-control" placeholder="ADC GE fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCTotalCHOFish"> ADC Total CHO fish: </label>
											<input type="number" id="aDCTotalCHOFish" name="aDCTotalCHOFish" class="form-control" placeholder="ADC Total CHO fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCStarchFish"> ADC Starch fish: </label>
											<input type="number" id="aDCStarchFish" name="aDCStarchFish" class="form-control" placeholder="ADC Starch fish" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCStarchCarni"> ADC Starch Carni: </label>
											<input type="number" id="aDCStarchCarni" name="aDCStarchCarni" class="form-control" placeholder="ADC Starch Carni" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCStarchOmni"> ADC Starch Omni: </label>
											<input type="number" id="aDCStarchOmni" name="aDCStarchOmni" class="form-control" placeholder="ADC Starch Omni" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digDMFish"> Dig DM fish: </label>
											<input type="text" id="digDMFish" name="digDMFish" class="form-control" placeholder="Dig DM fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digCPFish"> Dig CP fish: </label>
											<input type="text" id="digCPFish" name="digCPFish" class="form-control" placeholder="Dig CP fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digLipidFish"> Dig Lipid fish: </label>
											<input type="text" id="digLipidFish" name="digLipidFish" class="form-control" placeholder="Dig Lipid fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digGEDEFishKcal"> Dig GE DE fish Kcal: </label>
											<input type="number" id="digGEDEFishKcal" name="digGEDEFishKcal" class="form-control" placeholder="Dig GE DE fish Kcal" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digTotalCHOFish"> Dig Total CHO fish: </label>
											<input type="text" id="digTotalCHOFish" name="digTotalCHOFish" class="form-control" placeholder="Dig Total CHO fish">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digStarchFish"> Dig Starch fish: </label>
											<input type="text" id="digStarchFish" name="digStarchFish" class="form-control" placeholder="Dig Starch fish">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="digStarchCarni"> Dig Starch carni: </label>
											<input type="text" id="digStarchCarni" name="digStarchCarni" class="form-control" placeholder="Dig Starch carni">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="digStarchOmni"> Dig Starch Omni: </label>
											<input type="text" id="digStarchOmni" name="digStarchOmni" class="form-control" placeholder="Dig Starch Omni">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCArgFish"> ADC Arg fish: </label>
											<input type="number" id="aDCArgFish" name="aDCArgFish" class="form-control" placeholder="ADC Arg fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCHisFish"> ADC His fish: </label>
											<input type="number" id="aDCHisFish" name="aDCHisFish" class="form-control" placeholder="ADC His fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCIleFish"> ADC Ile fish: </label>
											<input type="number" id="aDCIleFish" name="aDCIleFish" class="form-control" placeholder="ADC Ile fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCLeuFish"> ADC Leu fish: </label>
											<input type="number" id="aDCLeuFish" name="aDCLeuFish" class="form-control" placeholder="ADC Leu fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCLysFish"> ADC Lys fish: </label>
											<input type="number" id="aDCLysFish" name="aDCLysFish" class="form-control" placeholder="ADC Lys fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCMetFish"> ADC Met fish: </label>
											<input type="number" id="aDCMetFish" name="aDCMetFish" class="form-control" placeholder="ADC Met fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCPheFish"> ADC Phe fish: </label>
											<input type="number" id="aDCPheFish" name="aDCPheFish" class="form-control" placeholder="ADC Phe fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCThrFish"> ADC Thr fish: </label>
											<input type="number" id="aDCThrFish" name="aDCThrFish" class="form-control" placeholder="ADC Thr fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCTrpFish"> ADC Trp fish: </label>
											<input type="number" id="aDCTrpFish" name="aDCTrpFish" class="form-control" placeholder="ADC Trp fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCValFish"> ADC Val fish: </label>
											<input type="number" id="aDCValFish" name="aDCValFish" class="form-control" placeholder="ADC Val fish" maxlength="3" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCCysFish"> ADC Cys fish: </label>
											<input type="number" id="aDCCysFish" name="aDCCysFish" class="form-control" placeholder="ADC Cys fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="aDCTyrFish"> ADC Tyr fish: </label>
											<input type="number" id="aDCTyrFish" name="aDCTyrFish" class="form-control" placeholder="ADC Tyr fish" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="palmitic160"> Palmitic 16 0: </label>
											<input type="text" id="palmitic160" name="palmitic160" class="form-control" placeholder="Palmitic 16 0">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="stearic180"> Stearic 18 0: </label>
											<input type="text" id="stearic180" name="stearic180" class="form-control" placeholder="Stearic 18 0">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="oleic181N9"> Oleic 18 1 n 9: </label>
											<input type="text" id="oleic181N9" name="oleic181N9" class="form-control" placeholder="Oleic 18 1 n 9">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="linoleic182N6"> Linoleic 18 2 n 6: </label>
											<input type="text" id="linoleic182N6" name="linoleic182N6" class="form-control" placeholder="Linoleic 18 2 n 6">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="linolenic183N3"> Linolenic 18 3 n 3: </label>
											<input type="text" id="linolenic183N3" name="linolenic183N3" class="form-control" placeholder="Linolenic 18 3 n 3">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="arachidonic204N6"> Arachidonic 20 4 n 6: </label>
											<input type="text" id="arachidonic204N6" name="arachidonic204N6" class="form-control" placeholder="Arachidonic 20 4 n 6">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="ePA205N3"> EPA 20 5 n 3: </label>
											<input type="text" id="ePA205N3" name="ePA205N3" class="form-control" placeholder="EPA 20 5 n 3">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="dHA226N3"> DHA 22 6 n 3: </label>
											<input type="text" id="dHA226N3" name="dHA226N3" class="form-control" placeholder="DHA 22 6 n 3">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="ePADHA"> EPA DHA: </label>
											<input type="text" id="ePADHA" name="ePADHA" class="form-control" placeholder="EPA DHA">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sAFA"> SAFA: </label>
											<input type="text" id="sAFA" name="sAFA" class="form-control" placeholder="SAFA">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="mUFA"> MUFA: </label>
											<input type="text" id="mUFA" name="mUFA" class="form-control" placeholder="MUFA">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="pUFA"> PUFA: </label>
											<input type="text" id="pUFA" name="pUFA" class="form-control" placeholder="PUFA">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sumN3"> Sum n 3: </label>
											<input type="text" id="sumN3" name="sumN3" class="form-control" placeholder="Sum n 3">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sumN6"> Sum n 6: </label>
											<input type="text" id="sumN6" name="sumN6" class="form-control" placeholder="Sum n 6">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="phospholipids"> Phospholipids: </label>
											<input type="text" id="phospholipids" name="phospholipids" class="form-control" placeholder="Phospholipids">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="cholesterol"> Cholesterol: </label>
											<input type="number" id="cholesterol" name="cholesterol" class="form-control" placeholder="Cholesterol" maxlength="5" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="plantSterols"> Plant sterols: </label>
											<input type="number" id="plantSterols" name="plantSterols" class="form-control" placeholder="Plant sterols" maxlength="5" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeff182N6"> Coeff 18 2 n 6: </label>
											<input type="text" id="coeff182N6" name="coeff182N6" class="form-control" placeholder="Coeff 18 2 n 6">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeff183N3"> Coeff 18 3 n 3: </label>
											<input type="text" id="coeff183N3" name="coeff183N3" class="form-control" placeholder="Coeff 18 3 n 3">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeff204N6"> Coeff 20 4 n 6: </label>
											<input type="text" id="coeff204N6" name="coeff204N6" class="form-control" placeholder="Coeff 20 4 n 6">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeff205N3"> Coeff 20 5 n 3: </label>
											<input type="text" id="coeff205N3" name="coeff205N3" class="form-control" placeholder="Coeff 20 5 n 3">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeff226N3"> Coeff 22 6 n 3: </label>
											<input type="text" id="coeff226N3" name="coeff226N3" class="form-control" placeholder="Coeff 22 6 n 3">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeffSAFA"> Coeff SAFA: </label>
											<input type="text" id="coeffSAFA" name="coeffSAFA" class="form-control" placeholder="Coeff SAFA">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeffMUFA"> Coeff MUFA: </label>
											<input type="text" id="coeffMUFA" name="coeffMUFA" class="form-control" placeholder="Coeff MUFA">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="coeffPUFA"> Coeff PUFA: </label>
											<input type="text" id="coeffPUFA" name="coeffPUFA" class="form-control" placeholder="Coeff PUFA">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="aflatoxinB"> Aflatoxin B: </label>
											<input type="text" id="aflatoxinB" name="aflatoxinB" class="form-control" placeholder="Aflatoxin B">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="deoxynivalenolDON"> Deoxynivalenol DON: </label>
											<input type="number" id="deoxynivalenolDON" name="deoxynivalenolDON" class="form-control" placeholder="Deoxynivalenol DON" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="zeralenoneZON"> Zeralenone ZON: </label>
											<input type="text" id="zeralenoneZON" name="zeralenoneZON" class="form-control" placeholder="Zeralenone ZON">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="fumonicinFUM"> Fumonicin FUM: </label>
											<input type="number" id="fumonicinFUM" name="fumonicinFUM" class="form-control" placeholder="Fumonicin FUM" maxlength="4" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="antiTrypsicFactors"> Anti trypsic factors: </label>
											<input type="text" id="antiTrypsicFactors" name="antiTrypsicFactors" class="form-control" placeholder="Anti trypsic factors">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="gossypol"> Gossypol: </label>
											<input type="text" id="gossypol" name="gossypol" class="form-control" placeholder="Gossypol">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="phyticAcid"> Phytic Acid: </label>
											<input type="text" id="phyticAcid" name="phyticAcid" class="form-control" placeholder="Phytic Acid">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="glucosinolates"> Glucosinolates: </label>
											<input type="text" id="glucosinolates" name="glucosinolates" class="form-control" placeholder="Glucosinolates">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sinapine"> Sinapine: </label>
											<input type="text" id="sinapine" name="sinapine" class="form-control" placeholder="Sinapine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="tannins"> Tannins: </label>
											<input type="text" id="tannins" name="tannins" class="form-control" placeholder="Tannins">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="lectins"> Lectins: </label>
											<input type="text" id="lectins" name="lectins" class="form-control" placeholder="Lectins">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="cyanogens"> Cyanogens: </label>
											<input type="text" id="cyanogens" name="cyanogens" class="form-control" placeholder="Cyanogens">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="pCBs"> PCBs: </label>
											<input type="text" id="pCBs" name="pCBs" class="form-control" placeholder="PCBs">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="dioxins"> Dioxins: </label>
											<input type="text" id="dioxins" name="dioxins" class="form-control" placeholder="Dioxins">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="soyasaponins"> Soyasaponins: </label>
											<input type="text" id="soyasaponins" name="soyasaponins" class="form-control" placeholder="Soyasaponins">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="isoflavones"> Isoflavones: </label>
											<input type="text" id="isoflavones" name="isoflavones" class="form-control" placeholder="Isoflavones">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCDMPorcine"> SIDC DM porcine: </label>
											<input type="number" id="sIDCDMPorcine" name="sIDCDMPorcine" class="form-control" placeholder="SIDC DM porcine" maxlength="3" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCCPPorcine"> SIDC CP porcine: </label>
											<input type="number" id="sIDCCPPorcine" name="sIDCCPPorcine" class="form-control" placeholder="SIDC CP porcine" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCArgPorcine"> SIDC Arg porcine: </label>
											<input type="number" id="sIDCArgPorcine" name="sIDCArgPorcine" class="form-control" placeholder="SIDC Arg porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCHisPorcine"> SIDC His porcine: </label>
											<input type="number" id="sIDCHisPorcine" name="sIDCHisPorcine" class="form-control" placeholder="SIDC His porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCIlePorcine"> SIDC Ile porcine: </label>
											<input type="number" id="sIDCIlePorcine" name="sIDCIlePorcine" class="form-control" placeholder="SIDC Ile porcine" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCLeuPorcine"> SIDC Leu porcine: </label>
											<input type="number" id="sIDCLeuPorcine" name="sIDCLeuPorcine" class="form-control" placeholder="SIDC Leu porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCLysPorcine"> SIDC Lys porcine: </label>
											<input type="number" id="sIDCLysPorcine" name="sIDCLysPorcine" class="form-control" placeholder="SIDC Lys porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCMetPorcine"> SIDC Met porcine: </label>
											<input type="number" id="sIDCMetPorcine" name="sIDCMetPorcine" class="form-control" placeholder="SIDC Met porcine" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCPhePorcine"> SIDC Phe porcine: </label>
											<input type="number" id="sIDCPhePorcine" name="sIDCPhePorcine" class="form-control" placeholder="SIDC Phe porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCThrPorcine"> SIDC Thr porcine: </label>
											<input type="number" id="sIDCThrPorcine" name="sIDCThrPorcine" class="form-control" placeholder="SIDC Thr porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCTrpPorcine"> SIDC Trp porcine: </label>
											<input type="number" id="sIDCTrpPorcine" name="sIDCTrpPorcine" class="form-control" placeholder="SIDC Trp porcine" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCValPorcine"> SIDC Val porcine: </label>
											<input type="number" id="sIDCValPorcine" name="sIDCValPorcine" class="form-control" placeholder="SIDC Val porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCCysPorcine"> SIDC Cys porcine: </label>
											<input type="number" id="sIDCCysPorcine" name="sIDCCysPorcine" class="form-control" placeholder="SIDC Cys porcine" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCTyrPorcine"> SIDC Tyr porcine: </label>
											<input type="number" id="sIDCTyrPorcine" name="sIDCTyrPorcine" class="form-control" placeholder="SIDC Tyr porcine" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCDMPoultry"> SIDC DM poultry: </label>
											<input type="number" id="sIDCDMPoultry" name="sIDCDMPoultry" class="form-control" placeholder="SIDC DM poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCCPPoultry"> SIDC CP poultry: </label>
											<input type="number" id="sIDCCPPoultry" name="sIDCCPPoultry" class="form-control" placeholder="SIDC CP poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCArgPoultry"> SIDC Arg poultry: </label>
											<input type="number" id="sIDCArgPoultry" name="sIDCArgPoultry" class="form-control" placeholder="SIDC Arg poultry" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCHisPoultry"> SIDC His poultry: </label>
											<input type="number" id="sIDCHisPoultry" name="sIDCHisPoultry" class="form-control" placeholder="SIDC His poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCIlePoultry"> SIDC Ile poultry: </label>
											<input type="number" id="sIDCIlePoultry" name="sIDCIlePoultry" class="form-control" placeholder="SIDC Ile poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCLeuPoultry"> SIDC Leu poultry: </label>
											<input type="number" id="sIDCLeuPoultry" name="sIDCLeuPoultry" class="form-control" placeholder="SIDC Leu poultry" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCLysPoultry"> SIDC Lys poultry: </label>
											<input type="number" id="sIDCLysPoultry" name="sIDCLysPoultry" class="form-control" placeholder="SIDC Lys poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCMetPoultry"> SIDC Met poultry: </label>
											<input type="number" id="sIDCMetPoultry" name="sIDCMetPoultry" class="form-control" placeholder="SIDC Met poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCPhePoultry"> SIDC Phe poultry: </label>
											<input type="number" id="sIDCPhePoultry" name="sIDCPhePoultry" class="form-control" placeholder="SIDC Phe poultry" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCThrPoultry"> SIDC Thr poultry: </label>
											<input type="number" id="sIDCThrPoultry" name="sIDCThrPoultry" class="form-control" placeholder="SIDC Thr poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCTrpPoultry"> SIDC Trp poultry: </label>
											<input type="number" id="sIDCTrpPoultry" name="sIDCTrpPoultry" class="form-control" placeholder="SIDC Trp poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCValPoultry"> SIDC Val poultry: </label>
											<input type="number" id="sIDCValPoultry" name="sIDCValPoultry" class="form-control" placeholder="SIDC Val poultry" maxlength="2" number="true">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCCysPoultry"> SIDC Cys poultry: </label>
											<input type="number" id="sIDCCysPoultry" name="sIDCCysPoultry" class="form-control" placeholder="SIDC Cys poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCTyrPoultry"> SIDC Tyr poultry: </label>
											<input type="number" id="sIDCTyrPoultry" name="sIDCTyrPoultry" class="form-control" placeholder="SIDC Tyr poultry" maxlength="2" number="true">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDArgPorcine"> SID Arg porcine: </label>
											<input type="text" id="sIDArgPorcine" name="sIDArgPorcine" class="form-control" placeholder="SID Arg porcine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDHisPorcine"> SID His porcine: </label>
											<input type="text" id="sIDHisPorcine" name="sIDHisPorcine" class="form-control" placeholder="SID His porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDIlePorcine"> SID Ile porcine: </label>
											<input type="text" id="sIDIlePorcine" name="sIDIlePorcine" class="form-control" placeholder="SID Ile porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDLeuPorcine"> SID Leu porcine: </label>
											<input type="text" id="sIDLeuPorcine" name="sIDLeuPorcine" class="form-control" placeholder="SID Leu porcine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDLysPorcine"> SID Lys porcine: </label>
											<input type="text" id="sIDLysPorcine" name="sIDLysPorcine" class="form-control" placeholder="SID Lys porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDMetPorcine"> SID Met porcine: </label>
											<input type="text" id="sIDMetPorcine" name="sIDMetPorcine" class="form-control" placeholder="SID Met porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDPhePorcine"> SID Phe porcine: </label>
											<input type="text" id="sIDPhePorcine" name="sIDPhePorcine" class="form-control" placeholder="SID Phe porcine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDThrPorcine"> SID Thr porcine: </label>
											<input type="text" id="sIDThrPorcine" name="sIDThrPorcine" class="form-control" placeholder="SID Thr porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDTrpPorcine"> SID Trp porcine: </label>
											<input type="text" id="sIDTrpPorcine" name="sIDTrpPorcine" class="form-control" placeholder="SID Trp porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDValPorcine"> SID Val porcine: </label>
											<input type="text" id="sIDValPorcine" name="sIDValPorcine" class="form-control" placeholder="SID Val porcine">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCysPorcine"> SID Cys porcine: </label>
											<input type="text" id="sIDCysPorcine" name="sIDCysPorcine" class="form-control" placeholder="SID Cys porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDTyrPorcine"> SID Tyr porcine: </label>
											<input type="text" id="sIDTyrPorcine" name="sIDTyrPorcine" class="form-control" placeholder="SID Tyr porcine">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDArgPoultry"> SID Arg poultry: </label>
											<input type="text" id="sIDArgPoultry" name="sIDArgPoultry" class="form-control" placeholder="SID Arg poultry">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDHisPoultry"> SID His poultry: </label>
											<input type="text" id="sIDHisPoultry" name="sIDHisPoultry" class="form-control" placeholder="SID His poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDIlePoultry"> SID Ile poultry: </label>
											<input type="text" id="sIDIlePoultry" name="sIDIlePoultry" class="form-control" placeholder="SID Ile poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDLeuPoultry"> SID Leu poultry: </label>
											<input type="text" id="sIDLeuPoultry" name="sIDLeuPoultry" class="form-control" placeholder="SID Leu poultry">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDLysPoultry"> SID Lys poultry: </label>
											<input type="text" id="sIDLysPoultry" name="sIDLysPoultry" class="form-control" placeholder="SID Lys poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDMetPoultry"> SID Met poultry: </label>
											<input type="text" id="sIDMetPoultry" name="sIDMetPoultry" class="form-control" placeholder="SID Met poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDPhePoultry"> SID Phe poultry: </label>
											<input type="text" id="sIDPhePoultry" name="sIDPhePoultry" class="form-control" placeholder="SID Phe poultry">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDThrPoultry"> SID Thr poultry: </label>
											<input type="text" id="sIDThrPoultry" name="sIDThrPoultry" class="form-control" placeholder="SID Thr poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDTrpPoultry"> SID Trp poultry: </label>
											<input type="text" id="sIDTrpPoultry" name="sIDTrpPoultry" class="form-control" placeholder="SID Trp poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDValPoultry"> SID Val poultry: </label>
											<input type="text" id="sIDValPoultry" name="sIDValPoultry" class="form-control" placeholder="SID Val poultry">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDCysPoultry"> SID Cys poultry: </label>
											<input type="text" id="sIDCysPoultry" name="sIDCysPoultry" class="form-control" placeholder="SID Cys poultry">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="sIDTyrPoultry"> SID Tyr poultry: </label>
											<input type="text" id="sIDTyrPoultry" name="sIDTyrPoultry" class="form-control" placeholder="SID Tyr poultry">
										</div>
									</div>
								</div>

								<div class="form-group text-center">
									<div class="btn-group">
										<button type="submit" class="btn btn-success" id="add-form-btn">Add</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<!-- Add modal content -->
			<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="text-center bg-info p-3">
							<h4 class="modal-title text-white" id="info-header-modalLabel">Update</h4>
						</div>
						<div class="modal-body">
							<form id="edit-form" class="pl-3 pr-3">
								<div class="row">
									<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="ingDescrE"> Ing Descr E: </label>
											<input type="text" id="ingDescrE" name="ingDescrE" class="form-control" placeholder="Ing Descr E" maxlength="60" readonly>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="percent"> Percent: </label>
											<input type="text" id="percent" name="percent" class="form-control" placeholder="Percent">
										</div>
									</div>
								</div>

								<div class="form-group text-center">
									<div class="btn-group">
										<button type="submit" class="btn btn-success" id="edit-form-btn">Update</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									</div>
								</div>
							</form>

						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.0.3
			</div>
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
			reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- jquery-validation -->
	<script src="<?= base_url() ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?= base_url() ?>/plugins/jquery-validation/additional-methods.min.js"></script>
	<!-- DataTables -->
	<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url() ?>/dist/js/demo.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- page script -->
	<script>
		$('#species_type').on('change', function() {
			getStandardValues();
		});
		$('#species').on('change', function() {
			getStandardValues();
		});
		$('#production_system').on('change', function() {
			getStandardValues();
		});
		$('#stage_weight').on('change', function() {
			getStandardValues();
		});

		function getStandardValues() {
			$.ajax({
				url: "<?php echo base_url($controller . '/getStandardValues') ?>",
				dataType: 'JSON',
				method: 'POST',
				data: {
					'species_type': $('#species_type').val(),
					'species': $('#species').val(),
					'production_system': $('#production_system').val(),
					'stage_weight': $('#stage_weight').val()
				},
				success: function(data_return) {
					//reset
					//Macronutrients					
					$("#drymatter_std").text('0');
					$("#crudeprotein_std").text('0');
					$("#crudefat_std").text('0');
					$("#crudeash_std").text('0');
					$("#crudefiber_std").text('0');
					$("#grossenergy_std").text('0');
					$("#starch_std").text('0');
					$('#carbohydrate_std').text('0');
					//Fiber
					$("#NDF_std").text('0');
					$("#ADF_std").text('0');
					//Aminoacids
					$("#arginine_std").text('0');
					$("#histidine_std").text('0');
					$("#isoleucine_std").text('0');
					$("#leucine_std").text('0');
					$("#lysine_std").text('0');
					$("#methionine_std").text('0');
					$("#methionine_cystine_std").text('0');
					$("#phenylalanine_std").text('0');
					$("#tryptophan_std").text('0');
					$("#valine_std").text('0');
					//Fattyacids
					$("#linoleic182N6_std").text('0');
					$("#linolenic183N3_std").text('0');
					$("#ePA205N3_std").text('0');
					$("#arachidonic204N6_std").text('0');
					$("#dHA226N3_std").text('0');
					//Vitamins & minerals
					$("#niacinB3_std").text('0');
					$("#folicAcidB9_std").text('0');
					$("#vitaminE_std").text('0');
					$("#pantothenicAcidB5_std").text('0');
					$("#vitaminC_std").text('0');
					$("#vitaminA_std").text('0');
					$("#vitaminB12_std").text('0');
					$("#biotinB7_std").text('0');
					$("#iron_std").text('0');
					$("#copper_std").text('0');
					$("#zinc_std").text('0');
					$("#inositol_std").text('0');
					$("#selenium_std").text('0');
					$("#cobalt_std").text('0');
					$("#iodine_std").text('0');
					$("#manganese_std").text('0');
					$("#calcium_std").text('0');
					$("#phosphorus_std").text('0');
					$("#potassium_std").text('0');
					$("#sodium_std").text('0');
					//ADC
					$("#ADCDryMatter").text('0');
					$("#ADCProtein").text('0');
					$("#ADCFat").text('0');
					//Ratios					
					$("#CN_std").text('0');
					//
					//Macronutrients					
					$("#drymatter_std").text(data_return['std']['drymatter']);
					$("#crudeprotein_std").text(data_return['std']['crudeprotein']);
					$("#crudefat_std").text(data_return['std']['crudefat']);
					$("#crudeash_std").text(data_return['std']['crudeash']);
					$("#crudefiber_std").text(data_return['std']['crudefiber']);
					$("#grossenergy_std").text(data_return['std']['grossenergy']);
					$("#starch_std").text(data_return['std']['starch']);
					//alert(data_return['std']['carbohydrate']);
					$('#carbohydrate_std').text(data_return['std']['carbohydrate']);
					//Fiber
					$("#NDF_std").text(data_return['std']['starch']);
					$("#ADF_std").text(data_return['std']['starch']);
					//Aminoacids
					$("#arginine_std").text(data_return['std']['arginine']);
					$("#histidine_std").text(data_return['std']['histidine']);
					$("#isoleucine_std").text(data_return['std']['isoleucine']);
					$("#leucine_std").text(data_return['std']['leucine']);
					$("#lysine_std").text(data_return['std']['lysine']);
					$("#methionine_std").text(data_return['std']['methionine']);
					$("#methionine_cystine_std").text(data_return['std']['methionine_cystine']);
					$("#phenylalanine_std").text(data_return['std']['phenylalanine']);
					$("#tryptophan_std").text(data_return['std']['tryptophan']);
					$("#valine_std").text(data_return['std']['valine']);
					//Fattyacids
					$("#linoleic182N6_std").text(data_return['std']['linoleic']);
					$("#linolenic183N3_std").text(data_return['std']['linolenic']);
					$("#ePA205N3_std").text(data_return['std']['epa']);
					$("#arachidonic204N6_std").text(data_return['std']['arachidonic']);
					$("#dHA226N3_std").text(data_return['std']['dha']);
					//Vitamins & minerals
					$("#niacinB3_std").text(data_return['std']['niacinb3']);
					$("#folicAcidB9_std").text(data_return['std']['folicacidb9']);
					$("#vitaminE_std").text(data_return['std']['vitamine']);
					$("#pantothenicAcidB5_std").text(data_return['std']['pantothenicacidb5']);
					$("#vitaminC_std").text(data_return['std']['vitaminc']);
					$("#vitaminA_std").text(data_return['std']['vitamina']);
					$("#vitaminB12_std").text(data_return['std']['vitaminb12']);
					$("#biotinB7_std").text(data_return['std']['biotinb7']);
					$("#iron_std").text(data_return['std']['iron']);
					$("#copper_std").text(data_return['std']['copper']);
					$("#zinc_std").text(data_return['std']['zinc']);
					$("#inositol_std").text(data_return['std']['inositol']);
					$("#selenium_std").text(data_return['std']['selenium']);
					$("#cobalt_std").text(data_return['std']['cobalt']);
					$("#iodine_std").text(data_return['std']['iodine']);
					$("#manganese_std").text(data_return['std']['manganese']);
					$("#calcium_std").text(data_return['std']['calcium']);
					$("#phosphorus_std").text(data_return['std']['phosphorus']);
					$("#potassium_std").text(data_return['std']['potassium']);
					$("#sodium_std").text(data_return['std']['sodium']);
					//ADC
					$("#ADCDryMatter").text(data_return['ADC_DM_fish']);
					$("#ADCProtein").text(data_return['ADC_CP_fish']);
					$("#ADCFat").text(data_return['ADC_Lipid_fish']);
					//Ratios					
					$("#CN_std").text(data_return['std']['cn']);

					// $("#ADCAsh").text(data_return['']);
					// $("#ADCAsh_std").text(data_return['std']['']);	
				}
			});
		}

		$(function() {
			$('#pnl_ingre').DataTable({
				"paging": false,
				"lengthChange": false,
				"searching": false,
				"ordering": false,
				"info": false,
				"autoWidth": false,
				"responsive": true,
				"ajax": {
					"url": '<?php echo base_url($controller . '/getAll') ?>',
					"type": "POST",
					"dataType": "json",
					async: "true"
				}
			});
		});

		function add() {
			// reset the form 
			$("#add-form")[0].reset();
			$(".form-control").removeClass('is-invalid').removeClass('is-valid');
			$('#add-modal').modal('show');
			// submit the add from 
			$.validator.setDefaults({
				highlight: function(element) {
					$(element).addClass('is-invalid').removeClass('is-valid');
				},
				unhighlight: function(element) {
					$(element).removeClass('is-invalid').addClass('is-valid');
				},
				errorElement: 'div ',
				errorClass: 'invalid-feedback',
				errorPlacement: function(error, element) {
					if (element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else if ($(element).is('.select')) {
						element.next().after(error);
					} else if (element.hasClass('select2')) {
						//error.insertAfter(element);
						error.insertAfter(element.next());
					} else if (element.hasClass('selectpicker')) {
						error.insertAfter(element.next());
					} else {
						error.insertAfter(element);
					}
				},

				submitHandler: function(form) {

					var form = $('#add-form');
					// remove the text-danger
					$(".text-danger").remove();

					$.ajax({
						url: '<?php echo base_url($controller . '/add') ?>',
						type: 'post',
						data: form.serialize(), // /converting the form data into array and sending it to server
						dataType: 'json',
						beforeSend: function() {
							$('#add-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
						},
						success: function(response) {

							if (response.success === true) {

								Swal.fire({
									position: 'bottom-end',
									icon: 'success',
									title: response.messages,
									showConfirmButton: false,
									timer: 1500
								}).then(function() {
									$('#data_table').DataTable().ajax.reload(null, false).draw(false);
									$('#add-modal').modal('hide');
								})

							} else {

								if (response.messages instanceof Object) {
									$.each(response.messages, function(index, value) {
										var id = $("#" + index);

										id.closest('.form-control')
											.removeClass('is-invalid')
											.removeClass('is-valid')
											.addClass(value.length > 0 ? 'is-invalid' : 'is-valid');

										id.after(value);

									});
								} else {
									Swal.fire({
										position: 'bottom-end',
										icon: 'error',
										title: response.messages,
										showConfirmButton: false,
										timer: 1500
									})

								}
							}
							$('#add-form-btn').html('Add');
						}
					});

					return false;
				}
			});
			$('#add-form').validate();
		}

		function edit(id) {
			$.ajax({
				url: '<?php echo base_url($controller . '/getOne') ?>',
				type: 'post',
				data: {
					id: id
				},
				dataType: 'json',
				success: function(response) {
					// reset the form 
					$("#edit-form")[0].reset();
					$(".form-control").removeClass('is-invalid').removeClass('is-valid');
					$('#edit-modal').modal('show');

					$("#edit-form #id").val(response.id);
					$("#edit-form #ingDescrE").val(response.Ing_Descr_E);
					$("#edit-form #percent").val(response.percent);

					// submit the edit from 
					$.validator.setDefaults({
						highlight: function(element) {
							$(element).addClass('is-invalid').removeClass('is-valid');
						},
						unhighlight: function(element) {
							$(element).removeClass('is-invalid').addClass('is-valid');
						},
						errorElement: 'div ',
						errorClass: 'invalid-feedback',
						errorPlacement: function(error, element) {
							if (element.parent('.input-group').length) {
								error.insertAfter(element.parent());
							} else if ($(element).is('.select')) {
								element.next().after(error);
							} else if (element.hasClass('select2')) {
								//error.insertAfter(element);
								error.insertAfter(element.next());
							} else if (element.hasClass('selectpicker')) {
								error.insertAfter(element.next());
							} else {
								error.insertAfter(element);
							}
						},

						submitHandler: function(form) {
							var form = $('#edit-form');
							$(".text-danger").remove();
							$.ajax({
								url: '<?php echo base_url($controller . '/edit') ?>',
								type: 'post',
								data: form.serialize(),
								dataType: 'json',
								beforeSend: function() {
									$('#edit-form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
								},
								success: function(response) {

									if (response.success === true) {

										Swal.fire({
											position: 'bottom-end',
											icon: 'success',
											title: response.messages,
											showConfirmButton: false,
											timer: 1500
										}).then(function() {
											ReloadFormula();
											//$('#pnl_ingre').DataTable().ajax.reload(null, false).draw(false);
											$('#edit-modal').modal('hide');
										})

									} else {

										if (response.messages instanceof Object) {
											$.each(response.messages, function(index, value) {
												var id = $("#" + index);

												id.closest('.form-control')
													.removeClass('is-invalid')
													.removeClass('is-valid')
													.addClass(value.length > 0 ? 'is-invalid' : 'is-valid');

												id.after(value);

											});
										} else {
											Swal.fire({
												position: 'bottom-end',
												icon: 'error',
												title: response.messages,
												showConfirmButton: false,
												timer: 1500
											})

										}
									}
									$('#edit-form-btn').html('Update');
								}
							});

							return false;
						}
					});
					$('#edit-form').validate();

				}
			});
		}

		function remove(id) {
			Swal.fire({
				title: 'Are you sure of the deleting process?',
				text: "You cannot back after confirmation",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Confirm',
				cancelButtonText: 'Cancel'
			}).then((result) => {

				if (result.value) {
					$.ajax({
						url: '<?php echo base_url($controller . '/remove') ?>',
						type: 'post',
						data: {
							id: id
						},
						dataType: 'json',
						success: function(response) {
							if (response.success === true) {
								Swal.fire({
									position: 'bottom-end',
									icon: 'success',
									title: response.messages,
									showConfirmButton: false,
									timer: 1500
								}).then(function() {
									ReloadFormula();
									//$('#data_table').DataTable().ajax.reload(null, false).draw(false);
								})
							} else {
								Swal.fire({
									position: 'bottom-end',
									icon: 'error',
									title: response.messages,
									showConfirmButton: false,
									timer: 1500
								})
							}
						}
					});
				}
			})
		}

		$("#ingre").select2({
			placeholder: 'Select an option'
		});

		$('#calculate').on('click', function() {
			if ($('#percent').val() != '') {
				CalculateFormula();
			} else {
				alert("Percent can not be null");
				// alert($('#ingre').val());
			}
		});

		function CalculateFormula() {
			datatable = $("#pnl_ingre").DataTable();

			current_percent = parseInt($('#percent').val());
			add_percent = parseInt($('#ttlPercent').text());

			if ((current_percent + add_percent) > 100) {
				alert("This will exceed 100 %");
			} else {
				$.ajax({
					url: "<?php echo base_url($controller . '/CalculateFormula') ?>",
					dataType: 'JSON',
					method: 'POST',
					data: {
						'ingre': $('#ingre').val(),
						'percent': $('#percent').val(),
						'species_type': $('#species_type').val(),
						'species': $('#species').val(),
						'production_system': $('#production_system').val(),
						'stage_weight': $('#stage_weight').val()
					},
					success: function(data_return) {
						//console.log(data_return['data']);
						datatable.clear().rows.add(data_return['data']).draw();

						//Macronutrients
						$("#drymatter").text(data_return['Dry_Matter']);
						$("#drymatter_std").text(data_return['std']['drymatter']);

						$("#crudeprotein").text(data_return['Crude_Protein']);
						$("#crudeprotein_std").text(data_return['std']['crudeprotein']);

						$("#crudefat").text(data_return['Crude_Lipids']);
						$("#crudefat_std").text(data_return['std']['crudefat']);

						$("#crudeash").text(data_return['Ash']);
						$("#crudeash_std").text(data_return['std']['crudeash']);

						$("#crudefiber").text(data_return['Crude_Fibre']);
						$("#crudefiber_std").text(data_return['std']['crudefiber']);

						$("#grossenergy").text(data_return['Gross_Energy_MJ']);
						//$("#grossenergy").text(data_return['Gross_energy_Kcal']);
						$("#grossenergy_std").text(data_return['std']['grossenergy']);

						$("#starch").text(data_return['Starch']);
						$("#starch_std").text(data_return['std']['starch']);
						
						$('#carbohydrate').text(data_return['carbohydrate']);
						$('#carbohydrate_std').text(data_return['std']['carbohydrate']);

						//Fiber
						$("#NDF").text(data_return['NDF']);
						$("#NDF_std").text(data_return['std']['starch']);

						$("#ADF").text(data_return['ADF']);
						$("#ADF_std").text(data_return['std']['starch']);

						//Aminoacids
						$("#arginine").text(data_return['Arginine']);
						$("#arginine_std").text(data_return['std']['arginine']);

						$("#histidine").text(data_return['Histidine']);
						$("#histidine_std").text(data_return['std']['histidine']);

						$("#isoleucine").text(data_return['Isoleucine']);
						$("#isoleucine_std").text(data_return['std']['isoleucine']);

						$("#leucine").text(data_return['Leucine']);
						$("#leucine_std").text(data_return['std']['leucine']);

						$("#lysine").text(data_return['Lysine']);
						$("#lysine_std").text(data_return['std']['lysine']);

						$("#methionine").text(data_return['Methionine']);
						$("#methionine_std").text(data_return['std']['methionine']);

						$("#methionine_cystine").text(data_return['Methionine_Cystine']);
						$("#methionine_cystine_std").text(data_return['std']['methionine_cystine']);

						$("#phenylalanine").text(data_return['Phenylalanine']);
						$("#phenylalanine_std").text(data_return['std']['phenylalanine']);

						$("#tryptophan").text(data_return['Tryptophan']);
						$("#tryptophan_std").text(data_return['std']['tryptophan']);

						$("#valine").text(data_return['Valine']);
						$("#valine_std").text(data_return['std']['valine']);

						//Fattyacids
						$("#linoleic182N6").text(data_return['Linoleic_18_2_n_6']);
						$("#linoleic182N6_std").text(data_return['std']['linoleic']);

						$("#linolenic183N3").text(data_return['Linolenic_18_3_n_3']);
						$("#linolenic183N3_std").text(data_return['std']['linolenic']);

						$("#ePA205N3").text(data_return['EPA_20_5_n_3']);
						$("#ePA205N3_std").text(data_return['std']['epa']);

						$("#arachidonic204N6").text(data_return['Arachidonic_20_4_n_6']);
						$("#arachidonic204N6_std").text(data_return['std']['arachidonic']);

						$("#dHA226N3").text(data_return['DHA_22_6_n_3']);
						$("#dHA226N3_std").text(data_return['std']['dha']);

						//Vitamins & minerals
						$("#niacinB3").text(data_return['Niacin_B3']);
						$("#niacinB3_std").text(data_return['std']['niacinb3']);

						$("#folicAcidB9").text(data_return['Folic_acid_B9']);
						$("#folicAcidB9_std").text(data_return['std']['folicacidb9']);

						$("#vitaminE").text(data_return['Vitamin_E']);
						$("#vitaminE_std").text(data_return['std']['vitamine']);

						$("#pantothenicAcidB5").text(data_return['Pantothenic_Acid_B5']);
						$("#pantothenicAcidB5_std").text(data_return['std']['pantothenicacidb5']);

						$("#vitaminC").text(data_return['Vitamin_C']);
						$("#vitaminC_std").text(data_return['std']['vitaminc']);

						$("#vitaminA").text(data_return['Vitamin_A']);
						$("#vitaminA_std").text(data_return['std']['vitamina']);

						$("#vitaminB12").text(data_return['Vitamin_B12']);
						$("#vitaminB12_std").text(data_return['std']['vitaminb12']);

						$("#biotinB7").text(data_return['Biotin_B7']);
						$("#biotinB7_std").text(data_return['std']['biotinb7']);

						$("#iron").text(data_return['Iron']);
						$("#iron_std").text(data_return['std']['iron']);

						$("#copper").text(data_return['Copper']);
						$("#copper_std").text(data_return['std']['copper']);

						$("#zinc").text(data_return['Zinc']);
						$("#zinc_std").text(data_return['std']['zinc']);

						$("#inositol").text(data_return['Inositol']);
						$("#inositol_std").text(data_return['std']['inositol']);

						$("#selenium").text(data_return['Selenium']);
						$("#selenium_std").text(data_return['std']['selenium']);

						$("#cobalt").text(data_return['Cobalt']);
						$("#cobalt_std").text(data_return['std']['cobalt']);

						$("#iodine").text(data_return['Iodine']);
						$("#iodine_std").text(data_return['std']['iodine']);

						$("#manganese").text(data_return['Manganese']);
						$("#manganese_std").text(data_return['std']['manganese']);

						$("#calcium").text(data_return['Calcium']);
						$("#calcium_std").text(data_return['std']['calcium']);

						$("#phosphorus").text(data_return['Phosphorus']);
						$("#phosphorus_std").text(data_return['std']['phosphorus']);

						$("#potassium").text(data_return['Potassium']);
						$("#potassium_std").text(data_return['std']['potassium']);

						$("#sodium").text(data_return['Sodium']);
						$("#sodium_std").text(data_return['std']['sodium']);

						//ADC
						$("#ADCDryMatter").text(data_return['ADC_DM_fish']);
						$("#ADCProtein").text(data_return['ADC_CP_fish']);
						$("#ADCFat").text(data_return['ADC_Lipid_fish']);

						//Ratios
						$("#CN").text(data_return['cn']);
						$("#CN_std").text(data_return['std']['cn']);

						// $("#ADCAsh").text(data_return['']);
						// $("#ADCAsh_std").text(data_return['std']['']);					

						//Total percet
						$("#ttlPercent").text(data_return['percent']);
						$('#percent').val('');
					}
				});
			}
		}

		function ReloadFormula() {
			datatable = $("#pnl_ingre").DataTable();

			$.ajax({
				url: "<?php echo base_url($controller . '/ReloadFormula') ?>",
				dataType: 'JSON',
				method: 'POST',
				data: {},
				success: function(data_return) {
					datatable.clear().rows.add(data_return['data']).draw();

					//Macronutrients
					$("#drymatter").text(data_return['Dry_Matter']);
					$("#crudeprotein").text(data_return['Crude_Protein']);
					$("#crudefat").text(data_return['Crude_Lipids']);
					$("#crudeash").text(data_return['Ash']);
					$("#crudefiber").text(data_return['Crude_Fibre']);
					$("#grossenergy").text(data_return['Gross_Energy_MJ']);
					//$("#grossenergy").text(data_return['Gross_energy_Kcal']);				
					$("#starch").text(data_return['Starch']);
					$('#carbohydrate').text(data_return['carbohydrate']);
					
					//Fiber
					$("#NDF").text(data_return['NDF']);
					$("#ADF").text(data_return['ADF']);

					//Aminoacids
					$("#arginine").text(data_return['Arginine']);
					$("#histidine").text(data_return['Histidine']);
					$("#isoleucine").text(data_return['Isoleucine']);
					$("#leucine").text(data_return['Leucine']);
					$("#lysine").text(data_return['Lysine']);
					$("#methionine").text(data_return['Methionine']);
					$("#methionine_cystine").text(data_return['Methionine_Cystine']);
					$("#phenylalanine").text(data_return['Phenylalanine']);
					$("#tryptophan").text(data_return['Tryptophan']);
					$("#valine").text(data_return['Valine']);

					//Fattyacids
					$("#linoleic182N6").text(data_return['Linoleic_18_2_n_6']);
					$("#linolenic183N3").text(data_return['Linolenic_18_3_n_3']);
					$("#ePA205N3").text(data_return['EPA_20_5_n_3']);
					$("#arachidonic204N6").text(data_return['Arachidonic_20_4_n_6']);
					$("#dHA226N3").text(data_return['DHA_22_6_n_3']);

					//Vitamins & minerals
					$("#niacinB3").text(data_return['Niacin_B3']);
					$("#folicAcidB9").text(data_return['Folic_acid_B9']);
					$("#vitaminE").text(data_return['Vitamin_E']);
					$("#pantothenicAcidB5").text(data_return['Pantothenic_Acid_B5']);
					$("#vitaminC").text(data_return['Vitamin_C']);
					$("#vitaminA").text(data_return['Vitamin_A']);
					$("#vitaminB12").text(data_return['Vitamin_B12']);
					$("#biotinB7").text(data_return['Biotin_B7']);
					$("#iron").text(data_return['Iron']);
					$("#copper").text(data_return['Copper']);
					$("#zinc").text(data_return['Zinc']);
					$("#inositol").text(data_return['Inositol']);
					$("#selenium").text(data_return['Selenium']);
					$("#cobalt").text(data_return['Cobalt']);
					$("#iodine").text(data_return['Iodine']);
					$("#manganese").text(data_return['Manganese']);
					$("#calcium").text(data_return['Calcium']);
					$("#phosphorus").text(data_return['Phosphorus']);
					$("#potassium").text(data_return['Potassium']);
					$("#sodium").text(data_return['Sodium']);

					//ADC
					$("#ADCDryMatter").text(data_return['ADC_DM_fish']);
					$("#ADCProtein").text(data_return['ADC_CP_fish']);
					$("#ADCFat").text(data_return['ADC_Lipid_fish']);

					//Ratios
					$("#CN").text(data_return['cn']);					
					
					// $("#ADCAsh").text(data_return['']);
					// $("#ADCAsh_std").text(data_return['std']['']);					

					//Total percet				
					$("#ttlPercent").html(data_return['percent']);
					$('#percent').val('');
				}
			});
		}

		$('.myTag').on('click', function() {
			var target = $(this).attr('rel');
			$("." + target).show().siblings("div").hide();
		});

		$(".list-group-item").click(function() {
			// Select all list items
			var listItems = $(".list-group-item");
			// Remove 'active' tag for all list items
			for (let i = 0; i < listItems.length; i++) {
				listItems[i].classList.remove("active");
			}
			// Add 'active' tag for currently selected item
			this.classList.add("active");
		});

		$(function() {
			getStandardValues();
		});
	</script>
</body>

</html>