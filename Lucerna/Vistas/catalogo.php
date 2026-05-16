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

    </div>

    <main>
  
    <section id="catalogos"> 

     <h1 class="catalogos"> Catálogo</h1> 
      <div class="contenedor"> 
      <div class="card"> 
        <a href="postres.php">
        <img src="/Lucerna/Recursos/postre.png" alt="Postres"> 
        </a>
        <h3>Postres</h3> 
        
      </div> 
      <div class="card"> 
        <a href="flores.php">
        <img src="/Lucerna/Recursos/flores.png" alt="Flores"> 
        </a>
        <h3>Flores</h3> 
        
      </div> 
      <div class="card"> 
        <a href="clasicas.php">
        <img src="/Lucerna/Recursos/clasicas.png" alt="Clásicos"> 
        </a>
        <h3>Clásicos</h3> 
      </div> 
    </div> 
    <br>
    <div class="contenedor"> 
      <div class="card"> 
        <a href="todas.php">
        <img src="/Lucerna/Recursos/todas.png" alt="Todas"> 
        </a>
        <h3>Todas</h3> 
        
      </div> 
      <br>
    <div class="contenedor"> 
      <div class="card"> 
        <a href="personaliza.php">
        <img src="/Lucerna/Recursos/personaliza.png" alt="Personaliza tu vela"> 
        </a>
        <h3>Personaliza tu vela</h3> 
      </div> 

    </section>




 <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    </main>
    <script src="/Lucerna/script.js"></script>
</body>
</html>