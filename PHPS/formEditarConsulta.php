<link rel="stylesheet" href="../CSS/vegebot_style.css">
<?php 
//1- conectarnos a la base de datos
include ("conexion.php");
//2-preparar la consulta
$sql="SELECT * FROM consultas WHERE id =(:id)";
//3-ejecutar la consulta
$stmt= $pdo->prepare ($sql);
$stmt-> execute (['id' => $_GET [ 'id']]);
//4-mostrar los datos
if($consulta = $stmt-> fetch(PDO::FETCH_ASSOC) ){

?>
<form name="formEditarConsulta" method="POST" action="editarConsulta.php">   
    <label for=""> Id: </label>
    <input type="text" name="id" value="<?=$consulta['id'];?>" readonly class="" /> <br>
    <!-- Campo para la pregunta -->
    <label for=""> Pregunta: </label>
    <input type="text" name="pregunta" id="pregunta" value="<?=$consulta['pregunta'];?>" class="" /> <br>

    <!-- Campo para la respuesta -->
    <label for=""> Respuesta: </label>
    <input type="text" name="respuesta" id="respuesta" value="<?=$consulta['respuesta'];?>" class="" /> <br>

    <!-- Menú desplegable para seleccionar la categoría -->
    <select name="categoria" id="categoria">
        <option value ="<?=$consulta['categoria'];?>" selected> <?=$consulta['categoria'];?></option>   
        <option value="Sistema Operativo"> Sistema Operativo </option>
        <option value="Seguridad"> Seguridad </option>
        <option value="Compatibilidad"> Compatibilidad </option>
        <option value="Hardware"> Hardware </option>
        <option value="Software"> Software </option>
    </select>   
    <!-- Botón para enviar el formulario -->
    <input type="submit" value="Enviar pregunta">
</form>

<?php 
}else{
    echo "el registro seleccionado no existe";
}
?>