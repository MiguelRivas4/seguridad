<?php


include("conexion.php");


if (isset($_POST['registrar'])){
$nombre =$_POST['nombres'];
$nacimiento =$_POST['nacimiento'];
$apellido =$_POST['apellido'];
$dui =$_POST['dui'];
$pasaporte =$_POST['pasaporte'];
$paissalida =$_POST['pais-salida'];
$paisentrada =$_POST['pais-llegada'];
$horasalida =$_POST['fecha-salida'];
$horaentrada =$_POST['fecha-llegada'];
$clase =$_POST['clase'];

$query = "INSERT INTO boletos (apellido,dui,nombre,pasaporte,paisentrada,horaentrada,
paissalida,horasalida,clase,nacimiento) 
values ('$apellido','$dui','$nombre','$pasaporte','$paisentrada','$horaentrada','$paissalida','$horasalida','$clase','$nacimiento')";


$result = mysqli_query($link, $query);

if(!$result){

die("query failed");

}


echo 'saving';
}




?>