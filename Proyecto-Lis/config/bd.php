<?php
//conexión a mysql
    class Conectar{

      public static function conexion(){
        try{
          $conexion=new mysqli("localhost","root","","cuponeralis");
        }
       catch(Exception $e){
        echo 'Error de conexión';

       }
        return $conexion;
      }
    }
   
?>


        