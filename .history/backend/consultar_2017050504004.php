<?php

require "conexion.php";

$conexion = new Conexion();


extract($_REQUEST);

$sql = "SELECT
bodega.id_bodega,
proveedor.nombre as proveedor,
producto.nombre as producto,
bodega.cantidad
FROM
bodega
INNER JOIN producto ON bodega.id_producto = producto.id_producto
INNER JOIN proveedor ON bodega.id_proveedor = proveedor.id_proveedor";

$query = $conexion->query($sql);

$results = $query->fetchAll(PDO::FETCH_ASSOC);

print json_encode($results);