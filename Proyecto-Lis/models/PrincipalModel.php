<?php
//modelo de la principal
     class Principal_modelo{
        private $db;
        private $cupones;

        public function __construct(){

            //llamamos la conexion
            $this->db=Conectar::conexion();
            $this->cupones=array();

        }

        //método para mostrar los productos
    public function mostrar_cupones(){
   $sql = "SELECT IdCuponR, Titulo, PrecioRegular, imagen FROM cuponr WHERE Estado = 'Activo'";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();

    while($row = $resultado->fetch_assoc()){
        $this->cupones[] = $row;
    }

    return $this->cupones;
}

       
public function detalle_cupon($id){
    $sql = "SELECT * FROM cuponr WHERE IdCuponR = ?";
    $stmt = $this->db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $row = $resultado->fetch_assoc();

    return $row;
}

    
    

    
}

?>
