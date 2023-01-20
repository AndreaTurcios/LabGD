<?php
require_once('../helpers/database.php');
require_once('../helpers/validator.php');
require_once('../models/grupos.php');
if (isset($_GET['action'])) {
    $grupos = new Grupos;
    $result = array('status' => 0, 'message' => null, 'exception' => null);
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $grupos->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay ningún grupo ingresado en la base de datos';
                    }
                }
                break;   
                case 'graficaGrupo':
                    if ($result['dataset'] = $grupos->graficaGrupo()) {
                         $result['status'] = 1;
                    } else {
                         if (Database::getException()) {
                               $result['exception'] = Database::getException();
                         } else {
                               $result['exception'] = 'No hay datos registrados';
                         }
                    }						                    
                break;	
                case 'create':
                    $_POST = $grupos->validateForm($_POST);
                        if ($grupos->setCodigo($_POST['codigo'])) {
                            if ($grupos->setNombre($_POST['nombre'])) {                      
                                                        if ($grupos->createRow()) {
                                                              $result['status'] = 1;
                                                              $result['message'] = 'Grupo registrado exitosamente';  
    
                                                          } else {
                                                              $result['exception'] = Database::getException();                                                        
                                                          }   
                                    } else {
                                        $result['exception'] = 'Carácteres incorrectos en nombre.';
                                    }
                                } else {
                                    $result['exception'] = 'Código incorrecto';
                                }
                    break; 
                    case 'readOne':
                        if ($grupos->setId($_POST['grupoid'])) {
                            if ($result['dataset'] = $grupos->readOne()) {
                                $result['status'] = 1;
                            } else {
                                if (Database::getException()) {
                                    $result['exception'] = Database::getException();
                                } else {
                                    $result['exception'] = 'No existe el respectivo pais';
                                }
                            }
                        } else {
                            $result['exception'] = 'Grupo incorrecto';
                        }
                        break;

                    case 'update':
                        $_POST = $grupos->validateForm($_POST);
                        if ($grupos->setId($_POST['grupoidac'])) {
                            if ($data = $grupos->readOne()) {
                                if($grupos->setNombre($_POST['nombre_ac'])){
                                    if($grupos->setCodigo($_POST['codigo_ac'])){
                                        if ($grupos->updateRow()) {
                                            $result['status'] = 1;
                                            $result['message'] = 'Grupo actualizado correctamente';
                                        } else {
                                            $result['exception'] = Database::getException();
                                        }
                                    }else{
                                        $result['message'] = 'Codigo postal incorrecto';
                                    }   
                                }else{
                                    $result['message'] = 'Nombre de grupo incorrecto';
                                }
                            }
                        }   
                        break;
                        case 'delete':
                            if ($grupos->setId($_POST['grupoid'])) {
                                if ($data = $grupos->readOne()) {
                                    if ($grupos->deleteRow()) {
                                        $result['status'] = 1;
                                        $result['message'] = 'Grupo eliminado correctamente'; 
                                       
                                    } else {
                                        $result['exception'] = Database::getException();
                                    }
                                } else {
                                    $result['exception'] = 'Grupo inexistente';
                                }
                            } else {
                                $result['exception'] = 'Grupo incorrecto';
                            }
                            break;    
            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
        header('content-type: application/json; charset=utf-8');
        print(json_encode($result));
} else {
    print(json_encode('Recurso no disponible'));
}