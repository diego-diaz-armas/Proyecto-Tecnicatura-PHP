

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        echo "<h1>Su mensaje enviado es </h1>";
        echo "<br>";
        echo "<p>Su correo es:    $correo</p>";
        echo "<p>Su asunto es:    $asunto</p>";
        echo "<p>Su mensaje es:   $mensaje</p>";
        echo "<br>";
        echo "<h3>Su mensaje sera respondido a la brevedad </h3>";
    }
    echo '<a href="../php/bienvenida.php" class="button">Ir a bienvenida</a>';
    ?>
    
    
