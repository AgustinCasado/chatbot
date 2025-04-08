<link rel="stylesheet" href="../CSS/vegebot_style.css">
<?php 
// Definimos constantes para los datos de conexión
define("servidor", "localhost");
define("usuario", "root");
define("password", "");
define("database", "chatbot_db");

try {
    // Intentamos crear una conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=" . servidor . ";dbname=" . database . ";charset=utf8", usuario, password);

    // Configuramos PDO para que lance excepciones en caso de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mostramos un mensaje de éxito si la conexión es exitosa
} catch (PDOException $e) {
    // Si hay un error, lo capturamos y mostramos un mensaje de error
    echo "Error de conexión: " . $e->getMessage();
}
//lo hice yo pero le dije a ChatGPT que lo comente y me lo explique asi me queda mas facil
?>