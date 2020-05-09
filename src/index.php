


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
//crear usuarios
INSERT INTO clientes (nombre, apellido,edad,telefono)VALUE("saul","alejos","35","1159089118")

// cargar un csv
LOAD DATA LOCAL INFILE "C:/dev/node-mysql/src/sql/uno.csv"
INTO TABLE clientes
FIELDS TERMINATED BY ";"
LINES TERMINATED BY "\n"
(nombre,apellido,edad,telefono)

//CRUD
UPDATE clientes SET telefono="44444" WHERE id_cliente=1
UPDATE clientes SET telefono="44444" WHERE id_cliente BETWEEN 2 AND 4

//

SELECT nombre, apellido FROM clientes WHERE id_cliente=2
SELECT * FROM clientes
SELECT * FROM clientes WHERE nombre="saul" AND "alejo"
SELECT * FROM clientes WHERE nombre="saul" OR "alejo"
SELECT * FROM clientes WHERE nombre LIKE "a%"
SELECT * FROM clientes WHERE id_cliente IN (1,3,5)
SELECT * FROM clientes WHERE id_cliente ORDER BY nombre
SELET COUNT(*) AS nombre FROM clientes WHERE nombre="salim"
SELET AVG(edad) AS edad FROM clientes
SELET MAX(edad) AS edad FROM clientes
SELET MIN(edad) AS edad FROM clientes

INSERT INTO pedidos (fecha,cantidad,id_cliente,id_producto) VALUES("2020-02-10","3","1","1");
INSERT INTO pedidos (fecha,cantidad,id_cliente,id_producto) VALUES("2020-02-12","54","2","2");
INSERT INTO pedidos (fecha,cantidad,id_cliente,id_producto) VALUES("2020-02-11","2","4","4");
INSERT INTO pedidos (fecha,cantidad,id_cliente,id_producto) VALUES("2020-02-9","2","2","5");


SELECT * FROM clientes INNER JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente

SELECT * FROM clientes LEFT JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente

SELECT * FROM clientes RIGHT JOIN pedidos ON clientes.id_cliente = pedidos.id_cliente



";
$resultado=mysql_query($conexion,$solicitud);
while($uno=mysqli_fetch_array($resultado)){
    echo $uno["nombre"] . $uno["apellido"]
};
?>