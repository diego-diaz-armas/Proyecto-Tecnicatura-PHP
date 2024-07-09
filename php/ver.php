<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloVer.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>VerTrabajadores</title>
</head>
<body>
    <div>
        <h1>Ver Trabajadores</h1>
        <?php

             require_once 'config.php';

        if (isset($_SESSION['trabajadores']) && !empty($_SESSION['trabajadores'])) {        
            echo "<table>";
            echo "<thead><tr><th>Empleados</th><th>Apellido</th><th>Puesto</th><th>Ci</th></tr></thead>";
            foreach ($_SESSION['trabajadores'] as $user) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($user['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($user['apellido']) . "</td>";
                echo "<td>" . htmlspecialchars($user['puesto']) . "</td>";
                echo "<td>" . htmlspecialchars($user['ci']) . "</td>";
                echo "</tr>";
            }
                echo "</table>";
                
            
            } else {
                echo "<p>No hay usuarios registrados.</p>";
            }
            echo '<a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>';
            
        ?>
    </div>
</body>
</html>