<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucerna web</title>
    <link rel="stylesheet" href="/Lucerna/style.css">
    
</head>  
<body>
    <div class="top-bar">
    <header class="header-contenedor">
        <img src="/Lucerna/Recursos/foto.jpg" alt="foto_encabezado" class="header_imagen">
        <div class="texto_encima">Lucerna</div>
        
    </header>

    <nav>

        <div onclick="toggleMenu()">☰ Menú</div> 

        <div id="menu"> 
            <a href="index.php" >Home</a>
            <a href="quienessomos.php">¿Quienes somos?</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="comocomprar.php">¿Cómo comprar?</a>
            <a href="contacto.php">Contáctanos</a>
            <a href="carrito.php"> 🛒 Carrito </a>
        </div> 
        
    </nav>

   <main>

        <div style="text-align:center; margin:20px;">

        <a href="postres.php"><button class="btn_agregar">Postres</button></a>
        <a href="flores.php"><button class="btn_agregar">Flores</button></a>
        <a href="clasicas.php"><button class="btn_agregar">Clásicas</button></a>
        <a href="todas.php"><button class="btn_agregar">Todas</button></a>
        <a href="personaliza.php"><button class="btn_agregar">Personaliza tu Vela</button></a>

        </div>
  
    <section> 
        <div class="container">
            <h2 class="text-center my-4">Velas Clásicas</h2>

              <div class="row">
                <div id="catalogo_mostrar"></div>
              </div>
        </div>
    </section> 

    <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>


    </main>
    <script src="/Lucerna/script.js"></script>

    <script>
        cargarProductosAPI("clasicas")
    </script>

</body>
</html>