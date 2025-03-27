<?php 
//conectamos con la base de datos 
include ('conexion.php');
//armamos la consulta
$sql ="SELECT * FROM consultas";
//ejecutamos la consulta 
$consultas=$stmt= $pdo-> query ($sql);
//4 mostrarmos datos provenientes de la base de datos
foreach($consultas as $consulta){
    echo "<b>Pregunta</b>".$consulta ['pregunta']."<br/>";;
    echo "<b>Respuesta</b>".$consulta ['respuesta']."<br/>";;
    echo "<b>Categoria</b>".$consulta ['categoria']. "<br>";
    echo "<a name='actualizar' href='formEditarConsulta.php?id=".$consulta[ 'id']."'> Actualizar </a>";
    echo "<br/><br/>";
}
?>