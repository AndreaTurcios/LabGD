<?php
require_once('../helpers/database.php');
require_once('../helpers/validator.php');
require_once('../models/productos.php');
// En estos if lo que indicaremos es la acción a realizar, si es search, create, update, etc...

if (isset($_GET['action'])) {
    $libros = new Productos;
    $result = array('status' => 0, 'message' => null, 'exception' => null);

        switch ($_GET['action']) {
                // Esto se ejecuta en el caso del readall, ya sea al visualizar la tabla o en la accion que se indique que se quieren leer todos los datos de la tabla
            case 'readAll':
                if ($result['dataset'] = $libros->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        // En caso de que no haya ningún empleado registrado en la base de datos, nos tira este mensaje
                        $result['exception'] = 'No hay ningún producto ingresado en la base de datos';
                    }
                }
                break;
            }
        }