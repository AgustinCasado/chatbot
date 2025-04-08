<link rel="stylesheet" href="../CSS/vegebot_style.css">
<?php 
include ("conexion.php");
$sql="DELETE FROM consultas WHERE id = :id";
$stmt= $pdo->prepare($sql);
if($stmt->execute([
    'id' => $_GET['id']  // Recibimos el ID por GET (desde un enlace)
])) {
    echo "El registro se eliminó correctamente";
} else {
    echo "No se pudo eliminar el registro";
} 
?>