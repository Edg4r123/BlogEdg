<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
</head>
<body>
	<div class="content-login z-depth-1">
		<a href="#"><img class="brand" src="assets/images/admin-images/logo-mkt.png" alt=""></a>
		<form action="<?php echo base_url(); ?>LoginAdmin/ingresando" method="post">
			<div class="input-field">
				<input id="user-name" name="user-name" type="text" required="true">
				<label for="user-name">Nombre de usuario</label>
			</div>
			<div class="input-field">
				<input id="user-password" name="user-password" type="password" required="true">
				<label for="user-password">Contraseña</label>
			</div>
			<p>
				<input type="checkbox" id="user-rememberme" name="user-rememberme">
				<label for="user-rememberme">Recuérdame</label>
			</p>
			<div class="right-align">
				<button class="btn waves-effect waves-light" type="submit">Acceder</button>
			</div>
		</form>
	</div>
</body>
</html>