<!doctype html>
<html lang="en">

<head> <?php require "vistas/layouts/header.php" ?> <?php include "vistas/layouts/modalh.php" ?> <title>Cont&aacute;ctanos | Agencia de Marketing Digital para PYMES |
        DigiMedia – Laboratorio Emprendedor</title>
    <meta name="description"
        content="Especialistas en aumentar las ventas de tu negocio con estrategias de marketing y publicidad.">
    <meta name="keywords"
        content="Pymes, Marketing digital, diseño web, publicidad, diseño gráfico, branding, redes sociales, técnica SEO, negocios posicionados, emprendimientos, Marketing, negocio, digital, sitio web de marketing, servicios de marketing, empresa de publicidad, Agencia de marketing, marketing digital, asesoría de marketing" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Icons FontaWesome-->
    <link rel="stylesheet" href="./src/style/modal.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
</head>

<body><?php require "vistas/layouts/navbar.php" ?><?php require "vistas/layouts/modal.php" ?>
<section class="w-100">
        <div class="container py-3 py-lg-5">
            <div class="row w-100 justify-content-around m-0 py-0 py-lg-5 ">
                <div class="col-lg-5 py-4">
                    <h1 class="display-5 fw-normal d-block d-lg-none pb-3">CONT&Aacute;CTANOS</h1> <img class="w-100 h-100"
                        src="<?=URL?>/src/images/servicios/fondoForm.webp">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h1 class="display-5 fw-normal d-none d-lg-block text-center">CONT&Aacute;CTANOS</h1>
                    <p class="fs-4 text-center pt-3"> ¿Necesitas una cotización o deseas una asesoría? <br>Déjanos tus
                        datos y te contactamos </p>
                    <div class="container pt-1">
                        <form id="formContact" action="<?=URL?>contacto/enviarcorreo" method="post"> 
                            <input class="rounded-0 form-control form-control-lg" type="text" placeholder="Nombre"
                                aria-label="Nombre" id="nombre" name="nombre" autocomplete="off" required>
                            <div class="input-group"> 
                                <input type="text" aria-label="First name" class="form-control form-control-lg rounded-0" placeholder="Tel&eacute;fono" id="telefono" name="telefono" autocomplete="off" required> 
                                <input type="email" aria-label="Last name" class="form-control form-control-lg rounded-0" placeholder="Email" id="email" name="email" autocomplete="off" required > 
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" id="enviar" name="enviar" value="ENVIAR" class="btn btn-primary" ><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;ENVIAR</button>
                            </div>
                        </form>
                        <?php include("mail.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </section> <?php require "footer.php" ?> </body>
<script src="<?=URL?>src/js/email.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script><?php require "vistas/scripts.php" ?>
<script src="./src/js/contacto.js"></script>
<script>
    $(document).on(
        'keydown',
        function(event) {
            if (event.key == "Escape") {
                let cerrar = document.querySelectorAll(".close")[0];
                let modal = document.querySelectorAll(".modal")[0];
                let modalC = document.querySelectorAll(".modal-container")[0];
                modal.classList.toggle("modal-close");
                setTimeout(function() {
                    modalC.style.opacity = "0";
                    modalC.style.visibility = "hidden";
                }, 3000);
                modalC.classList.toggle("modalca");

            }
        });
</script>
</html>