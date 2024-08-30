<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport   Core</title>
    <link rel="icon" type="image/png" href="recursos/logoIPET379.png">
    <link href="estilos.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
<h2>Sport Core</h2>
</header>
    <main class="container">
        
        <div class="card-container">
            <article class="card">
                <div class="card-body">
                    <h5 class="card-titulo">Calzado <span>🥾</span></h5>
                    <p class="card-price">$98000</p>
                    <button class="btn-agregar" data-deporte="Calzado" data-price="98000">Agregar</button>
                </div>
            </article>
            <article class="card">
                <div class="card-body">
                    <h5 class="card-titulo">Remeras <span>👕</span></h5>
                    <p class="card-price">$35000</p>
                    <button class="btn-agregar" data-deporte="Remeras" data-price="35000">Agregar</button>
                </div>
            </article>
            <article class="card">
                <div class="card-body">
                    <h5 class="card-titulo">Pantalones 🩳</h5>
                    <p class="card-price">$40000</p>
                    <button class="btn-agregar" data-deporte="Pantalones" data-price="40000">Agregar</button>
                </div>
            </article>
            <article class="card">
                <div class="card-body">
                    <h5 class="card-titulo">Conjunto🧥 </h5>
                    <p class="card-price">$122000</p>
                    <button class="btn-agregar" data-deporte="Conjunto" data-price="122000">Agregar</button>
                </div>
            </article>
        </div>
    </main>
    <!-- Carrito -->
    <section class="container">
        <ul class="list-group" id="carrito"></ul>
    </section>

    <!-- footerCarrito -->
    <section id="footerCarrito" class="container">

    </section>

     <!-- Template para los items del carrito -->
     <template id="template">
        <li class="list-item">
            <span class="item-cantidad">1</span>
            <span class="item-titulo">Producto</span>
            <div class="item-actions">
                <button class="btn-quitar">Quitar</button>
                <button class="btn-agregar">Agregar</button>
            </div>
            <p class="item-total">Total: $<span>0</span></p>
        </li>
    </template>

    <!-- Template del footerCarrito -->
    <template id="templatefooterCarrito">
        <div class="cardF">
            <div class="footerCarrito-content">
                <div class="total-container">
                    <p>Total: $</p>
                    <span>0</span>
                </div>
                <button id="openModalBtn" class="btn-finalizar">Finalizar compra</button>
            </div>
        </div>
    </template>
 <!-- Botón para abrir el modal -->
 <!---button id="openModalBtn" class="btn">Abrir Modal</button--->

 <!-- Modal para datos del usuario y pago -->
 <div id="modalPago" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos del Usuario y Pago</h5>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <form id="formPago" method="POST" action="procesar_comprar.php">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div>
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" required>
                    </div>
                    <div>
                        <label for="metodoPago">Método de Pago</label>
                        <select id="metodoPago" name="metodoPago" required>
                            <option value="tarjeta">Tarjeta de Crédito</option>
                            <option value="paypal">PayPal</option>
                            <option value="transferencia">Transferencia Bancaria</option>
                        </select>
                    </div>
                    <div>
                        <label for="totalCompra" class="totalCompraMostrar"></label>
                        <input type="hidden" id="totalCompra" name="totalCompra">
                        <span class="totalCompraM" >Gracias por tu compra!!!😀👍</span>

                    </div>
                    <button type="submit" class="btn">Pagar</button>
                </form>
              
            </div>
        </div>
    </div>
</div>


   
    <footer id="footer">

        <p>ESTUDIANTES 7° "B" IPET N° 379 LA CALERA CÓRDOBA<span><img src="recursos/logoIPET379.png"></span></p>
    </footer>
    <script src="appcarrito.js"></script>
</body>
</html>