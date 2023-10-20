<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
}

if (isset($_POST['add_product'])) {

   $product_name = $_POST['product_name'];
   $product_name = filter_var($product_name, FILTER_SANITIZE_STRING);
   $store_details = $_POST['store_details'];
   $store_details = filter_var($store_details, FILTER_SANITIZE_STRING);

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);

   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/' . $image_01;

   $image_02 = $_FILES['image_02']['name'];
   $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
   $image_size_02 = $_FILES['image_02']['size'];
   $image_tmp_name_02 = $_FILES['image_02']['tmp_name'];
   $image_folder_02 = '../uploaded_img/' . $image_02;

   $image_03 = $_FILES['image_03']['name'];
   $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
   $image_size_03 = $_FILES['image_03']['size'];
   $image_tmp_name_03 = $_FILES['image_03']['tmp_name'];
   $image_folder_03 = '../uploaded_img/' . $image_03;

   $insert_products = $conn->prepare("INSERT INTO `products`(product_name, store_details, name, price, image_01, image_02, image_03) VALUES(?,?,?,?,?,?,?)");
   $insert_products->execute([$product_name, $store_details, $name, $price, $image_01, $image_02, $image_03]);

   if ($insert_products) {
       if ($image_size_01 > 2000000 || $image_size_02 > 2000000 || $image_size_03 > 2000000) {
           $message[] = '¡El tamaño de la imagen es demasiado grande!';
       } else {
           move_uploaded_file($image_tmp_name_01, $image_folder_01);
           move_uploaded_file($image_tmp_name_02, $image_folder_02);
           move_uploaded_file($image_tmp_name_03, $image_folder_03);
           $message[] = '¡Nuevo producto añadido!';
       }
   }
}

// Resto de tu código...


if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    $delete_product_image = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
    $delete_product_image->execute([$delete_id]);
    $fetch_delete_image = $delete_product_image->fetch(PDO::FETCH_ASSOC);
    unlink('../uploaded_img/' . $fetch_delete_image['image_01']);
    unlink('../uploaded_img/' . $fetch_delete_image['image_02']);
    unlink('../uploaded_img/' . $fetch_delete_image['image_03']);
    $delete_product = $conn->prepare("DELETE FROM `products` WHERE id = ?");
    $delete_product->execute([$delete_id]);
    $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
    $delete_cart->execute([$delete_id]);
    $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
    $delete_wishlist->execute([$delete_id]);
    header('location:products.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
    <style>
        .swiper-slide.slide {
            display: inline-block;
            padding: 10px 20px;
            color: black;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .swiper-slide.slide:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>

    <?php include '../components/admin_header.php'; ?>

    <section class="add-products">
        <h1 class="heading">Añadir productos</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputBox">
                    <span>Nombre del producto (requerido)</span>
                    <input type="text" class="box" required maxlength="100" placeholder="Introduce el nombre del producto" name="product_name">
                </div>
                <div class="inputBox">
                    <span>Nombre de la tienda (requeridos)</span>
                    <textarea name="store_details" placeholder="Ingresa los detalles de la tienda" class="box" required maxlength="500" cols="30" rows="10"></textarea>
                </div>
                <div class="inputBox">
                    <span>Nombre de la categoría (requerido)</span>
                    <input type="text" class="box" required maxlength="100" placeholder="Introduce el nombre de la categoría" name="name">
                </div>
                <div class="inputBox">
                    <span>Precio (requerido)</span>
                    <input type="text" class="box" required placeholder="Introduce el precio" name="price">
                </div>
                <div class="inputBox">
                    <span>Imagen 01 (Producto)</span>
                    <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
                </div>
                <div class="inputBox">
                    <span>Imagen 02 (Tienda)</span>
                    <input type="file" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
                </div>
                <div class="inputBox">
                    <span>Imagen 03 (Producto)</span>
                    <input type="file" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
                </div>
            </div>
            <input type="submit" value="Añadir producto" class="btn" name="add_product">
        </form>
    </section>

    <section class="show-products">
        <!-- Mostrar productos aquí -->
    </section>

    <script src="../js/admin_script.js"></script>

</body>

</html>
