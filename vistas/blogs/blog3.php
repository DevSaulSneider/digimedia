<!doctype html>
<html lang="es">

<head>
    <title>¿POR QUÉ UNA PYME DEBE INVERTIR EN MARKETING DIGITAL?</title>
    <meta name="description"
        content="Constantemente escuchamos que las redes sociales son una herramienta importante al momento de atraer más clientes para nuestra empresa.">
    <link rel="stylesheet" type="text/css" href="<?=URL?>src/style/paginacion.css" />
    <link rel="stylesheet" href="<?=URL ?>src/style/blogs.css">
    <?php require_once "vistas/layouts/header.php" ?>
</head>

<body>
    <?php require "vistas/layouts/navbar.php" ?> <div class="espacio" style="height: 50px"></div>
    <main>
        <section>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-7 d-block d-lg-none">
                        <h1 class="h4 pb-3"><b>¿CONOCES EL POTENCIAL DE CADA RED SOCIAL?</b></h1>
                        <img src="<?=URL?>src/images/blogP/redes.webp" alt="" class="w-75 md-img" width="382px"
                            height="295px">
                    </div>
                    <div class="col-lg-5 px-3 pt-5">
                        <h1 class="h4 pb-3 d-none d-lg-block"><b>¿CONOCES EL POTENCIAL DE CADA RED SOCIAL?</b></h1>
                        <p style="text-align: justify;">Las redes sociales revolucionaron el mercado.¿Alguna vez a
                            investigado una marca en los medios antes de realizar una compra, o alguna vez el número de
                            comentarios positivos de una publicación te generó confianza acerca de una marca? Es
                            probable que sí.Por ello te brindaremos información sobre el potencial de cada red social:
                        </p>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block"> <img src="<?=URL?>src/images/blogP/redes.webp" alt=""
                            class="w-75 md-img" width="382px" height="295px"> </div>
                </div>
                <div class="row mt-lg-5 ">
                    <div class="col-lg-4 px-0"> <img src="<?=URL?>src/images/blogP/FB.webp" alt="" class="pt-4 rs1-img"
                            width="70%" height="100%"> </div>
                    <div class="col-lg-7 px-3 px-lg-0 pt-lg-3">
                        <p style="text-align: justify;" class="mb-0">La red más popular de la actualidad, Facebook
                            permite explorar diversos formatos en su plataforma, sobre todo imagenes y videos.Al
                            consumidor de hoy en día busca páginas que cubran sus necesidades y le llame la atención,
                            hoy en día se volvió prioridad número uno de distintas marcas</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-3 d-block d-lg-none"> <img src="<?=URL?>src/images/blogP/IG.webp" alt=""
                            class="rs2-img" width="195px" height="200px"> </div>
                    <div class="col-lg-8 px-3 px-lg-0 pt-lg-5">
                        <p style="text-align: justify;" class="m-0">La red que crece a un ritmo muy acelerado, Instagram
                            ha dejado bastante claro que el contenido visual es el gran protagonista de las plataforma.
                            Todos sus recursos están orientados a la divulgación de imágenes y videos, asi que no habría
                            otra forma de destacarse por aqui.</p>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block px-0"> <img src="<?=URL?>src/images/blogP/IG.webp" alt=""
                            class="" width="195px" height="200px"> </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"> <img src="<?=URL?>src/images/blogP/TW.webp" alt="" class="rs3-img"
                            width="249px" height="158px"> </div>
                    <div class="col-lg-7 px-3 px-lg-0 pt-lg-5">
                        <p style="text-align: justify;" class="m-0">Twitter siempre fue un ecenario para la livertad de
                            expresión y, no en vano, se convirtió en la plataforma de grandes debates politicos y
                            sociales.Esto nos lleva a creer que suele ser mucho más personal, sin embargo, si bien
                            trabajada, las empresas también pueden aprovechar sus ventajas.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-block d-lg-none"> <img src="<?=URL?>src/images/blogP/IN.webp" alt=""
                            class="rs4-img" width="70%" height="100%"> </div>
                    <div class="col lg-7 px-3 px-lg-0 pt-lg-5">
                        <p style="text-align: justify;">Es una red profesional en la cual usuarios buscan aumentar su
                            red de contactos empresariales y oportunidades de negocio.Para las mareas, la red sirve
                            principalmente para fortalecer el interés de las personas en trabajar en la empresa.</p>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block"> <img src="<?=URL?>src/images/blogP/IN.webp" alt=""
                            class="pt-5" width="70%" height="100%"> </div>
                </div>
            </div>
        </section>
        <div class="contenedor-pagination">
            <ul class="pagination">
                <li class="page-item"> <a class="page-link" href="<?=URL ?>blog?id=2">Anterior</a> </li>
                <li class="page-item"> <a class="page-link uno" href="<?=URL ?>blog">1</a> </li>
                <li class="page-item"> <a class="page-link" href="<?=URL ?>blog?id=2">2</a> </li>
                <li class="page-item active"> <a class="page-link" href="<?=URL ?>blog?id=3">3</a> </li>
                <li class="page-item"> <a class="page-link" href="<?=URL ?>blog">Siguiente</a> </li>
            </ul>
        </div>
        </div>
    </main> <?php require "vistas/footer.php" ?>
</body><?php require "vistas/scripts.php" ?>

</html>