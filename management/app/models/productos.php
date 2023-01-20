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
        $sql = 'SELECT pro.id as id, pro.nombre as nombre,  pro.descripcion as descripcion, 
        pro.precio_normal as precio_normal, pro.precio_rebajado as precio_rebajado, 
        pro.cantidad as cantidad, pro.imagen as imagen, cat.categoria as categoria
        FROM productos pro
        inner join categorias cat ON cat.id  = pro.id_categoria 
        ORDER BY id desc';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function updateRow()
    {
        $sql = 'UPDATE invproductos 
        SET subgrupoid = ?, productoservicio = ?, codigo = ?, descripcion = ?, 
        preciolista = ?, preciolistaconiva = ? , habilitado = 1
        WHERE productoid = ?';
        $params = array($this->subgrupoid, $this->productoservicio, $this->codigo, $this->descripcion, $this->preciolista, $this->preciolistaconiva, $this->productoid);
        return Database::executeRow($sql, $params);
    }

    public function createRow()
    {
        $sql = 'INSERT INTO productos(productoid, subgrupoid, productoservicio, codigo, descripcion,preciolista, preciolistaconiva,habilitado)  
        values (lastIdProducto(),?,?,?,?,?,?,1)';
        $params = array($this->subgrupoid, $this->productoservicio, $this->codigo, $this->descripcion, $this->preciolista, $this->preciolistaconiva);
        return Database::executeRow($sql, $params);
    }

    public function deleteRow()
    {
        $sql = 'DELETE FROM productos
                WHERE id = ?';
        $params = array($this->productoid);
        return Database::executeRow($sql, $params);
    }

    public function readOne()
    {
        $sql = 'SELECT id, nombre, descripcion, precio_normal, precio_rebajado, cantidad, imagen, id_categoria 
        FROM productos
        WHERE id = ?';
        $params = array($this->productoid);
        return Database::getRow($sql, $params);
    }
}