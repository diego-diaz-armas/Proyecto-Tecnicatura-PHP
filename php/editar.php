<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloReg.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Editar</title>
</head>
<body>
    <h1>Editar funcionarios</h1>

    <form method="POST" action="">
        <label for="correo">Correo actual:</label>
        <input type="text" name="correo" required><br>
        
        <label for="nuevoCorreo">Nuevo correo:</label>
        <input type="text" name="nuevoCorreo" required><br>
        
        <label for="nuevaContrasena">Nueva contraseña:</label>
        <input type="password" name="nuevaContrasena" required><br>
        
        <label for="nuevoRol">Nuevo rol:</label>
        <input type="text" name="nuevoRol" required><br>
        
        <input type="submit" value="Editar">
    </form>

    <?php

    require_once 'config.php';
    require_once 'loginfunc.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $correo = $_POST['correo'] ?? null;
        $nuevoCorreo = $_POST['nuevoCorreo'] ?? null;
        $nuevaContrasena = $_POST['nuevaContrasena'] ?? null;
        $nuevoRol = $_POST['nuevoRol'] ?? null;

        echo editarFuncion($correo, $nuevoCorreo, $nuevaContrasena, $nuevoRol);
    }

    echo "<section>";
    if (isset($_SESSION['usuarios']) && !empty($_SESSION['usuarios'])) {
        echo "<table>";
        echo "<thead><tr><th>Funcionario</th><th>Puesto</th></tr></thead>";
        foreach ($_SESSION['usuarios'] as $user) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($user['correo']) . "</td>";
            echo "<td>" . htmlspecialchars($user['rol']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay usuarios registrados.</p>";
    }
    echo "</section>";
    ?>
    <a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>
</body>
</html>


