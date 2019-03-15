<?php
require 'conexion.php';

$usuarios = $mysqli->query("SELECT nombre_usu, tipo_usu
FROM login
WHERE user_us = '".$_POST['Usuario']."'
AND pass_co = '".$_POST['password']."'");

if($usuarios->num_rows == 1):
	$datos = $usuarios->fetch_assoc();
	echo json_encode(array('error' => false, 'tipo' => $datos['tipo_usu']));
else:
	echo json_encode(array('error'=> true));
endif;

$mysqli->close();

 ?>
