
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Catálogo en Línea</title>
    <style>
      


        body {
            font-family: 'Signika Negative', sans-serif;
            background: linear-gradient(to bottom, #03458c, #0056b3);
            margin: 0;
            padding: 0;
            animation: gradientAnimation 10s infinite alternate;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

        header {
            background-color: #5d88ec6b;
            color: #fff;
            text-align: center;
            padding: 2px 0;
            font-size: 40px;
        }

        .categorias-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px; 
        }

        .categoria {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .producto {
            background-color: #f9f9f9;
            padding: 10px;
            margin: 5px;
            border-radius: 6px;
        }

        .categoria-link {
            cursor: pointer;
            text-decoration: underline;
            color: #333;
            margin-top: 20px;
            color: #000000;
            transition: background-color 0.3s, color 0.3s;
            font-size: 40px;
        }

        .categoria-link:hover {
            
            color: #fff;
        }

        .categoria-link + .categoria {
            margin-top: 0;
            display: block;
        }

        .nav {
            display: flex;
            justify-content: flex-end;
            height: 70px;
            align-items: center;
            font-weight: 700;
        }

        .nav--footer {
            justify-content: flex-start;
        }

        .nav__items {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            padding: 10px 15px;
            font-weight: inherit;
        }

        .nav__items {
            border: 1px solid white;
        }

        .nav__items--footer {
            padding: 10px;
        }

        .btn-conteiner {
            display: flex;
            justify-content: center;
            --color-text: #ffffff;
            --color-background: #000b8d;
            --color-outline: #ff145b80;
            --color-shadow: #00000080;
        }

        .btn-content {
            display: flex;
            align-items: center;
            padding: 5px 30px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 30px;
            color: var(--color-text);
            background: var(--color-background);
            transition: 1s;
            border-radius: 100px;
            box-shadow: 0 0 0.2em 0 var(--color-background);
        }

        .btn-content:hover,
        .btn-content:focus {
            transition: 0.5s;
            -webkit-animation: btn-content 1s;
            animation: btn-content 1s;
            outline: 0.1em solid transparent;
            outline-offset: 0.2em;
            box-shadow: 0 0 0.4em 0 var(--color-background);
        }

        .btn-content .icon-arrow {
            transition: 0.5s;
            margin-right: 0px;
            transform: scale(0.6);
        }

        .btn-content:hover .icon-arrow {
            transition: 0.5s;
            margin-right: 25px;
        }

        .icon-arrow {
            width: 20px;
            margin-left: 15px;
            position: relative;
            top: 6%;
        }

        /* SVG */
        #arrow-icon-one {
            transition: 0.4s;
            transform: translateX(-60%);
        }

        #arrow-icon-two {
            transition: 0.5s;
            transform: translateX(-30%);
        }

        .btn-content:hover #arrow-icon-three {
            animation: color_anim 1s infinite 0.2s;
        }

        .btn-content:hover #arrow-icon-one {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.6s;
        }

        .btn-content:hover #arrow-icon-two {
            transform: translateX(0%);
            animation: color_anim 1s infinite 0.4s;
        }

        /* SVG animations */
        @keyframes color_anim {
            0% {
                fill: white;
            }

            50% {
                fill: var(--color-background);
            }

            100% {
                fill: white;
            }
        }

        /* Button animations */
        @-webkit-keyframes btn-content {
            0% {
                outline: 0.2em solid var(--color-background);
                outline-offset: 0;
            }
        }

        @keyframes btn-content {
            0% {
                outline: 0.2em solid var(--color-background);
                outline-offset: 0;
            }
        }
    </style>
       <style>
        @import url('https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap');
    </style>
