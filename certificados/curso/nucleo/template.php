<?php
    namespace App\nucleo;
    class Template{
        public static function generarHtml(array $datos,$archivo){
            ob_start(); //Esta funcion lo que hace es que guarda el include a y lo pone en la cache.
            //Convertimos en variable cada valor de los datos
            extract($datos);
            //Inclumos el certificado
            include '../templates'.$archivo.'.php';
            //Vaciamos la informacion de ob en una variable
            return ob_get_clean();            
        }   
    }