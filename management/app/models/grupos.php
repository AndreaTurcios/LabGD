<?php
class Grupos extends Validator{
    private $grupoid = null;
    private $codigo = null;
    private $nombre = null;

    public function setId($value)
    {
        if ($this->validateNaturalNumber($value)) {
            $this->grupoid = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setCodigo($value)
    {
        if ($this->validateAlphanumeric($value, 1, 50)) {
            $this->codigo = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setNombre($value)
    {
        if ($this->validateString($value, 1, 250)) {
            $this->nombre = $value;
            return true;
        } else {
            return false;
        }
    }

    public function getId()
    {
        return $this->grupoid;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function readAll()
    {
        $sql = 'SELECT grupoid, codigo, nombre, grupoid
        FROM invgrupos
        ORDER BY grupoid desc';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function graficaGrupo()
    {
        $sql ='SELECT descripcion, COUNT(subgrupoid) as cantidad
        From invproductos 
        Group by descripcion order by cantidad desc
        limit 5';
        $params = null;
        return Database::getRows($sql, $params);
    }
    

    public function ultimoRegistro()
    {
        $sql = 'SELECT MAX(grupoid) +1
        FROM invgrupos';
        $params = null;
        return Database::executeRow($sql, $params);
    }
    public function createRow()
    {
        $sql = 'INSERT INTO invgrupos(grupoid,codigo, nombre)
        VALUES (lastIdGrupo(),? ,?)';
        $params = array($this->codigo,$this->nombre);
        return Database::executeRow($sql, $params);
    }

    public function readOne()
    {
        $sql = 'SELECT grupoid, nombre, codigo
                FROM invgrupos
                WHERE grupoid = ?';
        $params = array($this->grupoid);
        return Database::getRow($sql, $params);
    }

    public function updateRow()
    {
        $sql = 'UPDATE invgrupos
                SET nombre= ?,codigo= ?
                WHERE grupoid = ?';
        $params = array($this->nombre,$this->codigo,$this->grupoid);
        return Database::executeRow($sql, $params);
    }
    public function deleteRow()
    {
        $sql = 'DELETE FROM invgrupos
                WHERE grupoid = ?';
        $params = array($this->grupoid);
        return Database::executeRow($sql, $params);
    }
}