<?php
	$mysqli = new mysqli('localhost','root','','proyecto');
	if ($mysqli->connect_errno):
		echo "Error al conectarse con MySql".$mysqli->connect_error;
	endif;
 ?>
