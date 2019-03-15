<?php
session_start();
    include ('conexion.php');
    $contador = 1;
    $proveedor;
    $Select = mysqli_query($mysqli,"select codigo,nombre_empresa,RFC,direccion,telefono,correo,paginaweb from proveedores") 
    or die ('No se pudo registrar<br>'.mysqli_error($mysqli));
    while ($row=mysqli_fetch_assoc($Select)){
            echo '<tr>
            <td><center><input type="checkbox"></center></td>
            <td>'.$row['codigo'].'</td>
            <td>'.$row['nombre_empresa'].'</td>
            <td>'.$row['RFC'].'</td>
            <td>'.$row['direccion'].'</td>
            <td>'.$row['telefono'].'</td>
            <td>'.$row['correo'].'</td>
            <td>'.$row['paginaweb'].'</td>
        </tr>';
        }

    mysqli_close($mysqli);

?>