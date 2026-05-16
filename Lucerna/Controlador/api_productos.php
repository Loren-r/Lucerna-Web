
<?php
header("Content-Type: application/json; charset=UTF-8");

// Permite que el navegador haga peticiones fetch sin problemas
header("Access-Control-Allow-Origin: *");

// Importar clase database
require_once "../Configuracion/dataBase.php";

// Crear objeto de la clase Database
$database = new dataBase();

// Abrir la conexión (PDO)
$conn = $database->connect();

// Si la conexión falló, devolver error en JSON 
if (!$conn) {
    echo json_encode([
        "ok" => false,
        "error" => "No se pudo conectar a la base de datos"
    ]);
    exit;
}

// filtr por GET 
$categoria = isset($_GET["categoria"]) ? trim($_GET["categoria"]) : "";

// Preparar la consulta SQL según haya o no categoría
if ($categoria !== "") {
    // filtra
    $sql = "SELECT id_vela AS id, nombre, precio, imagen, descripcion
            FROM velas
            WHERE categoria = :categoria";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":categoria", $categoria, PDO::PARAM_STR);
} else {
    // traemos todas las velas
    $sql = "SELECT id_vela AS id, nombre, precio, imagen, descripcion
            FROM velas";
    $stmt = $conn->prepare($sql);
}

// Ejecutar la consulta
$stmt->execute();

// Traer resultados como un array asociativo (cada fila es un producto)
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Devolver el JSON final (con ok=true y el array)
echo json_encode([
    "ok" => true,
    "productos" => $productos
], JSON_UNESCAPED_UNICODE);
