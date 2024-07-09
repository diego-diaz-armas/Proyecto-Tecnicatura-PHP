<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilofun.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>VerTrabajadores</title>
</head>
<body>
    <div>
        <h1>Ver funcionarios</h1>
        <?php

             require_once 'config.php';

             
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
    </div>
</body>
</html>