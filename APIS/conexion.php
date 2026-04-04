<?php
$servidor = "localhost";
$usuario = "root"; // Usuario por defecto en XAMPP
$password = ""; // Contraseña por defecto en XAMPP
$base_datos = "gestor"; // Cambia por tu BD

// Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";
?>
