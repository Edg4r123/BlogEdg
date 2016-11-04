<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
</head>
<body>
	<h1>Recepcion de variables post</h1>
	<h5><?php echo $email; ?></h5>
	<pre>
		
	<?php
		// foreach ($data_user as $row) {
		// 	echo $row->user_email;
		// }
		echo $this->session->userdata("display_name");
		print_r($data_user);
		echo count($data_user);
	?>
	</pre>
</body>
</html>