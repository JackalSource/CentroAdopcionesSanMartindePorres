<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mascota = $_POST["mascota"];
$motivo = $_POST["motivo"];

echo "Datos de la solicitud de adopción";
echo "<br><br>";

echo "Nombre: " . $nombre;
echo "<br>";

echo "Correo: " . $correo;
echo "<br>";

echo "Teléfono: " . $telefono;
echo "<br>";

echo "Mascota: " . $mascota;
echo "<br>";

echo "Motivo: " . $motivo;

?>