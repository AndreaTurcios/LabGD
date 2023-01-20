<?php
require_once('../helpers/database.php');
require_once('../helpers/validator.php');
require_once('../models/productos.php');

if (isset($_GET['action'])) {

    $productos = new Productos;
    $result = array('status' => 0, 'message' => null, 'exception' => null);

        switch ($_GET['action']) {

            case 'readAll':
                if ($result['dataset'] = $productos->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay productos registrados';
                    }
                }
                break;
                case 'readOne':
                    if ($productos->setId($_POST['productoid'])) {   
                        if ($result['dataset'] = $productos->readOne()) {
                            $result['status'] = 1;
                        } else {
                            if (Database::getException()) {
                                $result['exception'] = Database::getException();
                            } else {
                                $result['exception'] = 'Producto inexistente';
                            }
                        }
                    } else {
                        $result['exception'] = 'Producto incorrecto';
                    }
                break;    

            case 'create':
                $_POST = $productos->validateForm($_POST);
                if($productos->setSubGrupoId($_POST['subgrupopro'])){
                        if($productos->setProductoServicio($_POST['serviciopro'])){
                                if($productos->setCodigo($_POST['codigopro'])){
                                    if($productos->setDescripcion($_POST['descripcionpro'])){
                                        if($productos->setPrecioLista($_POST['preciolistapro'])){
                                            if($productos->setPrecioListaConIVA($_POST['preciolistaproiva'])){
        
                                                    if ($productos->createRow()) {
                                                        $result['status'] = 1;
                                                        $result['message'] = 'Producto creado correctamente';
                                                        
                                                    } else {
                                                        $result['exception'] = Database::getException();
                                                    }
                                           
                                        }else{
                                            $productos['message'] = 'Precio lista iva Incorrecto';
                                        }
                                    }else{
                                        $productos['message'] = 'Precio lista Incorrecto';
                                    }
                                }else{
                                    $productos['message'] = 'Descripcion Incorrecta';
                                }

                        }else{
                            $productos['message'] = 'Codigo Incorrecto';    
                        }
                    }else{
                        $productos['message'] = 'Servicio incorrecto';
                    }

                }else{
                    $productos['message'] = 'Subgrupo Incorrecto';
                }
                break;
                case 'update':
                    $_POST = $productos->validateForm($_POST);
                    if ($productos->setId($_POST['productoidac'])) {
                        if ($data = $productos->readOne()) {
                    if($productos->setSubGrupoId($_POST['subgrupoac'])){
                            if($productos->setProductoServicio($_POST['servicioacpro'])){
                                    if($productos->setCodigo($_POST['codigoproac'])){
                                        if($productos->setDescripcion($_POST['descripcionacpro'])){
                                            if($productos->setPrecioLista($_POST['preciolistaact'])){
                                                if($productos->setPrecioListaConIVA($_POST['preciolistaivaac'])){
                                                        if ($productos->updateRow()) {
                                                            $result['status'] = 1;
                                                            $result['message'] = 'Producto actualizado correctamente';
                                                            
                                                        } else {
                                                            $result['exception'] = Database::getException() + 'Producto aaa';
                                                        }
                                              
                                            }else{
                                                $result['message'] =  'Precio lista iva Incorrecto';
                                            }
                                            }else{
                                                $result['message'] = 'Precio lista Incorrecto';
                                            }
                                        }else{
                                            $result['message'] = 'Descripcion Incorrecta';
                                        }
                                    }else{
                                        $result['message'] = 'Codigo Incorrecto';
                                    }
    
                            }else{
                                $result['message'] = 'Servicio Incorrecto';    
                            }
                        }else{
                            $result['message'] = 'Subgrupo incorrecto';
                        }
    
                    }else{
                        $result['message'] = 'Producto Incorrecto';
                    }
                }
                    break;
            case 'delete':
                    if ($productos->setId($_POST['productoidac'])) {
                        if ($data = $productos->readOne()) {
                            if ($productos->deleteRow()) {
                                $result['status'] = 1;
                                $result['message'] = 'Producto eliminado correctamente';
    
                            } else {
                                $result['exception'] = Database::getException();
                            }
                        } else {
                            $result['exception'] = 'Producto inexistente';
                        }
                    } else {
                        $result['exception'] = 'Producto incorrecto';
                    }
                break;
            default:
                    $result['exception'] = 'Acción no disponible dentro de la sesión';

        }
        header('content-type: application/json; charset=utf-8');
        print(json_encode($result));
    } else {
        print(json_encode('Acceso denegado'));
    }
