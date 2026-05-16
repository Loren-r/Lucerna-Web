/* Menú */

 
        function toggleMenu() {
        let menu = document.getElementById("menu");
        let estado = window.getComputedStyle(menu).display;

        menu.style.display = (estado === "none") ? "flex" : "none";
    }
    

/* lista de productos para el catalogo de postres */


let productos = [];

async function cargarProductosAPI(categoria="") {
  console.log("Llamando API...");

  
const url = categoria 
  ? `/Lucerna/Controlador/api_productos.php?categoria=${encodeURIComponent(categoria)}`
  : `/Lucerna/Controlador/api_productos.php`;


  const resp = await fetch(url);
  const data = await resp.json();

  console.log("DATA:", data);

  if (!data.ok) {
    console.log("Error API:", data.error);
    return;
  }

  productos = data.productos;

  mostrarProductos(); 
}


/* función para el catalogo de postres */

function mostrarProductos() {
  let contenedor = document.getElementById("catalogo_mostrar");

  contenedor.innerHTML = "";

  productos.forEach(producto => {
    contenedor.innerHTML += `
      <div class="col-md-4 col-sm-6">
        <div class="card_producto">
          
          <img class="img_producto" src="${producto.imagen}">

          <h3>${producto.nombre}</h3>
          <p>$${producto.precio}</p>

          <details>
            <summary class="ver_mas">Ver más</summary>
            <p style="margin-top:10px;">
              ${producto.descripcion}
            </p>

            <button class="btn_agregar"
              onclick="agregarAlCarrito('${producto.nombre}', ${producto.precio});">
              Agregar al carrito
            </button>
          </details>

        </div>
      </div>
    `;
  });
}

    

/* resumen del personaliza tu vela */
function actualizarResumen() {

  let gramos = document.getElementById("gramos");
  let forma = document.getElementById("forma");
  let aroma = document.getElementById("aroma");
  let mecha = document.getElementById("mecha");
  let pack = document.getElementById("pack");
  let cantidad = document.getElementById("cantidad");

  let precio = 0;

  if (gramos.value) {
    precio += parseInt(gramos.selectedOptions[0].dataset.precio || 0);
  }

  if (forma.value) {
    precio += parseInt(forma.selectedOptions[0].dataset.extra || 0);
  }

  if (aroma.value) {
    precio += parseInt(aroma.selectedOptions[0].dataset.extra || 0);
  }

  if (mecha.value) {
    precio += parseInt(mecha.selectedOptions[0].dataset.extra || 0);
  }

  if (pack.value) {
    precio += parseInt(pack.selectedOptions[0].dataset.extra || 0);
  }

  let total = precio * parseInt(cantidad.value || 1);

  document.getElementById("precioEstimado").textContent = "$" + total.toLocaleString();
}




window.onload = () => {
  document.querySelectorAll("select, input").forEach(el => {
    el.addEventListener("change", actualizarResumen);
  });
};

/* carrito */

function agregarAlCarrito(nombre, precio) {

  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  carrito.push({ nombre, precio, cantidad: 1 });

  localStorage.setItem("carrito", JSON.stringify(carrito));

  alert("Producto agregado al carrito 🛒");
}


function cargarCarrito() {

  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  let contenedor = document.getElementById("listaCarrito");
  let total = 0;

  contenedor.innerHTML = "";

  carrito.forEach((item, index) => {

    total += item.precio;

    contenedor.innerHTML += `
      <div style="margin-bottom:10px;">
        ${item.nombre} - $${item.precio}

        <button onclick="eliminarItem(${index})">❎️</button>
      </div>
    `;
  });

  document.getElementById("total").textContent = "$" + total;
}

function eliminarItem(index) {
  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  carrito.splice(index, 1);

  localStorage.setItem("carrito", JSON.stringify(carrito));

  cargarCarrito();
}


document.getElementById("formPersonaliza").addEventListener("submit", function(e) {
  e.preventDefault(); 

  agregarVelaPersonalizada();
});

function agregarVelaPersonalizada() {

  let gramos = document.getElementById("gramos");
  let forma = document.getElementById("forma");
  let aroma = document.getElementById("aroma");
  let mecha = document.getElementById("mecha");
  let pack = document.getElementById("pack");
  let cantidad = document.getElementById("cantidad");

  let precio = 0;

  if (gramos.value) {
    precio += parseInt(gramos.selectedOptions[0].dataset.precio || 0);
  }

  if (forma.value) {
    precio += parseInt(forma.selectedOptions[0].dataset.extra || 0);
  }

  if (aroma.value) {
    precio += parseInt(aroma.selectedOptions[0].dataset.extra || 0);
  }

  if (mecha.value) {
    precio += parseInt(mecha.selectedOptions[0].dataset.extra || 0);
  }

  if (pack.value) {
    precio += parseInt(pack.selectedOptions[0].dataset.extra || 0);
  }

  let total = precio * parseInt(cantidad.value || 1);

  
  let nombre = `Vela personalizada (${forma.value}, ${aroma.value})`;

  let carrito = JSON.parse(localStorage.getItem("carrito")) || [];

  carrito.push({
    nombre: nombre,
    precio: total,
    cantidad: cantidad.value
  });

  localStorage.setItem("carrito", JSON.stringify(carrito));

  alert("Vela personalizada agregada 🕯️✨");
}