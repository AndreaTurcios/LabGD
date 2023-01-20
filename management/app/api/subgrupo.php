<?php
require_once('../helpers/database.php');
require_once('../helpers/validator.php');
require_once('../models/subgrupos.php');

if (isset($_GET['action'])) {
    $subgrupos = new Subgrupos;
    $result = array('status' => 0, 'message' => null, 'exception' => null);
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $subgrupos->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No existe ningun subgrupo registrado';
                    }
                }
                break;
                 case 'readSubgrupo':
                    if ($result['dataset'] = $subgrupos->readSubgrupo()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay grupos registrados';
                        }
                    }
                    break;
                    case 'readGrupo':
                    if ($result['dataset'] = $subgrupos->readGrupo()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay grupos registrados';
                        }
                    }
                    break;
                    case 'delete':
                        if ($subgrupos->setId($_POST['subgrupoid'])) {
                            if ($data = $subgrupos->readOne()) {
                                if ($subgrupos->deleteRow()) {
                                    $result['status'] = 1;
                                    $result['message'] = 'Subgrupo eliminado correctamente'; 
                                   
                                } else {
                                    $result['exception'] = Database::getException();
                                }
                            } else {
                                $result['exception'] = 'Subgrupo inexistente';
                            }
                        } else {
                            $result['exception'] = 'Subgrupo incorrecto';
                        }
                        break;    
                    case 'create':
                        $_POST = $subgrupos->validateForm($_POST);
                            if ($subgrupos->setCodigo($_POST['codigosub'])) {
                                if ($subgrupos->setNombre($_POST['nombresub'])) {    
                                    if ($subgrupos->setGrupo($_POST['grupo_f'])) {                      
                                    if ($subgrupos->createRow()) {
                                        $result['status'] = 1;
                                        $result['message'] = 'Subgrupo registrado exitosamente';  
        
                                    } else {
                                        $result['exception'] = Database::getException();                                                        
                                    }   
                                } else {
                                    $result['exception'] = 'Grupo erroneo.';
                                }
                            } else {
                                $result['exception'] = 'Carácteres incorrectos en nombre.';
                            }
                            } else {
                                        $result['exception'] = 'Código incorrecto';
                            }
                    break; 
                    case 'readOne':
                        if ($subgrupos->setId($_POST['subgrupoid'])) {
                            if ($result['dataset'] = $subgrupos->readOne()) {
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
                        $_POST = $subgrupos->validateForm($_POST);
                        if ($subgrupos->setId($_POST['idsubg2'])) {
                            if ($data = $subgrupos->readOne()) {
                                if($subgrupos->setNombre($_POST['nombreac'])){
                                    if($subgrupos->setCodigo($_POST['codigoac'])){
                                        if ($subgrupos->setGrupo($_POST['grupoac'])) {     
                                        if ($subgrupos->updateRow()) {
                                            $result['status'] = 1;
                                            $result['message'] = 'Subgrupo actualizado correctamente';
                                        } else {
                                            $result['exception'] = Database::getException();
                                        }
                                    }else{
                                        $result['message'] = 'Grupo incorrecto';
                                    }   
                                }else{
                                    $result['message'] = 'Codigo incorrecto';
                                }   
                                }else{
                                    $result['message'] = 'Nombre incorrecto';
                                }
                            }
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
