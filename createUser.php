<?php

//Traemos la clase usuario para instanciar un nuevo usuario
require('User.php');

$data = array(

    'usuario' => $_POST["usuario"],
    'login' => $_POST["login"],
    'meta4' => $_POST["meta4"],
    'name' => $_POST["nombre"],
    'apellido1' => $_POST["apellido1"],
    'apellido2' => $_POST["apellido2"],
    'dni' => $_POST["dni"],
    'email' => $_POST["email"],
    'password' => hash('sha512', $_POST["password"]),
    'departamento' => $_POST["departamento"],
    'rol' => $_POST["rol"],
    'grupo' => $_POST["grupo"]
);


$usuario1 = new User($data);

var_dump($usuario1);


