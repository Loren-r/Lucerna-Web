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
    <section class="contacto-card">
        <h2>Contáctanos</h2>
        <form method="post" action="enviar.php">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="user_name" />
                
            <label for="mail">Correo:</label>
            <input type="email" id="mail" name="user_mail"/>
                
            <label for="msg">Mensaje:</label>
            <textarea id="msg" name="user_message"></textarea>
                
            <button class="button" type="submit" onclick="alert('Mensaje enviado correctamente')">Enviar</button>

        </form>
    </section>
   

 <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    </main>
    <script src="/Lucerna/script.js"></script>
</body>
</html>