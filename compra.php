<html>
	<head>
		<title>HappyCopy System</title>
		<link rel="stylesheet" type="text/css" href="./estilo/global.css">
		<link rel="icon" type="image/png" href="./misc/icon.png">
		<link rel='stylesheet' href='./misc/font/typicons.min.css'/>
		<meta charset="UTF-8">
		<meta lang="ES">

		<script>
			function Filas(){
				var padre = document.getElementById("padre");

				var fila = document.createElement("")
			}
		</script>
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
			<span class="title-icon typcn typcn-shopping-bag"></span>
			<h2 class="title-page">Compra</h2>
			</div>
				<div class="barra">
					<p class="proveedor" style="display: inline">Proveedor:</p>
					<form style="margin-left: -20px; margin-right: 20px; display: inline-block;">
						<input list="proveedores">
							<datalist id="proveedores">
								<option value="Proveedor de ejemplo uno.">
								<option value="Proveedor de ejemplo dos.">
								<option value="Proveedor de ejemplo tres.">
								<option value="Proveedor de ejemplo cuatro.">
							</datalist>
						</input>
					</form>
					<P class="rfc">RFC:</p>
					<p class="folio">Folio:</p>
					<a href="#"><p class="procesar"><span class="typcn typcn-tick"></span>Procesar</p></a>
					<a href="#"><p class="procesar" style="margin-right: 0;"><span class="typcn typcn-plus"></span>Agregar</p></a>
					<a href="#"><p class="limpiar"><span class="typcn typcn-backspace"></span>Limpiar todo</p></a>
					<a href="#"><p class="eliminar"><span class="typcn typcn-times"></span>Eliminar</p></a>
				</div>
				<div class="tabla">
					<table>
						<thead>
							<tr>
									<th><center><span class="typcn typcn-cog" style="font-size: 25px;"></span></center></th>
									<th>Cod. Producto</th>
									<th>Descripción</th>
									<th>Cantidad</th>
									<th>Precio unitario</th>
									<th>Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><center><input type="checkbox"></center></td>
								<td><input type="text" style="width: 100%;"></td>
								<td><input type="text" style="width: 100%;"></td>
								<td><input type="text" style="width: 100%;"></td>
								<td><input type="text" style="width: 100%;"></td>
								<td>999</td>
							</tr>
							<div id="padre">


							</div>
							
						</tbody>
					</table>
					<div class="right-abajo">
						<div class="right-box">
							<table>
								<tr>
									<td style="text-transform: uppercase;"><b>IVA:</b></td>
									<td>9999</td>
								</tr>
								<tr>
									<td style="text-transform: uppercase;"><b>SUBTOTAL:</b></td>
									<td>9999</td>
								</tr>
								<tr>
									<td style="text-transform: uppercase;"><b>TOTAL:</b></td>
									<td>9999</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="foot-bar">
					<p class="proveedor" style="display: inline">Proveedor:</p>
					<form style="margin-left: -20px; margin-right: 20px; display: inline-block;">
						<input list="proveedores">
							<datalist id="proveedores">
								<option value="Proveedor de ejemplo uno.">
								<option value="Proveedor de ejemplo dos.">
								<option value="Proveedor de ejemplo tres.">
								<option value="Proveedor de ejemplo cuatro.">
							</datalist>
						</input>
					</form>
					<P class="rfc">RFC:</p>
					<p class="folio">Folio:</p>
					<a href="#"><p class="procesar"><span class="typcn typcn-tick"></span>Procesar</p></a>
					<a href="#"><p class="procesar" style="margin-right: 0;"><span class="typcn typcn-plus"></span>Agregar</p></a>
					<a href="#"><p class="limpiar"><span class="typcn typcn-backspace"></span>Limpiar todo</p></a>
					<a href="#"><p class="eliminar"><span class="typcn typcn-times"></span>Eliminar</p></a>
				</div>
			</div>
		</div>
		
	</body>
</html>