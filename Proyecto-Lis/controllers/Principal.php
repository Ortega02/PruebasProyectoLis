<?php
//interactuamos entre modelo y vista
class PrincipalController{
    
    public function index(){
        //traemos el modelo
        require_once "models/PrincipalModel.php";
        //instanciamos el modelo
        $cupones=new Principal_modelo();
        //traemos el método del modelo
        $info["cupones"]=$cupones->mostrar_cupones();
        require_once "views/cliente/Principal.php";
        
    }

    //mostrando la página de inicio de sesión
    public function inicio(){
        require_once "views/cliente/InicioSesion.php";
    }
    //mostrando página de registro
    public function registro(){
        require_once "views/cliente/Registro.php";
    }
    //pagina para detalle de productos
    public function detalle($id){

        require_once "models/PrincipalModel.php";
        $cupones=new Principal_modelo();
        $info["id"]=$id;
        $info["cupones"]=$cupones->detalle_cupon($id);
        require_once "views/cliente/Detalle.php";      
    }
     public function carrito($id=null){
        require_once "models/CarritoModel.php";
        $cupones=new Carrito_modelo();
        $info["id"]=$id;
        $info["cupones"]=$cupones->carrito_cupones($id);
       require_once "views/cliente/Carrito.php";     
          
    }
    public function borrar($id=null){
        //require_once "views/cliente/Carrito.php";
        require_once "views/cliente/Borrar.php";
    }
  

}

?>