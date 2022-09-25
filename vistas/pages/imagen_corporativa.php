<!doctype html>
<html lang="en">

<head>
    <?php require "vistas/layouts/header.php" ?>
    <title>Diseño Gráfico | Agencia de Marketing Digital para PYMES | DigiMedia – Laboratorio Emprendedor</title>
</head>

<body>

    <?php require "vistas/layouts/navbar.php" ?>

    <section class="w-100 pb-5 pt-5">
        <div class="container py-3 py-lg-5">
            <div class="row w-100 justify-content-around m-0 py-0 py-lg-5 ">

                <div class="col-lg-5">
                    <img class="w-100 h-100" src="<?= URL ?>src/images/diseno_grafico_emprendedor.webp">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0">

                    <h1 class="col-lg-5 display-6 fw-bolder">IMAGEN CORPORATIVA</h1>
                    <p class="col-lg-10 fs-5 pt-1" style="text-align: justify;">
                    Te ayudamos a crear tu logo y rebranding, además de una visión y misión para que logres una fidelización de tu cartera de clientes, así mismo como la credibilidad ante el consumidor y tus proveedores. Exposición positiva de cara al exterior.
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