<!doctype html>
<html lang="en">



<body>

    <?php require "vistas/layouts/navbar.php" ?>

    <section class="w-100 pb-5 pt-5">
        <div class="container py-3 py-lg-5">
            <div class="row w-100 justify-content-around m-0 py-0 py-lg-5 ">

                <div class="col-lg-5">
                    <img class="w-100 h-100" src="<?= URL ?>src/images/diseno_grafico_emprendedor.webp">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0">

                    <h1 class="col-lg-5 display-6 fw-bolder">COMMUNITY MANAGER</h1>
                    <p class="col-lg-10 fs-5 pt-1" style="text-align: justify;">
                    Te ofrecemos el servicio integral de  construir y administrar tu comunidad online y gestionar la identidad e imagen de tu marca, creando y manteniendo relaciones estables y duraderas con sus clientes, sus fans en internet. 
                    </p>
                    <a href="<?= URL ?>contacto">
                        <button type="button" class="btn btn-primary rounded-pill"><span class="ms-3 mx-3">E M P R E N D E</span></button>
                    </a>

                </div>
            </div>
        </div>
    </section>


    <?php require "vistas/footer.php" ?>

</body>
<?php require "vistas/scripts.php" ?>

</html>