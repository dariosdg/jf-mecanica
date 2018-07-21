<?php
namespace Entity;

use Application\Entity\Cliente;

class Vehiculo
{
    
    private $id;
    private $patente;
    private $marca;
    private $modelo;
    private $color;
    private $anio;
    private $numeroMotor;
    private $numeroChasis;
    private $bastidor;
    private $rodado;
    private $km;
    private $motor;
    private $cliente;
    private $observaciones;
    private $aseguradoEn;
    private $poliza;
    private $imagen;
    
   public function Vehiculo(Cliente $cliente, $patente, $marca, $modelo, $anio, $color) {
       $this->$cliente = $cliente;
       $this->patente = $patente;
       $this->marca = $marca;
       $this->modelo = $modelo;
       $this->anio = $anio;
       $this->color = $color;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getPatente()
    {
        return $this->patente;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getAnio()
    {
        return $this->anio;
    }

    public function getNumeroMotor()
    {
        return $this->numeroMotor;
    }

    public function getNumeroChasis()
    {
        return $this->numeroChasis;
    }

    public function getBastidor()
    {
        return $this->bastidor;
    }

    public function getRodado()
    {
        return $this->rodado;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function getObservaciones()
    {
        return $this->observaciones;
    }

    public function getAseguradoEn()
    {
        return $this->aseguradoEn;
    }

    public function getPoliza()
    {
        return $this->poliza;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setPatente($patente)
    {
        $this->patente = $patente;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    public function setNumeroMotor($numeroMotor)
    {
        $this->numeroMotor = $numeroMotor;
    }

    public function setNumeroChasis($numeroChasis)
    {
        $this->numeroChasis = $numeroChasis;
    }

    public function setBastidor($bastidor)
    {
        $this->bastidor = $bastidor;
    }

    public function setRodado($rodado)
    {
        $this->rodado = $rodado;
    }

    public function setKm($km)
    {
        $this->km = $km;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    }

    public function setAseguradoEn($aseguradoEn)
    {
        $this->aseguradoEn = $aseguradoEn;
    }

    public function setPoliza($poliza)
    {
        $this->poliza = $poliza;
    }

    
       
}

