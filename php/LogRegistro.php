<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloregis.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Registo</title>
</head>
<body>
    <header>Registro de Empleados </header>
    <div>
<?php

require_once 'config.php';

              
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $puesto = $_POST['puesto'];
        $ci = $_POST['ci'];

    $mensaje = registerUser($nombre, $apellido, $puesto,$ci);
}


// Función para registrar un nuevo usuario
function registerUser($nombre, $apellido, $puesto,$ci) {

if (!isset($_SESSION['trabajadores'])) {
    $_SESSION['trabajadores'] = [];
}

// Verificar si el usuario ya está registrado
foreach ($_SESSION['trabajadores'] as $user) {
    if ($user['nombre'] == $nombre) {
        return "El usuario ya está registrado.";

    }
}

// Registrar el nuevo usuario
$_SESSION['trabajadores'][] = [
    'nombre' => $nombre,
    'apellido' => $apellido,
    'puesto' => $puesto,
    'ci' => $ci,
];
return "Registro exitoso.";

}


if (isset($_SESSION['trabajadores']) && !empty($_SESSION['trabajadores'])) {   
     
echo "<table>";
echo "<thead><tr><th>Nombre</th><th>Apellido</th><th>Puesto</th><th>Ci</th></tr></thead>";
foreach ($_SESSION['trabajadores'] as $user) {
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . htmlspecialchars($user['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($user['apellido']) . "</td>";
    echo "<td>" . htmlspecialchars($user['puesto']) . "</td>";
    echo "<td>" . htmlspecialchars($user['ci']) . "</td>";
    echo "</tr>";
    echo "</tbody>";
}
    echo "</table>";
    } else {
    echo "<p>No hay usuarios registrados.</p>";
    }
?>
    </div>
    <a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>
</body>
</html>

