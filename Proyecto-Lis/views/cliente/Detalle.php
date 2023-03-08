<?php

//incluyendo el header
include ('views/layouts/header.php');
//error_reporting(E_ERROR | E_PARSE); 

?>
        <!-- Product section-->
        <section class="py-5">
            <h3 class="text-center">Detalle de productos</h3>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img src="<?php echo 'http://localhost/Proyecto-Lis/recursos/img/'. $info["cupones"]["imagen"]?>" class="card-img-top mb-5 mb-md-0"  alt="Imágen de cupón" /></div>
                    <d.iv class="col-md-6">
                        <div class="small mb-1">Detalles del producto</div>
                        <h1 class="display-5 fw-bolder"><?php echo $info["cupones"]["Titulo"]?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php echo '$' .$info["cupones"]["PrecioRegular"]?></span>
                        </div>
                        <p class="lead"><?php echo $info["cupones"]["Descripcion"]?> </p>
                        <div class="d-flex">
                            <button class="btn btn-success flex-shrink-0" type="button" onclick="location.href='?c=Principal&a=index';" ><i class="bi bi-arrow-return-left"></i> Seguir Comprando</button>
                        </div>
                    </d.iv>
                </div>
            </div>
        </section>
        <!-- Footer-->
       <?php
        include ('views/layouts/footer.php');
       ?>
    </body>
</html>
