<?php

    class Carrito_modelo {
        private $db;
        private $cupones;

        public function __construct(){

            //llamamos la conexion
            $this->db=Conectar::conexion();
            $this->cupones=array();

        }
    //productos seleccionados para carrito
    public function carrito_cupones($id=null){
    $sql = "SELECT * FROM cuponr WHERE IdCuponR='$id' ";
    $resultado = $this->db->query($sql);
    $row=$resultado->fetch_assoc();

    return $row;
        }
    }
?>