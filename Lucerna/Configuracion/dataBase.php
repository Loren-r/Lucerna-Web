<?php
// Configuración de conexión a MySQL
class Database {
    private $host = "localhost";
    private $db_name = "lucerna";
    private $username = "root";
    private $password = "";
    public $conn;

    // Método para conectar
    public function connect() {
        $this->conn = null;
        try {
            // Se crea la conexión con PDO
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                                  $this->username, $this->password);
            $this->conn->exec("set names utf8"); // Codificación UTF-8
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
