<?php

/**
 * Clase para crear un usuario
 */

class User
{

    /*protected $id = '';
    protected $usuario = '';
    protected $login = '';
    protected $meta4 = '';
    protected $name = '';
    protected $apellido1 = '';
    protected $apellido2 = '';
    protected $dni = '';
    protected $email = '';
    protected $password = '';
    protected $departamento = '';
    protected $rol = '';
    protected $grupo = '';*/

    protected $data = array(

        'usuario' => '',
        'login' => '',
        'meta4' => '',
        'name' => '',
        'apellido1' => '',
        'apellido2' => '',
        'dni' => '',
        'email' => '',
        'password' => '',
        'departamento' => '',
        'rol' => '',
        'grupo' => ''
    );


    public function __construct($data)
    {
        $this->data = $data;
        gettype($data);
    }
}
