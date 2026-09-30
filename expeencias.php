<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencias</title>
    <style>
        * {
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background: #f0f2f5;
  margin: 0;
  padding: 20px;
}

.navbar {
    background-color: #fff;
    border-bottom: 2px solid #eee;
    padding: 10px 20px;
}


.logo {
    width: 150px;
    height: auto;
    margin-right: 10px;
    margin-bottom: 0%;
    margin-top: 0%;
}


.brand-text {
    font-size: 22px;
    font-weight: bold;
    color: #6BE0A4; 
    text-transform: uppercase;
}


.navbar-nav .nav-link {
    color: #333;
    font-size: 18px;
    font-weight: 500;
    margin: 0 8px;
    transition: 0.3s;
    border-radius: 6px;
    padding: 8px 12px;
}


.navbar-nav .nav-link:hover {
    background-color:  #6BE0A4; 
    color: #fff;
}


.navbar-nav .nav-link.active {
    color: #6BE0A4;
    font-weight: bold;
}



.container {
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  font-size: 2.5em;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 40px;
}

h2 {
  text-align: center;
  font-size: 2.5em;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 40px;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.card {
  background: white;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 300px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.profile-pic {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #4e91fc;
  margin-bottom: 15px;
}

.name {
  font-weight: bold;
  font-size: 1.3em;
  color: #333;
}

.profession {
  font-weight: bold;
  font-size: 1em;
  color: #4e91fc;
  margin-bottom: 10px;
}

.info {
  color: #555;
  margin-bottom: 15px;
  font-size: 0.95em;
  line-height: 1.4em;
}

.stars {
  color: gold;
  font-size: 1.2em;
}
 </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="exprienca.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="home.php">
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
            <li class="nav-item"><a class="nav-link" href="experiencia.php">Experiencias</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Login</a></li>
        </ul>
        </div>
    </div>
    </nav> <br><br>
            


    <h1>EXPERIENCIA DE VOLUNTARIADOS</h1><br>
    <h2 class="question">¿Te gustaría contar tu experiencia?</h2> <br>

    </b>
    

    <div class="card-container">
    <div class="card">
        <img src="imágenes/usuarofoto.webp" alt="Foto de Juan" class="profile-pic">
        <div class="name">Juan Pérez</div>
        <div class="profession">Psicólogo</div>
        <div class="info">
        <h4>FUSATE</h4>
        Mi experiencia en este voluntariado fue muy bonita y grata ya que tuve la oportunidad de interactuar con personas adultas mayores,
        aprendí muchísimo al trato que tiene que tener cada uno de ellos y lo especial que son. Los animo a que participen en un voluntariado como estos.
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
        Quiero contar mi experiencia a través de este medio. Yo asistí al voluntariado de Hogar de niños Santa Tecla y quedé impresionada de la cantidad de niños que habían.
        Pude colaborar con medicamentos y darles chequeo médico. No fui sola, fui acompañada con mis compañeros de trabajo. Fue una experiencia muy bonita, pudimos ayudar a muchos niños
        y nos sentimos muy felices de hacer eso. Los animo a que puedan participar en uno de estos voluntariados.
        </div>
        <div class="stars">★ ★ ★ ★ ★</div>
    </div>

    <div class="card">
        <img src="imágenes/usuarofoto.webp" alt="Foto de Emiliano" class="profile-pic">
        <div class="name">Emiliano Caballero</div>
        <div class="profession">Programador</div>
        <div class="info">
        <h4>FUNZEL</h4>
        Yo soy fanático de los animales y participar en este voluntariado de liberación de tortugas fue una gran experiencia que sin duda volvería a vivir. Conocí a muchas personas,
        nos llevamos muy bien y pasamos un buen rato juntos. Motívense a participar, no se arrepentirán de nada.
        </div>
        <div class="stars">★ ★ ★ ★ ★</div>
    </div>

    <div class="card">
        <img src="imágenes/usuarofoto.webp" alt="Foto de Alicia" class="profile-pic">
        <div class="name">Alicia Guzmán</div>
        <div class="profession">Ama de casa</div>
        <div class="info">
        <h4>Limpiemos El Salvador</h4>
        Participé en un voluntariado de limpieza de playas con la fundación antes mencionada y fue una experiencia muy bonita y un poco cansada.
        Reflexioné mucho sobre cómo los seres humanos somos los responsables del estado del medio ambiente. Encontramos muchísimas cosas,
        como botellas, bolsas, cigarros, tapones y mucho más. Cuando terminamos de limpiar la playa quedé con esa satisfacción de que hice algo bien 
        y que estoy ayudando al medio ambiente. Les animo a vivir esta experiencia.
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
    </div><br>

    <h2>Cuentanos tu experiencia atraves de este forms</h2><br>
    <a href="index.php">Compartir Experiencia</a>
</body>
</html> 