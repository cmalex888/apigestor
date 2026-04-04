<?php
// ENDPOINT POST - regis.php 
// POST http://localhost/apis/regis.php

require_once "configuracion.php";

$input = json_decode(file_get_contents("php://input"), true);

$usuario   = $input["user"] ?? "";
$clave     = $input["contra"] ?? "";
$nombre    = $input["nombre"] ?? "";
$apellidos = $input["apellidos"] ?? "";
$celular   = $input["celular"] ?? "";

if ($usuario === "" || $clave === "") {
    echo json_encode(["error" => "Usuario y contraseña son obligatorios"]);
    exit;
}

if ($db->usuarioExiste($usuario)) {
    echo json_encode(["error" => "El usuario ya existe"]);
    exit;
}

$ok = $db->agregarUsuario($usuario, $clave, $nombre, $apellidos, $celular);

if ($ok) {
    echo json_encode(["success" => true, "mensaje" => "Usuario registrado.."]);
} else {
    echo json_encode(["success" => false, "mensaje" => "Error al registrar usuario.."]);
}

?>