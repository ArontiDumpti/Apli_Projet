

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
  
  <style>
    body {
      background-color: #f5f5f5;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin: 50px auto;
      max-width: 600px;
      padding: 20px;
      background: linear-gradient(to bottom, #8b0032, #4c0016);
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      color: #fff;
    }

    .title {
      font-size: 2em;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      color: #fff; /* Asegura que el color del texto sea blanco */
    }

    .subtitle {
      font-size: 1.5em;
      color: #fff; /* Asegura que el color del texto sea blanco */
    }

    /* Agrega estilos para el carrusel */
    .slick-slider {
      width: 80%;
      margin: 0 auto;
    }

    .slick-slide img {
      width: 100%;
      border-radius: 8px;
    }
  </style>
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

</body>
</html>
