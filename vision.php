<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOSOTROS</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/estilo.css">
  


</head>
<body>

  <header class="hero">
    <div class="container">
      <nav class="nav">
        <a href="home.php" class="nav__items nav__items--cta">Home</a> 
        <a href="contact.php" class="nav__items nav__items--cta">contactanos</a>

      </nav>

      <section class="hero__container">
        <div class="hero__text"></div>
        <h1 class="hero__tittle">BIENVENIDOS A ENIGMACODE.SAS</h1>
        

      </section>
    </div>
    <div style="" class="hero__wave" style=" overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C149.99,150.00 358.79,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: blue;"></path></svg></div>
  </header>   
  <main>
    <section class="presentation container">
    <img src="uploaded_img/JULIAN.jpg" class="presentation__picture">
    <h2 class="subtittle">Mi nombre es:Julian Camilo Ramirez</h2>
    <p class="presentation__copy">Soy una persona apasionada y dedicada a alcanzar metas, con entusiasmo por aprender y crecer constantemente. Me encanta explorar diversas áreas de conocimiento y abordar problemas de forma creativa. Mi curiosidad me impulsa a sumergirme en temas variados y siempre busco oportunidades para expandir mis habilidades. Disfruto trabajar en equipo y estoy comprometido con el crecimiento personal y hacer una diferencia positiva.</p>
    <img src="uploaded_img/dilan.jpg" class="presentation__picture">
    <h2 class="subtittle">Mi nombre es:Dilan Alexis Gonzalez</h2>
    <p class="presentation__copy">soy una persona proactiva, organizada y responsable 
      con buenas relaciones interpersonales .
      siempre tengo la mejor disposición para la realización
      de  mis labores.
      trato de tener una buena comunicación asertiva  
      para mejorar la comprensión mutua y mantener relaciones
      positivas.
      </p>
    
    <img src="uploaded_img/wilson.jpg" class="presentation__picture">
    <h2 class="subtittle">Mi nombre es:wilson pirazan </h2>
    <p class="presentation__copy">soy una persona muy apacionada por lo que hago tengo responsabilidad y muy puntual con mis cosas, tengo una buena interpretacion para solucinar probelmas  tengo una buena comunicacion aprovecho mi tiempo para estudiar y aclarar mis dudas sobre lo que no entiendo muy bien me gusta demostrar mis compromiso con las actividades y labores que me lococan o me toca realizar </p>
    <img src="" class="presentation__picture">
    <h2 class="subtittle">Mi nombre es:Kalil Tique</h2>
    <p class="presentation__copy">Me describo como una persona la cual es creativa, que se sabe desenvolver en varios entornos, productiva y que se caracteriza en ser responsable 
      Mis habilidades se basan en cosas de hardware y software ya que es mi fuerte y me desempeño  mejor en estos entornos
      Me gusta aprender sobre lenguajes de programacion de una manera  autonoma ya que desempeño de mi tiempo 2 horas diarias para la programacion</p>
    <img src="" class="presentation__picture">
    <h2 class="subtittle">Mi nombre es:Arley sanchez
    </h2>
    <p class="presentation__copy">Soy una persona muy activa que siempre busca la manera de buscar nuevas soluciones o nuevas formas de resolver problemas lo que nos ayudó a ahorrar tiempo y dinero.</p>
  </section>
  <section class="about container">
    <div class="about__texts">
      <h2 class="subtittle">Mision</h2>
      <p class="about__paragraph">Enigma Code es una empresa que automatiza procesos y resuelve problemas para los clientes que quieren emprender y modernizar sus protocolos de ventas. Creemos que el código es la clave para el éxito, y que al proporcionar a nuestros clientes las herramientas y el apoyo que necesitan, podemos ayudarlos a alcanzar sus objetivos..</p>
      

    </div>
    <figure class="about__img">
      <img src="uploaded_img/mision.jpg" class="about__picture">

    </figure>
    <figure class="about__img about__img--left">
      <img src="uploaded_img/vision.png" class="about__picture">
    </figure>

    <div class="about__texts">
      <h2 class="subtittle">Vision</h2>
      <p class="about__paragraph">Nuestra visión es ser la empresa líder en automatización de procesos, resolución de problemas y modernización de protocolos de ventas. Creemos que el código es la clave para el éxito, y que al proporcionar a nuestros clientes las herramientas y el apoyo que necesitan, podemos ayudarlos a alcanzar sus objetivos..</p>
      

    </div>

  </section>
  </main>   

</body>
</html>
<script src="js/script.js"></script>
<footer class="footer">
<?php include 'components/footer.php'; ?>
</footer>