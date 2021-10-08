<?php
    Class Core {

        /**
         * Mapear la url ingresada en el navegador
         * 1- Controlador
         * 2- Metodo
         * 3- Parametros
         * Ejemplo: /articulo/actualizar/4
         */
        
         protected $controladorActual= 'Paginas';
         protected $metodoActual = 'index';
         protected $parametros=[];
         public function __construct(){
            $url = $this->getUrl();

            if(isset($url[0])){

                if(file_exists('../App/controladores/'.ucwords($url[0]).'.php')){
                    //Si existe,se configura como controlador por defecto
                    $this->controladorActual = ucwords($url[0]);
                    unset($url[0]);
                }
            }
            require_once '../App/controladores/'.$this->controladorActual.'.php';
            $this->controladorActual = new $this->controladorActual;
           
            if(isset($url[1])){

                if(method_exists($this->controladorActual,$url[1])){
                    //Si existe,se configura como controlador por defecto
                    $this->metodoActual = $url[1];
                    unset($url[1]);
                }
            }

            // Obtenemos los parametros.
            $this->parametros=$url ? array_values($url) : [];

            //llamamos al metodod del controlador
            call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);
 

        }
         public function getUrl(){
          
          if (isset($_GET ["url"])){
              $url = rtrim($_GET["url"],'/') ;
              $url = filter_var($url,FILTER_SANITIZE_URL);
              $url = explode('/',$url);
              return $url;
          }
         }
        }