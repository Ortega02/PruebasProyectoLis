<?php
// start the session
session_start();

// check if the producto_id and accion parameters are set in the POST data
if(isset($_POST['producto_id']) && isset($_POST['accion'])) {
    $producto_id = $_POST['producto_id'];
    $accion = $_POST['accion'];

    // retrieve cart from session
    $carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();

    // find product in cart
    $index = array_search($producto_id, array_column($carrito, 'IdProducto'));
    if($index !== false) {
        // increment or decrement quantity
        if($accion == 'incrementar') {
            $carrito[$index]['Cantidad']++;
        } elseif($accion == 'decrementar') {
            $carrito[$index]['Cantidad']--;
            if($carrito[$index]['Cantidad'] <= 0) {
                // remove product from cart if quantity reaches zero
                unset($carrito[$index]);
            }
        }

        // update cart in session
        $_SESSION['carrito'] = $carrito;
    }
}

// redirect to cart page
header('Location: ?c=Principal&a=Carrito');
?>
