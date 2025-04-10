<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Consultas - VegeBot777</title>
    <link rel="stylesheet" href="../CSS/vegebot_style.css">
</head>
<body>
    <header>
        <h1>Consultas Registradas</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="formAltaConsulta.php">Nueva Consulta</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <?php 
            include ('conexion.php');
            $sql = "SELECT * FROM consultas";
            $consultas = $stmt = $pdo->query($sql);

            foreach($consultas as $consulta) {
                echo "<article class='consulta'>";
                echo "<h2>Pregunta:</h2><p>" . $consulta['pregunta'] . "</p>";
                echo "<h3>Respuesta:</h3><p>" . $consulta['respuesta'] . "</p>";
                echo "<p><strong>Categoría:</strong> " . $consulta['categoria'] . "</p>";
                echo "<a class='btn' href='formEditarConsulta.php?id=" . $consulta['id'] . "'>Actualizar</a> ";
                echo "<a class='btn eliminar' href='eliminarConsulta.php?id=" . $consulta['id'] . "'>Eliminar</a>";
                echo "</article>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>© 2025 - VegeBot777 creado por Agustin Casado</p>
    </footer>
</body>
</html>
