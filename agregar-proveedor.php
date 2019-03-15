<html>
	<head>
		<title>HappyCopy System</title>
		<link rel="stylesheet" type="text/css" href="./estilo/global.css">
		<link rel="icon" type="image/png" href="./misc/icon.png">
		<link rel='stylesheet' href='./misc/font/typicons.min.css'/>
		<script src="JS/Agregar_prov.js"></script>
		<meta charset="UTF-8">
		<meta lang="ES">
	</head>
	
	<body>
		
		<div id="header">
			<div class="logo">
				<a href="#"><img src="./misc/logo.png"></a>
			</div>
			<div class="nav">
				<ul>
					<li><a href="./compra.php">Compra</a></li>
					<li><a href="./venta.php">Venta</a></li>
					<li>
						<a href="./proveedores.php">Proveedores</a>
							<ul>
								<li><a href="./agregar-proveedor.php">Agregar proveedor</a></li>
							</ul>
					</li>
					<li><a href="./inventario.php">Inventario</a></li>
					<li>
						<a href="#">Reportes</a>
							<ul>
								<li><a href="./reportes-compras.php">Reportes de compras</a></li>
								<li><a href="./reportes-ventas.php">Reportes de ventas</a></li>
							</ul>
					</li>
					<li><a href="./sesion.php">Cerrar sesión</a></li>
				</ul>
			</div>
		</div>
		
		<div id="contenedor">
			<div class="contenido">
			<div class="head-title">
			<span class="title-icon typcn typcn-user-add"></span>
			<h2 class="title-page">Agregar proveedor</h2>
			</div>
			<form id="" action="main.app/insertar_proveedor.php" method="post" enctype="application/x-www-form-urlencoded">
				<div class="main-proveedores">
					<div class="left-proveedores">
						<div class="contenido-left-proveedores">
							<p>Código de proveedor</p>
							<input type="text" name="codigo" placeholder="999" required>
							<p>Nombre de la empresa</p>
							<input type="text" name="nombre" placeholder="XXXXXXXXXXXXXXX XXX." required>
							<p>RFC</p>
							<input type="text" name="RFC" maxlength="12" placeholder="XXX99X" required>
							<p>Dirección</p>
							<input type="text" name="direccion" placeholder="XXXXXXXXX XXXXXXXXXXXXXX #9999" required>
						</div>
					</div>
					
					<div class="right-proveedores">
						<div class="contenido-right-proveedores">
								<p>Telefono</p>
								<input type="text" name="telefono" placeholder="(999) 9999 999" required>
								<p>Correo electrónico</p>
								<input type="email" name="correo" placeholder="XXXXXXXXXXXX@XXXXX.XXX" required>
								<p>Página web</p>
								<input type="text" name="paginaweb" placeholder="XXX.XXXXXXXXXXX.XXX" >
							<!--
							<p>Nombre del empleado</p>
							<input type="text" placeholder="XXXXXX XXXXXXX XXXXXXXX XXXXXXXX">
							<p>Télefono del empleado</p>
							<input type="text" placeholder="(999) 9999 999">
							<p>Correo electrónico del empleado</p>
							<input type="text" placeholder="XXXXXXXXXXXX@XXXXX.XXX">
						</div>-->
					</div>
				</div>
				<div class="foot-bar">
					<button type="submit" class="procesar" style="background-color: transparent;border:0px;font-size: 21px;cursor:pointer;"><p class="procesar"><span class="typcn typcn-tick"></span>Agregar proveedor</p></button>
				</div>
			</div>
			</form>
		</div>
		
	</body>
</html>