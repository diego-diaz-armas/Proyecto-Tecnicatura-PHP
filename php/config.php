<?php
session_start();
if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios']=[
        ['correo' => 'diego','contrasena' => '1234','rol' => 'Root'],
        ['correo' => 'bruno','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'juan','contrasena' => '1234','rol' => 'Root'],
        ['correo' => 'matias','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'eduardo','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'rambo','contrasena' => '1234','rol' => 'Root'],
        ['correo' => 'pepe','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'carlos','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'mario','contrasena' => '1234','rol' => 'Administrativo'],
        ['correo' => 'luis','contrasena' => '1234','rol' => 'Administrativo'],

    ];
    
    $_SESSION['trabajadores']=[
        ['nombre' => 'luis','apellido' => 'Gonzales','puesto' => 'Capatas','ci'=>'12345678'],
        ['nombre' => 'eduardo','apellido' => 'Diaz','puesto' => 'Peon','ci'=>'98765432'],
        ['nombre' => 'matias','apellido' => 'Armas','puesto' => 'Peon','ci'=>'12345670'],
    
    ];
}

?>