<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-main.css">
</head>
<body>
	<header id="header">
		<nav id="site-navigation" class="teal darken-1">
			<div class="nav-wrapper">
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="hide-on-med-and-down right">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Seccion 2</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Seccion 2</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header>
	<div class="">
		<div class="asidebar z-depth-1 grey darken-4 blue-grey-text text-grey-darken">
			<ul class="list-menu">
				<li>
					<a href="#">
						<span class="icon"><i class="material-icons">dashboard</i></span>
						<span class="title">Inicio</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="entradas">
						<span class="icon"><i class="fa fa-thumb-tack"></i></span>
						<span class="title">Entradas</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-comments"></i></span>
						<span class="title">Comentarios</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-paint-brush"></i></span>
						<span class="title">Apariencia</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-users"></i></span>
						<span class="title">Usuarios</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-wrench"></i></span>
						<span class="title">Herramientas</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="fa fa-cog"></i></span>
						<span class="title">Ajustes</span>
						<span class="arrow"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="main-content-adm">