<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title> 
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/estilos_de_index.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

 <div class="container">
    <div class="hero is-danger-dark">
        <div class="hero-body">
            <h1 class="title has-text-white">
                ¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!
            </h1>   
    <div class="slick-slider">
      <div><img src="./img/farmacia.jpg" alt="Imagen 1"></div>
      <div><img src="./img/farmacia1.jpg" alt="Imagen 2"></div>
      <div><img src="./img/farmacia2.jpg" alt="Imagen 3"></div>
    </div>
  </div>

  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
   
    $(document).ready(function(){
      $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000
      });
    });
  </script>

  <!-- SECCION OFERTA DEL DÍA  -->
  <section>
    <div class="container">
      <img src="img/paralayers/pprlabnutricion-nutriciondeportiva-inkafarma-headerproductlist-web.jpg" alt="layer1">
    </div>
  </section>

  <!-- SECCION TIEMPO RESTANTE DE ATENCION DE EBENEZER  -->
  <section>
    <div class="container">
      <img src="img/paralayers/pprlabnutricion-nutriciondeportiva-inkafarma-headerproductlist-web.jpg" alt="layer1">
    </div>
  </section>
  
  <!-- SECCION 3 PRODUCTOS A VENDER  -->
  <section>
        <div class="container text-center">
            <div class="row">
                    <div class="col-12 col-md-4">
                      <i class="bi bi-joystick"></i>
                      <p class="gridsonte-titulo">Colágeno Hidrolizado Naara</p>  
                      <div class="badges-contenedor">
                        <span class="badge text-bg-danger">SamiStore</span>
                      </div>
                    </div>
                    <div class="col-12 col-md-4"> 
                        <i class="bi bi-joystick"></i>
                        <p class="gridsonte-titulo">Suplemento Antarctic Krill Oil - Bronson Vitamins - 1000 mg Omega-3 EPA/DHA 120 Cápsulas</p>  
                        <div class="badges-contenedor">
                          <span class="badge text-bg-danger">JCLComercializadora</span>
                        </div>
                    </div>
                    <div class="columna col-12 col-md-4"> 
                       <i class="bi bi-joystick"></i>
                        <p class="gridsonte-titulo">Niacin Niacina Vitamina B3 240 capsulas</p>  
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, metus quis efficitur aliquam, leo leo ornare tortor.</p>
                        <div class="badges-contenedor">
                          <span class="badge text-bg-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                           class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                           <path
                             d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1" />
                          </svg>
                          TIENDAVERDE
                          </span>
                        </div>
                    </div>
            </div>
        </div>
  </section>
  
  <!-- SECCION MAS PRODUCTOS -->
  <section> 
    <div class="container marketing">
      <!-- START THE FEATURETTES -->  
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">PASO A PASO PARA <br> UNA VIDA SALUDABLE. <span class="texto-precio-antes"><br>Antes S/129.00</span></h2>
            <p class="texto-precio-promo"> Precio Promocional S/ 99.00.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;" src="img/producto/1675627850669L.jpg">
          </div>
        </div>
      <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Precio regular S/ 129.00 <br> Precio Promocional S/ 99.00.</p>          
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;" src="img/producto/1675627850669L.jpg" >
          </div>
        </div>
      <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;"  src="img/producto/1675627850669L.jpg">
          </div>
      </div>
    </div>  
  </section>


</body>
</html>
