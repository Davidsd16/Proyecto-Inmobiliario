<?php

class vistasModelo {

    // Modelo para obtener vistas
    protected static function obtenerVistasModelo($vistas) {

        $lista_blanca = [];

        if(in_array($vistas, $lista_blanca)){

            if(is_file("./vistas/contenidos/" . $vistas . "-view.php")){
                $contenido = "./vistas/contenidos/" . $vistas . "-view.php";

            }else {
                $contenido = "404";
            }

        }elseif($vistas == "login" || $vistas == "index") {

            $contenido = "login";
            
        }else {
            $contenido = "404";
        }
        
        return $contenido;
    }

}