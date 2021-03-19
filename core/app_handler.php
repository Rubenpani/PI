<?php

    private $petition_names;
    private $uri;
    private $uri_data;
    public $peticiones = array();
    public $args = array();

    function __construct(){

        $this->petition_names = array("modulo","modelo","recurso");
        $this->uri = $this->get_uri();
        $this->uri_data = $this->set_peticiones();
        $this->peticiones = $this->get_peticiones();
        $this->args = $this->get_parametros();


    }


    private function get_uri(){
        return str_replace(APP_PATH, "", $_SERVER['REQUEST_URI']);
    }

    private function set_peticiones(){
        return explode("/", $this->uri);
    }

    private function get_long(){
        $partes = count($this->uri_data);
        return ($partes > 3) ? 3 : $partes;
    }

    private function get_peticiones(){
        $long = $this->get_long();
        $arr = array_combine(array_slice($this->petition_names, 0, $long), array_slice($this->uri_data, 0, $long));

        foreach($arr as $clave=>$valor) {
            if(empty($valor)) unset ($arr[$clave]);
        }

        return $arr;
    }

    private function get_parametros(){
        return array_slice($this->uri_data, $this->get_long(), count($this->uri_data));
    }






?>










