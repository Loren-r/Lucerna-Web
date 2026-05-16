<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucerna web</title>
    <link rel="stylesheet" href="/Lucerna/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
        <div class="seccion-texto">
            <h2>¿Qué encontrarás en esta página?</h2>

                <p class="home"> En esta página encontrarás una variedad de velas artesanales inspiradas en postres, flores y diseños clásicos.<br>
                    Cada vela está pensada para entregar un toque especial a tus espacios, combinando estética, aroma y creatividad.<br>
                    Podrás explorar nuestro catálogo, conocer más sobre cada producto y seleccionar tus favoritos de manera sencilla.<br><br>

                                <b>Disfruta una experiencia única a través del diseño y el detalle en cada vela ✨</b></p>
        </div>

        <div class="seccion-imagen">
            <img src="/Lucerna/Recursos/foto velaaas.jpeg" alt="velita 1">
        </div>
    </section>
   

    <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    </main>
    <script src="/Lucerna/script.js"></script>
</body>
</html>