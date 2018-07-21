<?php
namespace Application\Entity;

class Cliente
{
    private $id;
    private $nombre;
    private $razonSocial;
    private $nombre;
    private $direccion;
    private $telefono;
    private $celular;
    private $localidad;
    private $cp;
    private $provincia;
    private $cuit;
    private $referencia;
    private $mail;
    
    
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function getCuit()
    {
        return $this->cuit;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

     
    
    
}