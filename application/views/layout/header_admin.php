<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-main.css">
</head>
<body>
	<header id="header" class="navbar-fixed">
		<nav id="site-navigation" class="teal darken-1">
			<div class="nav-wrapper">
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="hide-on-med-and-down right">
					<li>
						<a class="dropdown-button" href="#" data-activates="dropdown-user">
							<img class="img-nav" src="http://placehold.it/40x40">
							Hola, <?php echo $this->session->userdata("display_name"); ?>
						</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Seccion 2</a></li>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
		<!-- Dropdown user -->
		<ul id="dropdown-user" class="dropdown-content">
			<li><a href="#">Editar perfil</a></li>
			<li><a href="<?php echo base_url('administrador/logout/'); ?>">Cerrar sesión</a></li>
		</ul>
	</header>
	<div class="">
		<div class="asidebar z-depth-1 grey darken-4 blue-grey-text text-grey-darken">
			<ul class="list-menu">
				<li>
					<a href="<?php echo base_url('administrador'); ?>">
						<span class="icon"><i class="material-icons">dashboard</i></span>
						<span class="title">Inicio</span>
						<span class="arrow"></span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('administrador/entradas'); ?>">
						<span class="icon"><i class="material-icons">assignment</i></span>
						<span class="title">Entradas</span>
						<span class="arrow"></span>
					</a>
					<ul class="submenu">
						<li><a href="#">Todas las entradas</a></li>
						<li><a href="<?php echo base_url('administrador/nueva-entrada'); ?>">Añadir nueva</a></li>
						<li><a href="#">Categorías</a></li>
						<li><a href="#">Etiquetas</a></li>
					</ul>
				</li>
				<li>
					<a href="#">
						<span class="icon"><i class="material-icons">forum</i></span>
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
					<a href="<?php echo base_url('administrador/usuarios'); ?>">
						<span class="icon"><i class="material-icons">assignment_ind</i></span>
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
						<span class="icon"><i class="material-icons">settings</i></span>
						<span class="title">Ajustes</span>
						<span class="arrow"></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="main-content-adm">
<style type="text/css">
	.submenu { display: none; }
	.submenu li a { color: gray; margin-left: 2.5em; }
	.submenu li a:hover { border-left: 2px solid #00897b; background: black; }
	.list-menu > li { position: relative; }
	.list-menu > li:hover > .submenu { display: block; transition: all 14s linear;}
	.dataTables_wrapper { z-index: -1; }
</style>