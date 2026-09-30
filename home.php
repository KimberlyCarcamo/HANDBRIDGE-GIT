<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="home1.css">
    
</head>
<body>

    
   <nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="imágenes/logoenhorizontal.luchi.png" alt="Hand Bridge Logo" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="home.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="conocenos.php">Conócenos</a></li>
        <li class="nav-item"><a class="nav-link" href="donar.php">Donaciones</a></li>
         <li class="nav-item"><a class="nav-link" href="expeencias.php">Experiencias</a></li>
         <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
        
            <div class="container my-5">
      <div class="row align-items-center carrusel-contenido">
        <div class="col-md-6 order-2 order-lg-1">
          <h1 class="titulo-principal">HAND BRIDGE</h1>
          <h2 class="display-1 fw-bold"> TU AYUDA EN <br> UN SOLO CLICK</h2>
          <div class="button mt-4">
            <a href="index.php">
            <button>¡Ayuda ya!</button>
          </a>
          </div>
        </div>

        <div class="col-md-6 order-1 order-lg-2">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imágenes/Img1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item mt-4" style="max-height: 700px;">
                <img src="imágenes/img3.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item mt-4" style="max-height: 700px;">
                <img src="imágenes/carusel2.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <h3 class="text-center mt-5">Explora voluntariados</h3>
      <div class="text-center mt-5, fs-3"><h3>y selecciona el que más te inspire en ayudar</h3></div>

    <section id="fundacines">
        <div class="container my-4 py-4">
            <div class="row mb-4">
                <div class="col-md-4 mt-5">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="imágenes/cangrejo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Limpieza de playas</h5>
                    <p class="card-text">Aquí encontrarás más información de fundaciones que se encargan de las limpiezas.</p>
                    
                    <button class="btn-estilo2 text-black" onclick="window.location.href='limpieza.php';"><h5>¡Únete!</h5></button>
                </div>
                </div>
            </div>
              <div class="col-md-4 mt-5">
                <div class="card text-center" style="width: 18rem;">
                <img src="imágenes/niños.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hogar de niños</h5>
                    <p class="card-text"> Encontrarás más información de fundaciones que ayudan a niños pequeños en hogares para niños</p>
                    <button class="btn-estilo2 text-black"  onclick="window.location.href='aniños.php';"><h5>¡Únete!</h5></button>
                </div>
                </div>

                 </div>
              <div class="col-md-4 mt-5">
                <div class="card text-center" style="width: 18rem;">
                <img src="imágenes/mascot.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Refugios de mascotas</h5>
                    <p class="card-text">Tú puedes encontrar más información de Refugios que se encargan del cuido de Mascotas y animales.</p>
                    <button class="btn-estilo2 text-black"  onclick="window.location.href='mascotas.php';"><h5>¡Únete!</h5></button>
                </div>
                </div>
            </div>
            <div class="col-md-4 mt-5 text-center">
                <div class="card text-center" style="width: 18rem;">
                <img src="imágenes/Ancianos11.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Asilos </h5>
                    <p class="card-text">Encontrarás más información de fundaciones que se encargan de ayudar a personas de la tercera edad.</p>
                    <button class="btn-estilo2 text-black"   onclick="window.location.href='asilos.php';"><h5>¡Únete!</h5></button>

                </div>
                </div>
                    </div>
                </div><br>

  
    <h1 class="xe"  >EXPERIENCIA DE VOLUNTARIADOS</h1><br><br>

    <div class="card-container">

      <div class="card">
        <img src="imágenes/usuarofoto.webp
      " alt="Foto de Juan" class="profile-pic">
        <div class="name">Juan Pérez</div>
        <div class="profession">Psicólogo</div>
        <div class="info">
          <h4>FUSATE</h4>
          Mi experiencia en este voluntariado fue muy bonita ya que tuve la oportunidad de interactuar con perritos, y también doné unos medicamentos para
          aquellos perritos que se encontraban enfermos. Les animo a participar en voluntariados como estos.
        </div>
        <div class="stars">★ ★ ★ ★ ☆</div>
      </div>

      <div class="card">
        <img src="imágenes/usuarofoto.webp" alt="Foto de Laura" class="profile-pic">
        <div class="name">Laura Martínez</div>
        <div class="profession">Veterinaria</div>
        <div class="info">
          <h4>Échame una patita</h4>
          Mi experiencia en este voluntariado fue muy bonita ya que tuve la oportunidad de interactuar con perritos, y también doné unos medicamentos para
          aquellos perritos que se encontraban enfermos. Les animo a participar en voluntariados como estos.
        </div>
        <div class="stars">★ ★ ★ ★ ★</div>
      </div>

      <div class="card">
        <img src="imágenes/usuarofoto.webp" alt="Foto de Camila" class="profile-pic">
        <div class="name">Camila Reyes</div>
        <div class="profession">Doctora</div>
        <div class="info">
          <h4>Hogar de niños Santa Tecla</h4>
          Mi experiencia en este voluntariado fue muy bonita ya que tuve la oportunidad de interactuar con perritos, y también doné unos medicamentos para
          aquellos perritos que se encontraban enfermos. Les animo a participar en voluntariados como estos.
        </div>
        <div class="stars">★ ★ ★ ★ ★</div>
      </div>
    </div>
  </div>
  </section>

        <section class="seccion-voluntariado">
      <div class="container text-center">
        <h2 class="mt-5 text-black">Si deseas participar en uno de los voluntariados</h2>
        <h2 class="mt-2 text-black">La fundación a la que ayudes reconocerá tu trabajo con un certificado</h2>
      </div>

      <div class="imagen-banner">
        <img src="imágenes/Img2.jpg" alt="Voluntariado">
        <div class="texto-superpuesto">
          <h1 class="text-help">TU AYUDA ES ESENCIAL</h1>
        </div>
      </div>

      
    <div class="container mt-5">
        <div class="row">
            <img src="" alt="">
            <div class="text-center mt-5, fs-3"><h1 class="text-info">PARA MÁS INFORMACIÓN:</h1></div>
        </div><br>
      

     <div class="container contact-section mt-5">
    <div class="row align-items-center">
        
       
        <div class="col-md-6 contact-info p-4">
            <h2 class="contact-title"><h2>Contáctanos</h2>
            <hr class="title-underline">
            
            <div class="contact-item">
                <h3><i class="bi bi-envelope"></i> <h2>Email</h2>
                <p><a href="mailto:hand_bridge@gmail.com">hand_bridge@gmail.com</a></p>
            </div>
            
            <div class="contact-item">
                <h3><i class="bi bi-telephone"></i> <h2>Teléfono</h2>
                <p><a href="tel:+50371879089">+503 7187-9089</a></p>
            </div>
            
            <div class="contact-item">
                <h3><i class="bi bi-file-earmark"></i> <h2>Forms</h2>
                <p><a href="https://forms.office.com" target="_blank">https://forms.office.com</a></p>
            </div>
        </div>
        
        
        <div class="col-md-6 text-center">
            <img src="imágenes/Logo tipo hand brigde.png" alt="Imagen de contacto" class="img-fluid rounded shadow">
        </div>
        
    </div>
</div>

      <footer class="footer">
    <div class="footer-container">
      <div class="footer-carousel">
        <a href="#" class="footer-item"><i class="bi bi-tiktok"></i> TikTok</a>
        <a href="#" class="footer-item"><i class="bi bi-facebook"></i> Facebook</a>
        <a href="#" class="footer-item"><i class="bi bi-instagram"></i> Instagram</a>
        <a href="#" class="footer-item"><i class="bi bi-twitter-x"></i> Twitter</a>
        <a href="#" class="footer-item"><i class="bi bi-youtube"></i> YouTube</a>
      </div>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>


