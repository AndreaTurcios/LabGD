<?php

class Productos extends Validator
{   

    private $productoid = null;
    private $subgrupoid = null;
    private $productoservicio = null;
    private $codigo = null;
    private $descripcion = null;
    private $preciolista = null;
    private $preciolistaconiva = null;
    private $habilitado = null;

    public function setId($value){
        if ($this->validateNaturalNumber($value)) {
            $this->productoid = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setSubGrupoId($value){
        if ($this->validateNaturalNumber($value)) {
            $this->subgrupoid = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setProductoServicio($value){
        if ($this->validateAlphabetic($value, 1 , 140)) {
            $this->productoservicio= $value;
            return true;
        } else {
            return false;
        }
    }

    public function setCodigo($value){
        if ($this->validateAlphanumeric($value, 1, 200)) {
            $this->codigo = $value;
            return true;
        } else {
            return false;
        }
    }


    public function setDescripcion($value){
        if ($this->validateAlphanumeric($value, 1, 200)) {
            $this->descripcion= $value;
            return true;
        } else {
            return false;
        }
    }

    public function setPrecioLista($value){
        if ($this->validateAlphanumeric($value, 1, 200)) {
            $this->preciolista= $value;
            return true;
        } else {
            return false;
        }
    }

    public function setPrecioListaConIVA($value){
        if ($this->validateAlphanumeric($value, 1, 200)) {
            $this->preciolistaconiva= $value;
            return true;
        } else {
            return false;
        }
    }

    public function setHabilitado($value){
        if ($this->validateNaturalNumber($value)) {
            $this->habilitado = $value;
            return true;
        } else {
            return false;
        }
    }

    public function getId(){
        return $this->productoid;
    }

    public function getSubGrupoId(){
        return $this->subgrupoid;
    }

    public function getProductoServicio(){
        return $this->productoservicio;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getPrecioLista(){
        return $this->preciolista;
    }

    public function getPrecioListaConIVA(){
        return $this->preciolistaconiva;
    }

    public function getHabilitado(){
        return $this->habilitado;
    }

    public function readAll()
    {
        $sql = 'SELECT id, nombre, descripcion, precio_normal, precio_rebajado, cantidad, imagen, id_categoria from productos
        ORDER BY id desc ';
        $params = null;
        return Database::getRows($sql, $params);
    }

}