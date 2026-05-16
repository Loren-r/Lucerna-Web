<?php
// init.php → archivo central de includes

// Definir ruta base del proyecto
define('BASE_PATH', dirname(__DIR__));

// Cargar conexión a la base de datos
require_once BASE_PATH . '/configuracion/database.php';

// Instanciar conexión global
$database = new Database();
$db = $database->connect();

// Aquí puedes cargar funciones comunes, helpers, etc.
// Ejemplo: manejo de sesiones
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>