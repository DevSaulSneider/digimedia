<!doctype html>
<html lang="es">
<head>
    <title>Servicios | Agencia de Marketing Digital para PYMES | DigiMedia – Laboratorio Emprendedor</title>
    <meta name="description" content="Agencia de Marketing en Lima, Perú. Ayudaremos a mejorar tu negocio con diferentes herramientas">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../src/style/servicios.css">
    <?php require_once "vistas/layouts/header.php" ?>
</head>
<body>
  <?php require "vistas/layouts/navbar.php" ?>
  <section class="mt-5">
    <div class="container text-center">
    <p class="fs-1 d-none d-lg-block">El marketing digital en 3 pasos</p>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 text-center px-0">
          <p class="fs-3 font-family">Paso 1</p>
          <img src="../src/images/servicios/carnet-de-identidad.webp" alt="" class="100%" width="121px" height="121px">
          <div class="container w-75 mt-3"  style="background-color: #EFEFEF;">
            <p class="py-2">Crear una identidad para diferenciarte en el mercado</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 px-0">
          <p class="fs-3 font-family">Paso 2</p>
          <img src="../src/images/servicios/diana.webp" alt="" width="122px" height="121px">
          <div class="container w-75 mt-3"  style="background-color: #EFEFEF;">
            <p class="py-2">Define tus objetivos y estrategias en redes sociales e internet</p>
          </div>
        </div>
        <div class="col-lg-4 text-center px-0 ">
          <p class="fs-3 font-family">Paso 3</p>
          <img src="../src/images/servicios/chat.webp" alt="" width="135px" height="134px">
          <div class="container w-75 mt-3" style="background-color: #EFEFEF;">
            <p class="py-2">Comunicate constantemente con tu público para conocer sus necesidades y cubrirlas con tus productos o servicios.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mt-5">
    <div class="container text-center">
      <p class="fs-3">El marketing digital en 3 pasos</p>
    </div>
    <div class="container w-50 md-w100" style="background-color: #F1F1F1;">
      <p class="fs-6 p-4 content-box">Digimedia es una agencia que gestiona estrategias de marketing digital con el objetivo de incrementar las ventas de la PYMES y emprendimientos en el Perú. Para ello, trabajamos como un Laboratorio Emprendedor que busca constantemente crear planes de marketing y publicidad innovadora y eficientes que contribuirán al crecimiento de tu negocio en el mundo digital.</p>
    </div>
    
    <div class="container text-center w-75 mt-5">
      <div class="row" >
        <div class="col-6 col-lg-3" style="width:220px">
            <a href="./marca">
            <img src="./src/images/servicios/marca.webp" alt="" class="w-100  pt-3 " width="100%" height="100%">
            </a>
        </div>
        <div class="col-6 col-lg-3" style="width:220px">
            <a href="./marketing">
            <img src="./src/images/servicios/marketing.webp" alt=""  class="w-100  pt-3" width="100%" height="100%">
            </a>
        </div>
        <div class="col-6 col-lg-3" style="width:220px">
            <a href="./diseno">
            <img src="./src/images/servicios/diseno.webp" alt=""  class="w-100 pt-3" width="100%" height="100%">
            </a>
        </div>
        <div class="col-6 col-lg-3" style="width:220px">
            <a href="./web">
            <img src="<?=URL?>/src/images/servicios/web.webp" alt=""   class="w-100  pt-3" width="100%" height="100%">
            </a>
        </div>
      </div>
    </div>
  </section>
  <section class="my-5">
    <div class="container position-relative md-w100 w-75 p-lg-5">
      <div class="position-absolute w-100 h-100 d-flex justify-content-center" style="z-index: 1;">
          <div class="md-w100 w-75">
          <p class="h1 text-center pt-4 pt-lg-5 pe-4">¡Atrévete a emprender!</p>
          <form class="form" id="formContact" action="<?=URL?>servicios/enviarcorreo" method="post">
            <div class="row justify-content-between w-100 px-4 px-lg-0">
              <div class="col-12 col-md-6 col-lg-5 py-2">
                <input class="form-control border border-secondary fs-4 py-lg-2 px-2 bg-transparent" type="text" placeholder="Nombre" id="nombre" name="nombre" require>
              </div>
              <div class="col-12 col-md-6 col-lg-5 py-2">
                <input class="form-control border border-secondary fs-4 py-lg-2  px-2 bg-transparent" type="email" placeholder="Email" id="email" name="email" require>
              </div>
              <div class="col-12 col-md-6 col-lg-5 py-2 py-lg-4">
                <input class="form-control border border-secondary fs-4 py-lg-2  px-2 bg-transparent" type="number" placeholder="Teléfono" id="telefono" name="telefono" require>
              </div>
              <div class="col-12 col-md-6 col-lg-5 py-2  py-lg-4">
                <input class="form-control border border-secondary fs-4 py-lg-2  px-2 bg-transparent" type="text" placeholder="Empresa" id="empresa" name="empresa" require>
              </div>
              <div class="col-12 col-lg-5 py-2  py-lg-2">
                <input class="form-control border border-secondary fs-4 py-lg-2  px-2 bg-transparent" type="text" placeholder="Ubicación" id="ubicacion" name="ubicacion">
              </div>
              <div class="col-12 col-lg-12 py-2 py-lg-4">
                <input class="form-control border border-secondary fs-4 py-lg-2  px-2 bg-primary" type="submit" placeholder="Enviar" style="color:black !important;">
              </div>
            </div>
          </form>
          </div>
      </div>
     <img src="<?= URL?>src/images/servicios/fondoForm.webp" alt="" class="position-relative sm-img w-100 object-cover opacity-50 camb-cont" style="z-index: 0;" width="1182px" height="710px">
    </div>
  </section>
  <?php require "footer.php" ?>
  <script src="<?=URL?>src/js/email.js" ></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<?php require "vistas/scripts.php" ?>
</html>