<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/nuevo.jpg" alt="">
      </div>

      <div class="content">
         <h3>¿Por qué elegirnos?</h3>
         <p>elegirnos como tu plataforma de comercio electrónico significa tener acceso a una amplia selección de productos de calidad, disfrutar de una experiencia de compra segura y placentera, y contar con un equipo de atención al cliente dispuesto a ayudarte en cada paso del camino. ¡Gracias por considerarnos como tu opción preferida para todas tus compras en línea!</p>
         <a href="contact.php" class="btn">contactanos</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Opiniones de clientes</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/cris.jpg" alt="">
         <p>Estoy extremadamente satisfecho con mi compra del Smartphone !Phone 11 en esta tienda en línea. Recomiendo encarecidamente este dispositivo y la tienda a todos aquellos que estén buscando un smartphone potente, con una gran cámara y una experiencia de compra. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Cristiano Ronaldo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Juan.jpg" alt="">
         <p>Estoy muy contento con mi compra del televisor ABC. Ha superado mis expectativas en términos de calidad de imagen, sonido y diseño. Si buscas un televisor que ofrezca una experiencia visual impresionante, este es definitivamente una excelente opción.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Juan p</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/nicol.jpg" alt="">
         <p> La lavadora samsung ha superado mis expectativas en todos los aspectos. Su eficiencia, capacidad, rendimiento y diseño hacen que sea una elección perfecta para mi hogar. La recomendaría sin dudarlo a cualquier persona que esté buscando una lavadora confiable </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nicol </h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Dorado.jpg" alt="">
         <p> La nevera ABC ha superado mis expectativas en términos de diseño, rendimiento y funcionalidad. Si estás buscando una nevera confiable y con características modernas, definitivamente te recomendaría considerar esta opción para tu hogar.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Andres Dorado</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/camilo.jpg" alt="">
         <p>El reloj deportivo XYZ ha superado mis expectativas en todos los aspectos. Su diseño versátil, funciones deportivas avanzadas y duración de batería prolongada lo hacen ideal para aquellos que llevan un estilo de vida activo. Sin duda, recomendaría este reloj a todos</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Camilo Ramirez</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/ximena.jpg" alt="">
         <p>El mouse modelo ABC ha sido una gran incorporación a mi configuración de escritorio. Desde que lo adquirí hace unos meses, mi experiencia informática ha mejorado significativamente mi vida ya que me facilita mi dia dia.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ximena</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
      
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
   autoplay:{
      delay:3000,
   },
});

</script>

</body>
</html>