</head>
<body>
    <header>
        <nav class="nav">
            
            <div class="btn-conteiner">
                <a     class="btn-content" href="../admin/products.php">
                  <span class="btn-title">Regresar</span>
                  <span class="icon-arrow">
                    <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                        <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                      </g>
                    </svg>
                  </span> 
                </a>
              </div>
    
          </nav>
        <h1>Mi Catálogo en Línea</h1>
    </header>

    
    <h2 class="categoria-link">Accesorios para Vehículos</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Tapicería de Cuero</li>
            <li class="producto">Relojes de Tablero</li>
            <li class="producto">Repuestos de Motor</li>
            <li class="producto">Luces LED</li>
            <li class="producto">Tornillos de Rueda</li>
            <li class="producto">Tapas de Llantas</li>
        </ul>
    </div>

   
    <h2 class="categoria-link">Alimentos y Bebidas</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Alimento para Mascotas</li>
            <li class="producto">Bebidas Energéticas</li>
            <li class="producto">Comida Preparada para Viajes</li>
            <li class="producto">Snacks Saludables</li>
            <li class="producto">Bebidas Gourmet</li>
            <li class="producto">Cervezas Artesanales</li>
        </ul>
    </div>

    
    <h2 class="categoria-link">Animales y Mascotas</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Collares para Perros</li>
            <li class="producto">Comida para Gatos</li>
            <li class="producto">Jaulas para Aves</li>
            <li class="producto">Acuarios para Peces</li>
            <li class="producto">Terrarios para Reptiles</li>
            <li class="producto">Heno para Conejos</li>
        </ul>
    </div>
    

    <h2 class="categoria-link">Ropa</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Camisetas</li>
            <li class="producto">Pantalones</li>
            <li class="producto">Vestidos</li>
            <li class="producto">Chaquetas</li>
            <li class="producto">Calcetines</li>
            <li class="producto">Sombreros</li>
        </ul>
    </div>

   
    <h2 class="categoria-link">Joyas</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Anillos de Diamantes</li>
            <li class="producto">Collares de Oro</li>
            <li class="producto">Pulseras de Plata</li>
            <li class="producto">Aretes de Perlas</li>
            <li class="producto">Relojes de Lujo</li>
            <li class="producto">Gemelos</li>
        </ul>
    </div>

    
    <h2 class="categoria-link">Libros</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Ficción</li>
            <li class="producto">No Ficción</li>
            <li class="producto">Novelas de Ciencia Ficción</li>
            <li class="producto">Libros de Cocina</li>
            <li class="producto">Biografías</li>
            <li class="producto">Libros de Historia</li>
        </ul>
    </div>

    
    <h2 class="categoria-link">Hogar y Muebles</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Sofás</li>
            <li class="producto">Mesas de Centro</li>
            <li class="producto">Sillas de Comedor</li>
            <li class="producto">Lámparas</li>
            <li class="producto">Cocina y Electrodomésticos</li>
            <li class="producto">Camas y Colchones</li>
        </ul>
    </div>

    
    <h2 class="categoria-link">Belleza y Cuidado Personal</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Maquillaje</li>
            <li class="producto">Cremas Antienvejecimiento</li>
            <li class="producto">Perfumes</li>
            <li class="producto">Cepillos y Peines</li>
            <li class="producto">Cuidado de la Piel</li>
            <li class="producto">Afeitadoras</li>
        </ul>
    </div>

    <h2 class="categoria-link">Arte</h2>
    <div class="categoria">
        <ul>
            <li class="producto">Pinturas al Óleo</li>
            <li class="producto">Esculturas</li>
            <li class="producto">Fotografías Artísticas</li>
            <li class="producto">Arte Digital</li>
            <li class="producto">Grabados</li>
            <li class="producto">Artesanía</li>
        </ul>
    </div>

  
    <script>
       
        var categoriaLinks = document.querySelectorAll('.categoria-link');

        
        categoriaLinks.forEach(function(link) {
            link.addEventListener('click', function() {
               
                var categoria = this.nextElementSibling;
               
                categoria.style.display = (categoria.style.display === 'none') ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>