<?php
//hereda
include ('views/layouts/header.php');

?>
 <!-- Header-->
 <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Tu cuponera de confianza</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Todo lo que necesitas</p>
                </div>
            </div>
        </header>
  <!-- Section-->
  <section >
            <div class="container-fluid px-5 my-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   
                    <?php
                    foreach($info['cupones'] as $dato){
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img src="<?php echo 'http://localhost/Proyecto-Lis/recursos/img/'. $dato["imagen"]?>" class="card-img-top"  alt="imágenes de cupones" width="40px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    
                                    <h5 class="fw-bolder"><?php echo  $dato["Titulo"]?></h5>
                                    <!-- Product price-->
                                    <?php echo '$'. $dato["PrecioRegular"]?>
                                   
                                    
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                <a class="btn btn-dark mt-auto" href="?c=Principal&a=detalle&id=<?php echo $dato["IdCuponR"]?>"><i class="bi bi-eyeglasses"></i></a>
                                <a class="btn btn-success mt-auto" href="?c=Principal&a=carrito&id=<?php echo $dato["IdCuponR"]?>"><i class="bi bi-cart"></i></a>
                              
                            </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>
                     </div>
                </div>

                </div>
         
            </div>
        </section>

        <?php
//hereda
include ('views/layouts/footer.php');

?>
