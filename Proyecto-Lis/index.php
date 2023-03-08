<?php

require_once "core/routes.php";
require_once "config/config.php";
require_once "config/bd.php";
require_once "controllers/Principal.php";

if(isset($_GET['c'])){ //Verifica si existe el nombre del controlador
		
    $controlador = cargarControlador($_GET['c']); //Carga el controlador Alumnos
    
    if(isset($_GET['a'])){ //Verifica si existe la acción
        if(isset($_GET['id'])){ //Verifica si existe el id
            cargarAccion($controlador, $_GET['a'], $_GET['id']); //Ejecuta acción que necesita el id
            } else {
            cargarAccion($controlador, $_GET['a']); //Ejecuta acción
        }
        } else {
        cargarAccion($controlador, ACCION_PRINCIPAL); //Cargar form predeterminado
    }
    
    } else {
    
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
//llamando al controlador
//$control=new PrincipalController();
//$control->index();


?>