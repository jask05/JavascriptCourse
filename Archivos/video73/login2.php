<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();

if ($el_usuario=="Juan") {
  
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
	$json = json_encode($el_array);
	echo $json;


}

if ($el_usuario=="María") {
  
	$el_array->Nombre = "María";
	$el_array->Apellido = "Núñez";
	$el_array->Edad = "31";
	$json = json_encode($el_array);
	echo $json;
}

if ($el_usuario=="Raúl") {
  
	$el_array->Nombre = "Raúl";
	$el_array->Apellido = "Martínez";
	$el_array->Edad = "87";
	$json = json_encode($el_array);
	echo $json;


}

?>