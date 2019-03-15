<?php
session_start();
if (isset($_POST['codigo']) and isset($_POST['nombre']) and isset($_POST['RFC']) and isset($_POST['direccion']) 
and isset($_POST['telefono']) and isset($_POST['correo'])){
    include ('conexion.php');
    $codigo = mysqli_real_escape_string($mysqli ,$_POST['codigo']);
    $nombre = mysqli_real_escape_string($mysqli ,$_POST['nombre']);
    $RFC = mysqli_real_escape_string($mysqli ,$_POST['RFC']);
    $direccion = mysqli_real_escape_string($mysqli ,$_POST['direccion']);
    $telefono = mysqli_real_escape_string($mysqli ,$_POST['telefono']);
    $correo = mysqli_real_escape_string($mysqli ,$_POST['correo']);
    $paginaweb = mysqli_real_escape_string($mysqli ,$_POST['paginaweb']);
    $insertar = mysqli_query($mysqli,"insert into proveedores(codigo,nombre_empresa,RFC,direccion,telefono,correo,paginaweb) 
    values ('".$codigo."','".$nombre."','".$RFC."','".$direccion."','".$telefono."','".$correo."','".$paginaweb."')") 
    or die ('No se pudo registrar<br>'.mysqli_error($mysqli));
    mysqli_close($mysqli);
    //header('location:Welcome.php');

}else{
    print 'Error al registrar intentelo de nuevo<br>
    <a href="http://localhost/Happy%20Copy/agregar-proveedor.php">volver<a/>';
}

if ($insertar==true) {
    header('Location: ../proveedores.php');
}
?>