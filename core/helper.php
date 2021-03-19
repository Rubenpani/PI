<?php 

//Modifica los nombres de las variables que provienen del array de la URL
class Helper {

    static function set_controller_name($modelo){
        return str_replace("-", "", ucwords($modelo)) . "Controller";

    }

    static function set_method_name($recurso){
        return str_replace("-", "_", $recurso) . "_controller";

    }



}


?>