


<?php
$conexion=mysqli_connect("localhost","saul","123","tienda");
$solicitud= "

CREATE TABLE productos(
    id_producto INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_producto),
    nombre VARCHAR(200),
    precio int
);
CREATE TABLE clientes(
    id_cliente INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id_cliente ),
    nombre VARCHAR(200),
    apellido VARCHAR(200),
    edad int,
    telefono int
);
CREATE TABLE pedidos(
 	id_pedido INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id_pedido),
    fecha DATE,
    cantidad INT,
    id_producto INT,
    id_cliente INT,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)


";
$resultado=mysql_query($conexion,$solicitud);
while($uno=mysqli_fetch_array($resultado)){
    echo $uno["nombre"] . $uno["apellido"]
};
?>