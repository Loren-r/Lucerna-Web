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

   

   
    

<section id="personaliza" class="personaliza container my-5">
       <section>
      <div style="text-align:center; margin:20px;">

        <a href="postres.php"><button class="btn_agregar">Postres</button></a>
        <a href="flores.php"><button class="btn_agregar">Flores</button></a>
        <a href="clasicas.php"><button class="btn_agregar">Clásicas</button></a>
        <a href="todas.php"><button class="btn_agregar">Todas</button></a>
        <a href="personaliza.php"><button class="btn_agregar">Personaliza tu Vela</button></a>
    
        </div>
      </section>
  <h2 class="text-center mb-4">Personaliza tu vela</h2>

  <form id="formPersonaliza" class="p-4 rounded-4 shadow-sm bg-light">
    
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Tamaño (gramos)</label>
        <select id="gramos" class="form-select" required>
          <option value="" disabled selected>Selecciona...</option>
          <option value="100" data-precio="4500">100g</option>
          <option value="150" data-precio="6000">150g</option>
          <option value="200" data-precio="7500">200g</option>
        </select>
        <small class="text-muted">*Precios de ejemplo: ajusta a tu gusto</small>
      </div>

      <div class="col-md-6">
        <label class="form-label">Forma</label>
        <select id="forma" class="form-select" required>
          <option value="" disabled selected>Selecciona...</option>
          <option value="Postre" data-extra="800">Postre (+$800)</option>
          <option value="Flor" data-extra="700">Flor (+$700)</option>
          <option value="Clásica" data-extra="0">Clásica (+$0)</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Aroma</label>
        <select id="aroma" class="form-select" required>
          <option value="" disabled selected>Selecciona...</option>
          <option value="Vainilla" data-extra="0">Vainilla</option>
          <option value="Lavanda" data-extra="0">Lavanda</option>
          <option value="Frutilla" data-extra="0">Frutilla</option>
          <option value="Café" data-extra="500">Café premium (+$500)</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Color</label>
        <input id="color" type="color" class="form-control form-control-color" value="#f7d6c1" title="Elige un color">
        <small class="text-muted">Color no suma (puedes cambiarlo si quieres)</small>
      </div>

      <div class="col-md-6">
        <label class="form-label">Mecha</label>
        <select id="mecha" class="form-select" required>
          <option value="" disabled selected>Selecciona...</option>
          <option value="Algodón" data-extra="0">Algodón (+$0)</option>
          <option value="Madera" data-extra="600">Madera (+$600)</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label">Packaging</label>
        <select id="pack" class="form-select" required>
          <option value="" disabled selected>Selecciona...</option>
          <option value="Sin caja" data-extra="0">Sin caja (+$0)</option>
          <option value="Caja regalo" data-extra="900">Caja regalo (+$900)</option>
          <option value="Caja premium" data-extra="1500">Caja premium (+$1500)</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Mensaje (opcional)</label>
        <input id="mensaje" type="text" class="form-control" maxlength="40" placeholder="Ej: Para mamá 💛">
        <small class="text-muted">Hasta 40 caracteres</small>
      </div>

      <div class="col-md-4">
        <label class="form-label">Cantidad</label>
        <input id="cantidad" type="number" class="form-control" value="1" min="1" max="20" required>
      </div>

      <div class="col-md-8 d-flex align-items-end justify-content-between">
        <div>
          <div class="fw-bold">Precio estimado:</div>
          <div id="precioEstimado" class="fs-4">$0</div>
        </div>

        <button type="submit" class="btn btn-success btn-lg">
          Agregar al carrito
        </button>
      </div>
    </div>

  </form>

<div>

  <h5><span id="precioEstimado"></span></h5>
</div>


</section>

    </main>

    <footer>
        <p>&copy; 2026 Lucerna</p>
    </footer>
    

    

<script src="/Lucerna/script.js"></script>
</body>
</html>