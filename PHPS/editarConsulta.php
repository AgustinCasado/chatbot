<link rel="stylesheet" href="../CSS/vegebot_style.css">
<?php 
include ("conexion.php");
$sql = "UPDATE consultas SET  pregunta = :pregunta,  respuesta = :respuesta,  categoria = :categoria WHERE id = :id";
$stmt= $pdo->prepare($sql);
if($stmt->execute([
    'pregunta'=>$_POST['pregunta'],
    'respuesta'=>$_POST['respuesta'],
    'categoria'=>$_POST['categoria'],
    'id'=>$_POST ['id']
    ])  ) {
        echo "El registro se cargo correctamente";
    }else{
        echo "el Registro se cargo incorrectamente";
    }
    echo "<a href='listarConsultas.php'><br> Volver </a>"
?> 