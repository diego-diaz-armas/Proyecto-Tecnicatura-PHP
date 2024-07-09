<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilofun.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Buscar Trabajadores</title>
</head>
<body>
    <h1>Buscando trabajador</h1>
<?php

require_once 'config.php';

$trabajador = null;  // Inicializa la variable $trabajador

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ci = $_POST['ci'];
    $trabajador = buscarTrabajadorPorCI($ci);
}

function buscarTrabajadorPorCI($ci) {
    if (isset($_SESSION['trabajadores']) && !empty($_SESSION['trabajadores'])) {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador['ci'] === $ci) {
                return $trabajador;
            }
        }
    }
    return null;  
}


if ($trabajador) {
    echo "<table>";
    echo "<thead><tr><th>Nombre</th><th>Apellido</th><th>Puesto</th><th>Ci</th></tr></thead>";
    echo "<tr>";
    echo "<td>" . htmlspecialchars($trabajador['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($trabajador['apellido']) . "</td>";
    echo "<td>" . htmlspecialchars($trabajador['puesto']) . "</td>";
    echo "<td>" . htmlspecialchars($trabajador['ci']) . "</td>";
    echo "</tr>";
    echo "</table>";
} else {
    echo "No se encontró un trabajador con la CI proporcionada.";
}

echo '<a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>';
?>
</body>
</html>


