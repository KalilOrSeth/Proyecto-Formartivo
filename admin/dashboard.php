<?php
include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:admin_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Panel de Administración - Agregar Tiendas</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
   <style>
      
      .center-image {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh; 
         margin-top: -14vh; 
         flex-direction: column; 
      }

      .center-image img {
         width: 28%; 
      }
      
      .center-image p {
         margin-top: 10px; 
         font-size: 20px; 
      }
   </style>
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<div class="center-image">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbbmR3Eoy1myIf8jmViCY431Tg9WZkmk2LoA22ynJg0--FCIWi" alt="">
   <p>ENIGMA CODE SAS</p>
</div>

</body>
</html>
