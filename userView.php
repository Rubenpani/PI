<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    -->
    <title><?php echo (basename($_SERVER['PHP_SELF'])); ?></title>

    <style>
    /* label color */
    .input-field label {
     color: #000;
    }
    /* label focus color */
    .input-field input[type=text]:focus + label {
     color: red;
    }
    /* label underline focus color */
    .input-field input[type=text]:focus {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
    }
     /* valid color */
    .input-field input[type=text].valid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
    }
    /* invalid color */
    .input-field input[type=text].invalid {
     border-bottom: 1px solid #000;
     box-shadow: 0 1px 0 0 #000;
    }
    /* icon prefix focus color */
    .input-field .prefix.active {
     color: #000;
    }
    </style>

</head>
<body>


    <!-- $data = array(
    'id' => $_POST[0],
    'usuario' => $_POST[1],
    'login' => $_POST[2],
    'meta4' => $_POST[3],
    'name' => $_POST[4],
    'apellido1' => $_POST[5],
    'apellido2' => $_POST[6],
    'dni' => $_POST[7],
    'email' => $_POST[8],
    'password' => $_POST[9],
    'departamento' => $_POST[10],
    'rol' => $_POST[11],
    'grupo' => $_POST[12]
    ); -->

    <h3>FORMULARIO DE ALTA DE USUARIOS</h3>
    <div class="row">
        <form action="createUser.php" method="post" class="col s12">

            <div class="row">
                <div class="input-field col s4">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" class="validate" name="usuario">
                </div>
                <div class="input-field col s4">
                    <label for="login">Login</label>
                    <input id="login" type="text" class="validate" name="login">
                </div>
                <div class="input-field col s4">
                    <label for="meta4">Meta4</label>
                    <input id="meta4" type="text" class="validate" name="meta4">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" type="text" class="validate" name="nombre">
                </div>
                <div class="input-field col s4">
                    <label for="apellido1">Apellido1</label>
                    <input id="apellido1" type="text" class="validate" name="apellido1">
                </div>
                <div class="input-field col s4">
                    <label for="apellido2">Apellido2</label>
                    <input id="apellido2" type="text" class="validate" name="apellido2">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <label for="dni">DNI</label>
                    <input id="dni" type="text" class="validate" name="dni">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="validate" name="email">
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s4">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="validate" name="password">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <label for="departamento">Departamento</label>
                    <input id="departamento" type="text" class="validate" name="departamento">
                </div>
                <div class="input-field col s4">
                    <label for="rol">Rol</label>
                    <input id="rol" type="text" class="validate" name="rol">
                </div>
                <div class="input-field col s4">
                    <label for="grupo">Grupo</label>
                    <input id="grupo" type="text" class="validate" name="grupo">
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">
                    <input id="boton" type="submit" value="Enviar" name="boton">
                </div>
            </div>

        </form>
    </div>

    
</body>
</html>
