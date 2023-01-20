<?php
class Subgrupos extends Validator
{
    private $subgrupoid = null;
    private $grupoid = null;
    private $codigo = null;
    private $nombre = null;

    public function setId($value)
    {
        if ($this->validateNaturalNumber($value)) {
            $this->subgrupoid = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setGrupo($value)
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
        if ($this->validateString($value, 1, 250)) {
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
        return $this->subgrupoid;
    }

    public function getIdGrupo()
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

    public function createRow()
    {
        $sql = 'INSERT INTO invsubgrupos(subgrupoid, grupoid, codigo, nombre)
                VALUES(lastIdSubgrupo(), ?, ?, ?)';
        $params = array($this->grupoid, $this->codigo, $this->nombre);
        return Database::executeRow($sql, $params);
    }

    
    public function updateRow()
    {
        $sql = 'UPDATE invsubgrupos
                SET grupoid= ?,codigo= ?,nombre= ?
                WHERE subgrupoid = ?';
        $params = array($this->grupoid,$this->codigo,$this->nombre,$this->subgrupoid);
        return Database::executeRow($sql, $params);
    }

    public function readAll()
    {
        $sql = 'SELECT subg.CODIGO as codigo, subg.nombre as nombresubgrupo, grup.nombre as nombregrupo, subg.subgrupoid
        from invsubgrupos subg
        inner join invgrupos grup on subg.GRUPOID  = grup.GRUPOID 
        ORDER by subg.subgrupoid  desc ';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function readOne()
    {
        $sql = 'SELECT subgrupoid, grupoid,nombre, codigo
        FROM invsubgrupos
        WHERE subgrupoid = ?';
        $params = array($this->subgrupoid);
        return Database::getRow($sql, $params);
    }

    public function deleteRow()
    {
        $sql = 'DELETE FROM invsubgrupos    
                WHERE subgrupoid = ?';
        $params = array($this->subgrupoid);
        return Database::executeRow($sql, $params);
    }

    public function readSubgrupo()
    {
        $sql = 'SELECT subgrupoid, nombre FROM invsubgrupos';
        $params = null;
        return Database::getRows($sql, $params);
    } 

    public function readGrupo()
    {
        $sql = 'SELECT grupoid, nombre FROM invgrupos';
        $params = null;
        return Database::getRows($sql, $params);
    } 
}