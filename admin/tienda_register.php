<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>registrar tienda</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>



<section class="dashboard">
<?php

include '../components/connect.php';

// ... (código anterior)

?>

<section class="add-products">

   <h1 class="heading">crea tu tienda</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>nombre de la tienda (requerido)</span>
            <input type="text" class="box" required maxlength="100" placeholder="Introduzca el nombre del producto" name="name">
         </div>
         <div class="inputBox">
            <span>numero de telefono (requerido)</span>
            <input type="number" min="0" class="box" required max="9999999999" placeholder="Introduzca el precio del producto" onkeypress="if(this.value.length == 10) return false;" name="price">
         </div>
         <div class="inputBox">
            <span>imagen de la tienda  (requerido)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
         </div>
         <div class="inputBox">
            <span>imagen de la tienda  (requerido)</span>
            <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
         </div>
         <div class="inputBox">
            <span>imagen de la tienda  (requerido)</span>
            <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
         </div>
         <div class="inputBox">
            <span>categoria del producto (requerido)</span>
            <select name="category" class="box" required>
               <option value="artesanales">Artesanales</option>
               <option value="comida">Comida</option>
               <option value="postres">Postres</option>
            </select>
         </div>
         <div class="inputBox">
            <span>detalle de la tienda (requerido)</span>
            <textarea name="details" placeholder="Introduzca los detalles del producto" class="box" required maxlength="500" cols="30" rows="10"></textarea>
         </div>
      </div>
     
      <input type="submit" value="añadir Tienda" class="btn" name="add_product">
   </form>

</section>

<?php
// ... (código posterior)
?>

<script src="../js/admin_script.js"></script>
   
</body>
</html>

