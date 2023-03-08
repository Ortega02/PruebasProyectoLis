<?php

session_start();


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

public function actualizar_carrito(){
  if(session_id() == '') {
    session_start();
  }
  
  if(isset($_SESSION['carrito'])){
    $arreglocarrito = $_SESSION['carrito'];
  } else {
    $arreglocarrito = array();
  }
  
  for($i=0; $i<count($arreglocarrito); $i++){
    if(isset($_POST['producto_id_'.$i]) && isset($_POST['accion_'.$i])){
      $producto_id = $_POST['producto_id_'.$i];
      $accion = $_POST['accion_'.$i];
      
      // retrieve cart from session
      $arreglocarrito = $_SESSION['carrito'];
      
      // find product in cart
      $index = array_search($producto_id, array_column($arreglocarrito, 'IdProducto'));
      if($index !== false){
        // increment or decrement quantity
        if($accion == 'incrementar'){
          $arreglocarrito[$index]['Cantidad']++;
        } elseif($accion == 'decrementar'){
          $arreglocarrito[$index]['Cantidad']--;
          if($arreglocarrito[$index]['Cantidad'] <= 0){
            // remove product from cart if quantity reaches zero
            unset($arreglocarrito[$index]);
          }
        }
        
        // update cart in session
        $_SESSION['carrito'] = $arreglocarrito;
      }
    }
  }
  
  // redirect to cart page
  header('Location: ?c=Principal&a=Carrito');
}



}

?>