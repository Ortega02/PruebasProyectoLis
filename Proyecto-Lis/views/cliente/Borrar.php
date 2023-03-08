<?php session_start(); 
//require_once "views/cliente/Carrito.php";    

header("Location: ".$_SERVER['HTTP_REFERER']."");
unset($_SESSION['carrito']);
