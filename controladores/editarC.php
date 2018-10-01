<?php

include "../clases/conexion.php";
include "../clases/tienda.php";

$objConexion = new conexion();
$objTienda = new tienda();

$Conexion = $objConexion->conectar();
echo $objTienda->editar($Conexion, $_POST['id'], $_POST['nombre'], $_POST['descripcion'], 
$_POST['codigo']);

echo "<br><a href='../menu.html'><button>Volver Al menu</button></a>";
echo "<br><a href='../index.html'><button>Volver Al inicio</button></a>";