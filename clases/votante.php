<?php


class RegistroVotante {
    private $id;
    private $dui;
    private $nombre;
    private $apellido;
    private $foto;
    private $genero;
    private $fecha;
    private $direccion;
    private $iddepa;
    private $idmuni;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }


    public function getDui() {
        return $this->dui;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getIddepa() {
        return $this->iddepa;
    }

    public function getIdmuni() {
        return $this->idmuni;
    }
    
    /** Generando Get */

    public function setDui($dui) {
        $this->dui = $dui;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setIddepa($iddepa) {
        $this->iddepa = $iddepa;
    }

    public function setIdmuni($idmuni) {
        $this->idmuni = $idmuni;
    }

}