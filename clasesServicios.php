<?php

class servicios{
    
    public function informacionActualServer($variable){
        
        $fecha = date("F j, Y, g:i:s a");
        
        // mensaje defini en el wsdl
        $datos = $variable->mensaje . " " . $fecha;
        
        $objeto_respuesta = new stdClass();
        
        // nombre de la variable respuesta que defini en el wsdl
        $objeto_respuesta->out = $datos;
        
        return $objeto_respuesta;
        
    }
    
}
