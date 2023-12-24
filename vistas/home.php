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

  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background-color: #f7f7f7;">

 <div class="container">
    <div class="hero is-danger-dark">
        <div class="hero-body" style="background-color: #f7f7f7;">
            <h1 class="title has-text-black">
                ¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!
            </h1>   
    <div class="slick-slider" >
      <div><img src="./img/farmacia-1-1024x682.jpg" alt="Imagen 1"></div>
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
  <section style="background-color: #f7f7f7;">
    <div class="container">
      <img src="img/paralayers/pprlabnutricion-nutriciondeportiva-inkafarma-headerproductlist-web.jpg" alt="layer1">
    </div>
  </section>

  <!-- SECCION OFERTA CON TIMER -->
  <section style="background-color: #f7f7f7;">
    <div class="container">
      <p> IMPLEMENTAR AKI EL TIMER</p>    
    </div>
  </section>

  <!-- SECCION ESPECIAL DE TEMPORADA  -->
  <section style="background-color: #f7f7f7;">
    <div class="container">
      <div class="row g-2 py-5 row-cols-1 row-cols-lg-2">
        <div class="feature col">
          <a href="vistas/product_category.php" class="img-link">
           <img src="img/paralayers/311332belleza-especialnavideno-inkafarma-bannerhomelist-web.jpg" style="width: 471px; height: 506px;"  alt="layer2">       
          </a>
        </div>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/ibuprofeno.JPG"  style="width: 471px; height: 506px;" alt="layer23">       
            </div>
            <div class="carousel-item">
            <img src="img/naproxeno.jpg"  style="width: 471px; height: 506px;" alt="layer24">       
            </div>
            <div class="carousel-item">
            <img src="img/paracetamol.JPG"  style="width: 471px; height: 506px;" alt="layer25">                 
            </div>
          </div>
        </div>            

      </div>
    </div>
  </section>


  
  <!-- SECCION 3 PRODUCTOS POPULARES -->
  <section style="background-color: #f7f7f7;">  
      <div class="container text-left">
      <h2 class="featurette-heading" style="margin-top: 1rem; margin-bottom: 4rem;" >Producto más populares<span class="text-muted"> en esta semana</span> </h2>
          <div class="row justify-content-start">
              <div class="col-12 col-md-4 ">
                  <i class="bi bi-joystick "></i>
                  <img src="img/producto/001869X.jpg" width="162" height="162" alt="elvive">
                  <p style=" width: 85%; font-size: 13px  !important; font-style: normal !important; font-weight: bold; color: #adb5bd; margin: 10px 0;">FRASCO 400ML</p>    
                  <p class="gridsonte-titulo" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px;">Acondicionador Elvive Reparación Total 5 Caléndula y Ceramida- Frasco 400 ML</p>
                  <div class="badges-contenedor">
                      <span class="badge text-bg-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                              class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                              <path
                                  d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1" />
                          </svg>
                          NaturallyDivine
                      </span>
                  </div>
                  <p> </p>
                  <br>
                  <p style="text-decoration-line: line-through !important;">S/ 18.90</p>
                  <p> S/ 16.90 </p>
              </div>
              <div class="col-12 col-md-4">
                  <i class="bi bi-joystick"></i>
                  <img src="img/producto/sdadsad1662742214376L.png" width="162" height="162" alt="elvive">
                  <p style=" width: 85%; font-size: 13px  !important; font-style: normal !important; font-weight: bold; color: #adb5bd; margin: 10px 0;">UN 1 UN</p>    
                  <p class="gridsonte-titulo" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px;">Suplemento Antarctic Krill Oil - Bronson Vitamins - 1000 mg Omega-3 EPA/DHA 120 Cápsulas</p>
                  <div class="badges-contenedor">
                      <span class="badge text-bg-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                              class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                              <path
                                  d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1" />
                          </svg>
                          JCLComercializadora
                      </span>
                  </div>
                  <p> </p>
                  <br>
                  <p style="text-decoration-line: line-through !important;">S/ 129.90</p>
                  <p> S/ 99.90 </p>
              </div>
              <div class="columna col-12 col-md-4">
                  <i class="bi bi-joystick "></i>
                  <img src="img/producto/1675627850669L.jpg" width="162" height="162" alt="elvive">
                  <p style=" width: 85%; font-size: 13px  !important; font-style: normal !important; font-weight: bold; color: #adb5bd; margin: 10px 0;">UN 1 UN</p>   
                  <p class="gridsonte-titulo" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; height: 38px;">Niacin Niacina Vitamina B3 240 capsulas</p>
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
                  <p> </p>
                  <br>
                  <p style="text-decoration-line: line-through !important;">S/ 249.90</p>
                  <p> S/ 189.90 </p>
              </div>
          </div>
      </div>
  </section>
  
  <!-- SECCION PRODUCTOS MÁS VENDIDOS -->
  <section style="background-color: #f7f7f7;">   
    <div class="container marketing">      
      <div class="row featurette" style="background-color: #e6f8fc;">
          <div class="col-md-7">
            <h2 class="featurette-heading" style="margin-top: 2rem;" >Producto más popular entre varones</h2>
            <p class="lead"> 40% de clientes varones lo eligieron. </p>     
            <h3>Máquina de Afeitar Gillette Prestobarba3</h3>     
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;" src="img/producto/gileetesp_overview_402x.png">
          </div>
        </div>
        <div class="row featurette" style="background-color: #fdf6f0;">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading" style="margin-top: 2rem;" >Producto femenino más vendido</h2>
            <p class="lead">35% de clientes femeninas compraron este producto.</p>     
            <h3>Nuxe Neceser de Viaje Prodigieuse Florale</h3>     
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;" src="img/producto/3PTGRLHV_es_ES_0.png" >
          </div>
        </div>
        <div class="row featurette" style="background-color: #f3f8f5;">
          <div class="col-md-7">
            <h2 class="featurette-heading" style="margin-top: 2rem;" >Producto para adultos más vendido<span class="text-muted">(+ de 45 años)</span></h2>
            <p class="lead">45% de clientes adultos compraron este producto.</p>
            <h3>Ensure Advance con HMB Chocolate</h3>     
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" style="width: 250px; height: 250px;"  src="img/producto/ensurechocolate-400.png">
          </div>
      </div>
    </div>  
  </section>

  




  <!-- SECCION OFERTA DEL DÍA  -->
  <!-- SECCION OFERTA DEL DÍA  -->
  <!-- any change?  -->
  <!-- any change?  -->
  <!-- any change?  -->
  <!-- any change?  -->
  <!-- any changeS?  -->




</body>
</html>
