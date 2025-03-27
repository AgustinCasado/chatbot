<?php 
include ("conexion.php");
$sql = "INSERT INTO consultas (pregunta, respuesta, categoria) VALUES (:pregunta,:respuesta,:categoria)";
$stmt= $pdo->prepare($sql);
if($stmt->execute([
    'pregunta'=>$_POST['pregunta'],
    'respuesta'=>$_POST['respuesta'],
    'categoria'=>$_POST['categoria']
    ])  ) {
        echo "El registro se cargo correctamente";
    }else{
        echo "el Registro se cargo incorrectamente";
    }
    echo "<a href='listarConsultas.php'><br> Volver </a>"
?> 