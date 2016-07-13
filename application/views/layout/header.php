<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="assets/css/materialize.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
	<header id="header">
		<div class="container">
			<div class="logo">
				<h1 class="text-logo">
					<a href="http://soluciones-web.info/" title="Soluciones Web" rel="home">Soluciones Web</a>
				</h1>
				<p class="site-description">Tus soluciones en html, css, js, php</p>
			</div>
			<nav id="site-navigation" class="grey darken-4 z-depth-3">
				<div class="nav-wrapper">
					<ul>
						<li class="current_page_item">
							<a href="http://soluciones-web.info/">Inicio</a>
						</li>
						<li>
							<a href="http://soluciones-web.info/">Seccion 2</a>
						</li>
					</ul>
					<select class="select-menu hidden">
						<option value="#">Navigate to...</option>
						<option value="http://soluciones-web.info/" selected="selected">Inicio</option>
					</select>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header>
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col s8">
					<div class="card">
						<div class="card-content">
							<div class="post_icons">
								<span class="post_date teal-text text-lighten-1">
									<time datetime="2015-12-28T23:07:45">28 diciembre, 2015</time>
								</span>
							</div>
							<span class="card-title">Algoritmos que son parte de tu vida</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, maxime, ducimus. Iure animi ex aperiam labore odio ratione et quidem! Voluptates labore non totam vero eveniet dolores minus nostrum neque.</p>
						</div>
						<div class="card-action">
							<a href="#">This is a link</a>
              				<a href="#">This is a link</a>
						</div>
					</div>
				</div>
				<div class="col s4">
					<div class="card">
						<div class="social_box red lighten-1 center-align">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-rss"></i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Bienvenido a mi sitio</span>
							<p>Hola, y bienvenido a mi sitio! Espero te guste el lugar y decidas quedarte.</p>
						</div>
					</div>
					<div class="card">
						<div class="color_top red lighten-1"></div>
						<div class="card-content">
							<span class="card-title">Categorias</span>
							<ul>
								<li class="cat-item cat-item-1">
									<a href="category/programacion/">Programación</a>
								</li>
								<li class="cat-item cat-item-11">
									<a href="category/tecnologia/">Tecnología</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
