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
    
    <section class="seccion">
        <h2>🛍️ ¿Cómo comprar en Lucerna?</h2>
                <ol class="comocomprar">
                    <li>Explora nuestro catálogo de velas y revisa los productos disponibles.</li>
                    <li> Haz clic en “Ver más” para obtener información detallada del producto.</li>
                    <li> Presiona “Agregar al carrito” para añadir el producto a tu compra.</li>
                    <li> Puedes agregar varios productos y eliminarlos si lo deseas desde el carrito.</li>
                    <li> Revisa el total de tu compra.</li>
                    <li> Presiona “Finalizar compra” para completar el proceso.</li>
                </ol>
    </section>


 <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    </main>
    <script src="/Lucerna/script.js"></script>
</body>
</html>