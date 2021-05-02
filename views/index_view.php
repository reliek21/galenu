<?php require 'header.php'; ?>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Galenu</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach ($fotos as $foto) : ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'] ?>">
                        <img src="fotos/<?php echo $foto['imagen'] ?>" alt="<?php echo $foto['titulo'] ?>">
                    </a>
                </div>
            <?php endforeach; ?>


            <div class="paginacion">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i> Pagina Anterior</a>
                <?php endif ?>

                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Siguiente Pagina <i class="fas fa-long-arrow-alt-right"></i></i></a>
                <?php endif ?>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>
</body>

</html>