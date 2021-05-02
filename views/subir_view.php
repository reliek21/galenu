<?php require 'header.php'; ?>

<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Fotos</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" name="titulo" id="titulo">

            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if (isset($error)) : ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>

    <?php require 'footer.php'; ?>
</body>