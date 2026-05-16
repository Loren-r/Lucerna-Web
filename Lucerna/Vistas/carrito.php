<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucerna web</title>
    <link rel="stylesheet" href="\Lucerna\style.css">
    
</head>  
<body>
    <div class="top-bar">
    <header class="header-contenedor">
        <img src="\Lucerna\Recursos\foto.jpg" alt="foto_encabezado" class="header_imagen">
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

    </div>

    <main>
 
       <div class="container mt-4">

         <h2 class="text-center">🛒 Tu carrito</h2>

        <div id="listaCarrito" class="carrito-grid"></div>

        <hr>

         <h3 lass="text-end">
             Total: <span id="total">$0</span>
         </h3>

</div>

    </main>
   
    <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    
    <script src="\Lucerna\script.js"></script>
    <script>
         window.onload = cargarCarrito;
    </script>
</body>
</html>