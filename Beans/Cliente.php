<?php 

class Cliente {
    public $codCli;
    public $nomCli;
    public $apeCli;
    public $correo;
    public $pas;
    public $dirCli;

    function __construct($codCli, $nomCli,$apeCli, $correo, $pas, $dirCli) {
        $this->codCli = $codCli;
        $this->nomCli = $nomCli;
        $this->apeCli = $apeCli;
        $this->correo = $correo;
        $this->pas = $pas;
        $this->dirCli = $dirCli;
    }

    function getCodCli() {
        return $this->codCli;
    }

    function getNomCli() {
        return $this->nomCli;
    }

    function getapeCli() {
        return $this->apeCli;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getPas() {
        return $this->pas;
    }

    function getdir(){
        return $this->dirCli;
    }

    function setCodCli($codCli) {
        $this->codCli = $codCli;
    }

    function setNomCli($nomCli) {
        $this->nomCli = $nomCli;
    }

    function setapeCli($apeCli) {
        return $this->apeCli = $apeCli;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setPas($pas) {
        $this->pas = $pas;
    }

    function setdirCli($dirCli){
        return $this->dirCli = $dirCli;
    }
}


?>