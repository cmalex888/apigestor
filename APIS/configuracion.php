<?php

//La respuesta que va a enviar la api será JSON”
header("Content-Type: application/json; charset=UTF-8");
//Permite que cualquier origen (dominio) pueda consumir la API.
header("Access-Control-Allow-Origin: *");
//Indica qué métodos HTTP están permitidos para acceder a este endpoint.
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
//Indica qué cabeceras están permitidas en las peticiones que el cliente envía a la API.
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require_once "Database.php";

$db = new Database();
$db->conectar();

?>