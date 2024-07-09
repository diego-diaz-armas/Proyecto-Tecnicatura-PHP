<?php

session_start();

if (!isset($_SESSION['current_user'])) {
    header("Location: ../login.html");
    exit();
}
$rol = $_SESSION['current_user']['rol'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloBien.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Bienvenido</title>
</head>
<body>
    
    <h1 id="bien">Bienvenido</h1>
    <section>
        <header>
            <nav>
                <ul>
                    <li><a href="../php/ver.php">Ver los trabajadores</a></li>
                    <li><a href="../html/Registro1.html">Agregar nuevos trabajadores</a></li>
                    <li><a href="../html/buscarTraba.html">Buscar trabajadores</a></li>
                    <li><a href="../html/contacto1.html">Contacto</a></li>
                    <?php if ($rol == 'Root'): ?>
                    <li><a href="../php/verFun.php">Ver Funcionarios</a></li>
                    <li><a href="../html/eliminarFunc.html">Eliminar funcionario</a></li>
                    <li><a href="../php/explicacion.php">Explicar funciones</a></li>
                    <li><a href="../php/editar.php">Editar funcionarios</a></li>
                    <?php endif; ?>
                    <li><a href="../php/logout1.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
        </header>
    </section>
</body>
</html>
