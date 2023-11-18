<?php

class vistasModelo
{

    // Modelo para obtener vistas
    protected static function obtenerVistasModelo($vistas)
    {

        $lista_blanca = ["home", "client_list",];

        if (in_array($vistas, $lista_blanca)) {
            if (is_file("./vistas/contenidos/" . $vistas . "_view.php")) {
                $contenido = "./vistas/contenidos/" . $vistas . "_view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
