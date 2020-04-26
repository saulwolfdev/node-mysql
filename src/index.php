


<?php
$conexion=mysqli_connect("localhost","saul","123","tienda");
$solicitud= "";
$resultado=mysql_query($conexion,$solicitud);
while($uno=mysqli_fetch_array($resultado)){
    echo $uno["nombre"] . $uno["apellido"]
};
?>