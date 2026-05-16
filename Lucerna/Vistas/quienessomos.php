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

      <section class="seccion">
        <div class="seccion-imagen">
            <img src="/Lucerna/Recursos/vela_vela.jpg" alt="velita 1">
        </div>
        <div class="seccion-texto">
        <h2>¿Quienes somos?</h2>
        <p class="quienessomos"> Lucerna nace de la idea de que las velas son más que iluminación: son una forma de crear ambientes <br> y aportar estética a los espacios. <br><br>
            A través de diseños inspirados en postres, flores y estilos clásicos, buscamos ofrecer productos que no solo decoren, 
            sino que también generen una experiencia sensorial y emocional.<br><br>
            Creemos en el valor de los detalles y en cómo estos pueden transformar lo cotidiano en algo especial ✨</p>
        </div>

    </section>


 <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    </main>

    <script src="/Lucerna/script.js"></script>
</body>
</html>