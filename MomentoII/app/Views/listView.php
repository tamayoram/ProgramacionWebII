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
                   
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#editar<?php echo($animal["id"])?>"> Editar </button>

                </div>
            </div>
    
                <div class="modal fade" id="editar<?php echo($animal["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Características del animal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo(base_url("public/Registroanimales/modificar/".$animal["id"])) ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" value="<?php echo ($animal["name"]) ?>"name="nameEdit">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Edad:</label>
                                        <input type="text" class="form-control" value="<?php echo ($animal["age"]) ?>" name="ageEdit">
                                    </div>
                                <!--
                                    <div class="form-group">
                                        <label>Tipo:</label>
                                        <select name="typeEdit" class="form-control">
                                            <option>

                                                <?php
                                                    if ($animal["type"] == 0) {
                                                        echo ("Doméstico");
                                                    } else {
                                                        echo ("Fauna Silvestre");
                                                    }
                                                ?>
                                            
                                            </option>
                                            <option>
                                                <?php
                                                    if ($animal["type"] == 0) {
                                                        echo ("Fauna Silvestre");
                                                    } else {
                                                        echo ("Doméstico");
                                                    }
                                                ?>
                                            </option>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descriptionEdit"><?php echo ($animal["description"]) ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Comida:</label>
                                        <input type="text" class="form-control" value="<?php echo ($animal["food"]) ?>" name="foodEdit">
                                    </div>
                                    <button type="submit" class="btn btn-dark">Actualizar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

    <?php endforeach ?>

</div>







<?php include_once('footer.php'); ?>