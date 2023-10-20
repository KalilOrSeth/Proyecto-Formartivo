<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    

    button {
     --glow-color: rgb(11 80 192);
     --glow-spread-color: rgba(191, 123, 255, 0.781);
     --enhanced-glow-color: rgb(231, 206, 255);
     --btn-color:rgb(35 14 231);
     border: .25em solid white;
     padding: 1em 3em;
     color: var(--glow-color);
     font-size: 15px;
     font-weight: bold;
     background-color:rgb(34 88 203);
     border-radius: 1em;
     outline: none;
     box-shadow: 0 0 1em .25em var(--glow-color),
            0 0 4em 1em var(--glow-spread-color),
            inset 0 0 .75em .25em var(--glow-color);
     text-shadow: 0 0 .5em var(--glow-color);
     position: relative;
     transition: all 0.3s;
    }
    
    button::after {
     pointer-events: none;
     content: "";
     position: absolute;
     top: 120%;
     left: 0;
     height: 100%;
     width: 100%;
     background-color: var(--glow-spread-color);
     filter: blur(2em);
     opacity: .7;
     transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
    }
    
    button:hover {
     color: var(--btn-color);
     background-color: var(--glow-color);
     box-shadow: 0 0 1em .25em var(--glow-color),
            0 0 4em 2em var(--glow-spread-color),
            inset 0 0 .75em .25em var(--glow-color);
    }
    
    button:active {
     box-shadow: 0 0 0.6em .25em var(--glow-color),
            0 0 2.5em 2em var(--glow-spread-color),
            inset 0 0 .5em .25em var(--glow-color);
    }
    
    
    
    
    </style>
</head>
<body>
<nav class="nav">
    
    <button> <a href="../home.php" class="nav__items nav__items--cta">Home</a>
</button>

</nav>

<section class="form-container">
    
<?php
if(isset($_POST['submit'])) {
    if($_POST['name'] == "admin123" && $_POST['pass'] == "12345" ) {
        session_start();
      
        $_SESSION['usuario'] = $_POST['name'];
        $_SESSION['validacion'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

        header("Location: admin_accounts.php");
        exit(); 
    } else {
        echo "<script>
        alert('Datos incorrectos'); window.location='formulario_admin.php';
        </script>";
    }
}
?>



<form action="" method="post">
    <h3>Hola admin</h3>
    <input type="text" name="name" required placeholder="Ingrese su nombre de usuario" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
    <input type="password" name="pass" required placeholder="Ingresa tu contraseña" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
    <input type="submit" value="Ingresar" class="btn" name="submit">
    
   
    
</form>

</section>
<?php include '../components/footer.php'; ?>

</body>
</html>
