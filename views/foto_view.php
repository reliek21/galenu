<?php require 'header.php'; ?>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo"><?php if (!empty($foto['titulo'])) {
                                    echo  $foto['titulo'];
                                } else {
                                    echo $foto['titulo'];
                                } ?></h1>
        </div>
    </header>

    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
            <p class="texto"><?php echo $foto['texto']; ?></p>
            <a href="index.php" class="regresar"><i class="fas fa-arrow-left"></i> Regresar</a>
            <a href="#" class="regresar" id="btn-abrir-popup"><i class="fas fa-shopping-bag"></i> Comprar</a>
            <a href="#"></a>
        </div>
    </div>

    <?php require 'proceso_pago.php'; ?>
    <?php require 'footer.php'; ?>
</body>