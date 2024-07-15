<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilofun.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Eliminar</title>
</head>
<body>
<h1>Eliminar funcionario</h1>
<?php

require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $puesto = $_POST['puesto'];


        DeleteFuncion($nombre,  $puesto);
    
    }
    function DeleteFuncion($nombre, $puesto) {

        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
        
        // Verificar si el usuario ya está registrado
        foreach ($_SESSION['usuarios'] as $key => $user) {
            if ($user['correo'] == $nombre && $user['rol'] == $puesto) {
                unset($_SESSION['usuarios'][$key]); 
                return "Usuario eliminado correctamente.";

                header('Location: ../html/eliminarFunc.html');
                exit;
            }   
        }       
    }

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
        echo '<a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>';
        
?>
</body>
</html>