<?php
class Conectar{
    private $Con;
    public function __construct() {
        
    }
    public function getCon(){
        return $this->Con;
    }
    public function ConectarBD(){
        $this->Con=new mysqli("localhost","root","","social");
        if($this->Con->connect_errno){
            echo "No es posible conectarse a la Base de Datos";
            exit;
        }                       
    }
}
