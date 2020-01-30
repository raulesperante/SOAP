<?php

require_once 'clasesServicios.php';

// Para que no guarde el wsdl en cache y siempre lo requiera
ini_set("soap.wsdl_cache_enabled", '0');

$directorioWsdl = "directorioWsdl/MiWsdl.wsdl";

$parametros = array(
    'uri' => 'http://localhost/servicioWeb/',
    'soap_version' => SOAP_1_1
    );
    
$Objetoserver = new SoapServer($directorioWsdl, $parametros);

// El nombre de la clase servicio a utilizar
$Objetoserver->setClass("servicios");

// Poner en funcionamiento el servidor

$Objetoserver->handle();