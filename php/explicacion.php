<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloBien.css">
    <link rel="icon" href="../imagen/favicon.png" type="image/x-icon">
    <title>Explicacion de los metodos</title>
</head>
<body><strong></strong>
    <?php
        echo "<h1>Explicacion de los metodos</h1>";
        echo "<section>";
        echo "<p>Por motivos de organizacion las funciones estan separadas dentro de la carpeta php.</p>";
        echo "<br>";
        echo "<p>Comenzamos con el inicio  que es nuestro <strong>login.html</strong> es la rama principal del sitio,<br>
                posee un form que envia los datos a <strong>loginfunc.php</strong> que se encarga de validar el login.</p>";

        echo "<p>Dentro de <strong>loginfunc.php</strong> tenemos el metodo <strong>validateLogin</strong> que es el encargado de validar en el array<br>
                usuarios los datos enviados del post busca la contraseña y el usuario dentro del array y nos envia a <strong>bienvenida.php</strong>.";

        echo "<p>Continuamos <strong>bienvenida.php</strong> al contiene un script de php para saber si el usuario que se inicio es Root<br>
                y pose el direccionamiento a todas las funciones del sistema hay rutas que solo la pueden ver los Root.</p>";

        echo "<p>Luego continumaos con <strong>logRegistro.php</strong> que es el encargado de agregar trabajadores dentro del array<br>
                registerUser que se encarja de ver si el array trabajadores existe y si no esta vacio lo recorre<br>
                y muestra en pantalla cada ususario.</p>";

        echo "<p>Continuamos con <strong>eliminar.php</strong> dentro posee una funcion llamada <strong>DeleteFuncion</strong><br>
                que recibe 2 parametros nombre y puesto los busca dentro de el array usuarios y los elimina con un <strong>unset</strong>.</p>";
        
        echo "<p>Siguiente dentro del archivo <strong>logout1.php</strong> encontramos el metodo <strong>logout</strong> es la encargada <br>
                de terminar y destruir la session.</p>";
        
        echo "</section>";
        echo '<a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>';
    ?>
</body>
</html>