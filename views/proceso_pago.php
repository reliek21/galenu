<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <div class="parrafos">
            <h3 class="titulo">Detalles del pago</h3>
            <h4 class="subtitulo">Al iniciar la compra se agregan los <span>terminos y condiciones</span></h4>
            <div class="targetas">
                <p><i class="fab fa-cc-visa visa"></i></p>
                <p><i class="fab fa-cc-mastercard master"></i></p>
                <p><i class="fab fa-cc-paypal paypal"></i></p>
            </div>
        </div>
        <form action="index.php" method="post" class="formulario">
            <div class="caja-uno">
                <input type="text" placeholder="Nombre del titular">
                <input type="text" placeholder="Departamento">
            </div>
            <div class="caja-dos">
                <input type="text" placeholder="Numero de targeta">
                <div class="media">
                    <input type="text" placeholder="Expiracion">
                    <input type="password" placeholder="CVV">
                </div>
            </div>
            <input type="submit" value="Procesar Pago">
        </form>
    </div>
</div>
<script src="js/overlay.js"></script>