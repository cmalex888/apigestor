<?php

// ENDPOINT POST - log.php 
// POST http://localhost/apis/log.php

require_once "configuracion.php";

$input = json_decode(file_get_contents("php://input"), true);

$usuario = $input["user"] ?? "";
$clave   = $input["contra"] ?? "";

if ($usuario === "" || $clave === "") {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

$usuarioEncontrado = $db->buscarUsuario($usuario, $clave);

if ($usuarioEncontrado) {
    echo json_encode([
        "success" => true,
        "mensaje" => "Usuario encontrado",
        "usuario" => $usuarioEncontrado
    ]);
} else {
    echo json_encode([
        "success" => false,
        "mensaje" => "Usuario o contraseña incorrectos"
    ]);
}

?>