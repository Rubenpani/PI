<?php 

class FrontController {

    private static $app_data;
    public static $error = NULL;

    public static function run(){
        self::$app_data = new AppHandler();
        if(!self::call_controller()) {
            self::$error = "El recurso solicitado no se encuentra disponible";
        }
        
    }

    private static function call_controller(){
        extract(self::$app_data->peticiones); //Convierte las claves y valores del array en variables
        if(isset($modulo) && isset($modelo) && isset($recurso)){
            require_once("$modulo/controllers/$modelo.php");//Importamos el controlador
            $controller = Helper::set_controller_name($modelo);//Utilizamos un helper para obtener nombres adecuados
            $method = Helper::set_method_name($recurso);
            $c = new $controller($method, self::$app_data->args);//Instanciamos la clase del controlador pasándole el recurso y los argumentos.
            return True;
        }

    }





}





?>