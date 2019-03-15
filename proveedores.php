<html>
	<head>
		<title>HappyCopy System</title>
		<link rel="stylesheet" type="text/css" href="./estilo/global.css">
		<link rel="icon" type="image/png" href="./misc/icon.png">
		<link rel='stylesheet' href='./misc/font/typicons.min.css'/>
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
			<span class="title-icon typcn typcn-th-list"></span>
			<h2 class="title-page">Lista de proveedores</h2>
			</div>
				<div class="barra">
					<p class="filtro" style="display: inline-block; margin-left: 20px;">Ordenar por:</p>
					<form style="display: inline-block;">
						<input list="filtro">
							<datalist id="filtro">
								<option value="Orden alfabetico">
							</datalist>
						</input>
					</form>
					<a href="#"><p class="limpiar" style="margin-right: 20px;"><span class="typcn typcn-backspace"></span>Eliminar</p></a>
					<a href="#"><p class="eliminar"><span class="typcn typcn-spanner"></span>Modificar</p></a>
					<a href="./misc/reportes/proveedores.pdf" target="_blank"><p class="eliminar"><span class="typcn typcn-document-add"></span>Generar reporte</p></a>
				</div>
				<div class="tabla">
					<table>
						<thead>
							<tr>
									<th><center><span class="typcn typcn-cog" style="font-size: 25px;"></span></center></th>
									<th>Código</th>									
                                    <th>Empresa</th>
                                    <th>RFC</th>
									<th>Dirección</th>
									<th>Teléfono</th>
                                    <th>Correo</th>
                                    <th>Pagina web</th>
							</tr>
                        </thead>
                        <tbody>
                        <?php
                        include ('main.app/select_provedores.php');
						?>
						</tbody>
					</table>
				</div>
				<div class="foot-bar">
					<p class="filtro" style="display: inline-block; margin-left: 20px;">Ordenar por:</p>
					<form style="display: inline-block;">
						<input list="filtro">
							<datalist id="filtro">
								<option value="Orden alfabetico">
							</datalist>
						</input>
					</form>
					<a href="#"><p class="limpiar" style="margin-right: 20px;"><span class="typcn typcn-backspace"></span>Eliminar</p></a>
					<a href="#"><p class="eliminar"><span class="typcn typcn-spanner"></span>Modificar</p></a>
					<a href="./misc/reportes/proveedores.pdf" target="_blank"><p class="eliminar"><span class="typcn typcn-document-add"></span>Generar reporte</p></a>
				</div>
			</div>
		</div>
		
	</body>
</html>