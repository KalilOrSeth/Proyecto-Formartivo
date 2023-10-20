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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inicio</title>
   <img src="images/fondo.je" alt="">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/manillas-2.png" alt="Descripción de la imagen" style="border-radius: 50%; max-width: 100%; height: auto; width: 60%; margin-left: 20%;">
         </div>
         <div class="content">
            <h2>Hasta 50% de descuento</h2>
            <h3>Últimas manillas</h3>
            <a href="shop.php" class="btn">Ultimos Productos</a>
            
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/donas1.png" alt="Descripción de la imagen" style="border-radius: 50%; max-width: 100%; height: auto; width: 60%; margin-left: 20%;">>
         </div>
         <div class="content">
            <h2>Hasta 60% de descuento</h2>
            <h3>ultimas donuts</h3>
            <a href="shop.php" class="btn">Ultimos Productos</a>
            
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/dunk.png" alt="Descripción de la imagen" style="border-radius: 50%; max-width: 100%; height: auto; width: 60%; margin-left: 20%;">>
         </div>
         <div class="content">
            <h2>Hasta 40% de descuento</h2>
            <h3>Ultimos zapatos</h3>
            <a href="shop.php" class="btn">Ultimos Productos</a>
         
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Comprar por categoría</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Alimentos y Bebidas" class="swiper-slide slide">
      <div class="efecto">
      <img src="images/alimentos-y-bebidas.png" alt="" class="no-gif">
      </div>
      <h3>Alimentos y Bebidas</h3>
   </a>

   
<script>

</script>

   <a href="category.php?category=Antiguedad y colecciones" class="swiper-slide slide">
      <img src="images/comercio.png" alt="">
      <h3>antiguedad y colecciones</h3>
   </a>

   <a href="category.php?category=Animales y Mascotas" class="swiper-slide slide">
      <img src="images/casa-de-mascotas.png" alt="">
      <h3>animales y mascotas</h3>
   </a>

   <a href="category.php?category=Arte" class="swiper-slide slide">
      <img src="images/lienzo.png" alt="">
      <h3>Arte</h3>
   </a>

   <a href="category.php?category=Belleza y cuidado personal" class="swiper-slide slide">
      <img src="images/productos-cosmeticos (1).png" alt="">
      <h3>Belleza y cuidado personal</h3>
   </a>

   <a href="category.php?category=Hogar y muebles" class="swiper-slide slide">
      <img src="images/muebles.png" alt="">
      <h3>Hogar y muebles</h3>
   </a>

   <a href="category.php?category=libros" class="swiper-slide slide">
      <img src="images/libros.png" alt="">
      <h3>libros</h3>
   </a>

   <a href="category.php?category=joyas" class="swiper-slide slide">
      <img src="images/joyeria.png" alt="">
      <h3>joyas</h3>
   </a>
   <a href="category.php?category=ropa" class="swiper-slide slide">
      <img src="images/tendedero.png" alt="">
      <h3>ropa</h3>
   </a>
   

   </div>

   <div class="swiper-pagination"></div>

   </div>


  





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});
var swiper = new Swiper(".products-slider", {
  loop:true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  autoplay: {
    delay: 3000,
  },
});
var swiper = new Swiper(".home-slider", {
  loop:true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  autoplay: {
    delay: 3000,
  },
});
var swiper = new Swiper(".category-slider", {
  loop:true,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  autoplay: {
    delay: 3000,
  },
});


</script>


</body>
</html>