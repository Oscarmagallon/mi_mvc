<?php
class Paginas extends Controlador{
    public function index(){
        $datos = 'cualquier dato';
        $this->vista('paginas/inicio',$datos);
    }
}