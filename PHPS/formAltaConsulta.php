<form name="formAltaConsulta" method="Post" action="altaConsulta.php" method ="POST">
    <!-- Campo para la pregunta -->
    <label for=""> Pregunta </label>
    <input type="text" name="pregunta" id="pregunta" class="" /> <br>

    <!-- Campo para la respuesta -->
    <label for=""> Respuesta </label>
    <input type="text" name="respuesta" id="respuesta" class="" /> <br>

    <!-- Menú desplegable para seleccionar la categoría -->
    <select name="categoria" id="categoria">
        <option value="Sistema Operativo"> Sistema Operativo </option>
        <option value="Seguridad"> Seguridad </option>
        <option value="Compatibilidad"> Compatibilidad </option>
        <option value="Hardware"> Hardware </option>
        <option value="Software"> Software </option>
    </select>

    <!-- Botón para enviar el formulario -->
    <input type="submit" value="Enviar pregunta">
</form>