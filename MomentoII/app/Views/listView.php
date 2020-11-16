<?php include_once('header.php'); ?>


<div class="row row-cols-1 row-cols-md-3 mt-4">

    <?php foreach ($animals as $animal) : ?>

        <div class="col mb-4">
            <div class="card h-100">
                <img src="<?php echo ($animal["image"]) ?> " class="card-img-top" alt="Imagen de animal">
                <div class="card-body">
                    <h5 class="card-title">Nombre: <?php echo ($animal["name"]) ?></h5>
                    <p class="card-text">Edad: <?php echo ($animal["age"]) ?> </p>
                    <p class="card-text">
                        <?php
                        if ($animal["type"] == 0) {
                            echo ("Tipo: Doméstico");
                        } else {
                            echo ("Tipo: Fauna Silvestre");
                        }
                        ?>
                    </p>
                    <p class="card-text">Descripción: <?php echo ($animal["description"]) ?> </p>
                    <p class="card-text">Comida: <?php echo ($animal["food"]) ?> </p>
                    
                    <a href="<?php echo(base_url("public/Registroanimales/eliminar/".$animal["id"])) ?>" class="btn btn-dark mr-4" role="button">Eliminar</a>

                </div>
            </div>
        </div>

    <?php endforeach ?>

</div>







<?php include_once('footer.php'); ?>