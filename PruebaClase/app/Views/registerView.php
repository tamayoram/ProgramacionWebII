<?php include_once('header.php'); ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo(base_url("public/img/logo1.png")) ?>" class="d-block w-100 imagenes" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo(base_url("public/img/logo2.jpg")) ?>" class="d-block w-100 imagenes" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo(base_url("public/img/logo3.jpg")) ?>" class="d-block w-100 imagenes" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<form class="mt-4" action="<?php echo(base_url("public/animales/registro")) ?>" method="POST" onsubmit="">

    <div class="form-group">
        <label for="animalName">Nombre del animal</label>
        <input type="text" name="animalName" class="form-control" id="animalName" placeholder="Ingrese nombre" autofocus>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="animalAge">Edad</label>
            <input type="number" name="animalAge" class="form-control" placeholder="Ingrese edad" id="animalAge">
        </div>
        <div class="form-group col-md-6">
            <label for="animalType">Tipo de animal</label>
            <select name="animalType" class="form-control" id="animalType">
                <option>Doméstico</option>
                <option>Fauna Silvestre</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="animalDescription">Descripción</label>
            <textarea class="form-control" rows="4" name="animalDescription" id="animalDescription" placeholder="Principales apuntes del animal"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="animalFood">Comida</label>
            <input type="text" name="animalFood" class="form-control" id="animalFood" placeholder="Ingrese comida">

        </div>

        
    </div>

    <div class="row mt-3">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="URL IMAGEN" name="foto">  
                        </div>   
        </div>


    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark my-2">Registrar animal</button>

        </div>
    </div>

</form>


<?php include_once('footer.php'); ?>