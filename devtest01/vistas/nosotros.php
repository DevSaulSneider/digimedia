<!doctype html>
<html lang="es">

<head>
    <title>Nosotros | Agencia de Marketing Digital para PYMES| DigiMedia – Laboratorio Emprendedor </title>
    <meta name="description"
        content="Somos DigiMedia, tu agencia de marketing digital en Lima. Nos especializamos en el posicionamiento de marca, diseño web, diseño gráfico y gestión de redes sociales.">
    <meta name="keywords"
        content="Pymes, Marketing digital, diseño web, publicidad, diseño gráfico, branding, redes sociales, técnica SEO, negocios posicionados, emprendimientos, Marketing, negocio, digital, sitio web de marketing, servicios de marketing, empresa de publicidad, Agencia de marketing, marketing digital, asesoría de marketing" />
    <?php require_once "vistas/layouts/header.php" ?>
    <link rel="stylesheet" href="<?=URL?>src/style/nosotros.css">
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }

    .img-esquema2m {
        display: none;
    }

    @media (max-width:768px) {
        .cont-nosotros {
            background-image: url("<?=URL?>src/images/nosotros/recurso1.webp");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .img-cambio {
            display: none;
        }
    }

    @media (max-width:992px) {
        .img-esquema2 {
            display: none;
        }

        .img-esquema2m {
            display: block;
        }
    }
    </style>
</head>

<body> <?php require "vistas/layouts/navbar.php" ?> <section class="mt-lg-4 mb-lg-3">
        <div class="container w-100 px-0">
            <div class="row mx-0">
                <div class="col-lg-6 px-0 md-caja d-none d-md-block"> <img class=" img-cambio"
                        src="<?=URL?>src/images/nosotros/recurso1.webp" alt="" width="100%" class="cb-img md-w100 mb-5"
                        width="" height=""> </div>
                <div class="col-lg-6 px-3 pt-lg-4 pt-2 pb-4 cont-nosotros">
                    <h1 class="text-center">¿Quiénes Somos?</h1>
                    <p class="fs-6 m-lg-4 md-p" style="text-align: justify;"> Somos un equipo de trabajo conformado por
                        marketeros, comunicadores y diseñadores gráficos que realizan <b> estrategias innovadoras,
                            creativas y eficientes</b> de marketing digital <b>para que tu negocio aumente sus
                            ventas</b>. Nuestros planes de marketing se caracterizan no solo por diseñar publicidad
                        atractiva, sino que empleamos herramientas digitales que garanticen el crecimiento sostenido de
                        tu <b>PYME</b>, O emprendimiento; por ello, <b>nos enfocamos en generar contenido que ayude a
                            captar más clientes para tu empresa</b> </p>
                </div>
            </div>
    </section>
    <section class="container px-0">
        <div class="container back-img px-0"
            style="background-image: url(<?=URL?>src/images/nosotros/recurso2.webp);background-size: 100% 100%">
            <div class=" row m-0 p-4 mx-0 w-100">
                <center>
                    <div class=" col-lg-6 pt-lg-4">
                        <p class="text-center"><b>Qué puedes lograr</b> con una buena estrategia de marketing
                            digital?</p>
                        <ul style="list-style-type= none">
                            <li>Hacer más conocida tu empresa</li>
                            <li>Mayor oportunidad de negocio</li>
                            <li>incrementar tus ventas</li>
                            <li>Generar mayor ingreso neto</li>
                            <ul>
                    </div>
                </center>
            </div>
        </div>
    </section>
    <section class=" my-2">
        <div class="container-xl sm-w100 md-w75">
            <div class="row">
                <div class="col-12 col-lg-6 px-0 mx-0 img-esquema1"> <img
                        src="<?=URL?>src/images/nosotros/esquema1.webp" alt="" class="w-100 h-100">
                </div>
                <div class="col-12 col-lg-6 px-0 mx-0 img-esquema2"> <img
                        src="<?=URL?>src/images/nosotros/esquema2.webp" alt="" class="w-100 h-100">
                </div>
                <div class="col-12 col-lg-6 px-0 mx-0 img-esquema2m"> <img
                        src="<?=URL?>src/images/nosotros/esquema2M.jpg" alt="" class="w-100 h-100">
                </div>
            </div>
        </div>
    </section> <?php require "footer.php" ?>
</body><?php require "vistas/scripts.php" ?>

</html>