<?php
require_once 'Concesionario.php';
require_once "vehiculo.php";
require_once "coche.php";
require_once "moto.php";
require_once "camion.php";
require_once "tesla.php";


$concesionario = new Concesionario();

$coche = new coche("Toyota", "Supra", "Blanco", 4);
$moto = new moto("kawasaki", "Ninja", "Verde", 1000 );
$camion = new camion("IVECO", "S-Way", "Rojo", 5000);
$tesla = new tesla("Tesla", "Modelo S", "Negro", 4);

$concesionario->mostrarVehiculo($coche);
$concesionario->mostrarVehiculo($moto);
$concesionario->mostrarVehiculo($camion);
$concesionario->mostrarVehiculo($tesla);

echo $tesla->estadoBateria();
$tesla->cargarBateria();
echo $tesla->mover();
echo $coche->mover();
echo $moto->detener();
echo $camion->mover();

?>