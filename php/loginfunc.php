<?php


require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['correo']) && isset($_POST['contrasena'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    validateLogin($correo, $contrasena);
}

function validateLogin($correo, $contrasena) {
    foreach ($_SESSION['usuarios'] as $user) {
        if ($user['correo'] == $correo && $user['contrasena'] == $contrasena) {
            $_SESSION['current_user'] = [
                'correo' => $user['correo'],
                'rol' => $user['rol']
            ];
            
            header("Location: ../php/bienvenida.php");
            exit();
        }
    }
    header("Location: ../login.html?error=1");
    exit();
}

function editarFuncion($correo, $nuevoCorreo, $nuevaContrasena, $nuevoRol) {
    if (!isset($_SESSION['usuarios'])) {
        $_SESSION['usuarios'] = [];
    }

    foreach ($_SESSION['usuarios'] as $key => $user) {
        if ($user['correo'] == $correo) {
            $_SESSION['usuarios'][$key]['correo'] = $nuevoCorreo;
            $_SESSION['usuarios'][$key]['contrasena'] = $nuevaContrasena;
            $_SESSION['usuarios'][$key]['rol'] = $nuevoRol;

            header('Location: ../php/bienvenida.php');
            exit;
        }
    }

    return "Usuario no encontrado.";
}
?>
