<?php include_once('header.php'); ?>



<form class="mt-4" action="<?php echo(base_url("public/Registroanimales/guardar/")) ?>" method="POST">

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
            <option value="0">Doméstico</option>
            <option value="1">Fauna Silvestre</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="animalDescription">Descripción</label>
            <textarea class="form-control" rows="4" id="animalDescription" name="animalDescription" placeholder="Principales apuntes del animal"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="animalFood">Comida</label>
            <input type="text" name="animalFood" class="form-control" id="animalFood" placeholder="Ingrese comida">
            <label for="animalFood">Imagen</label>
            <input type="text" name="animalImage" class="form-control" id="animalImage" placeholder="Ingrese la URL de la imagen">

        </div>
    </div>


    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark my-2">Registrar animal</button>

        </div>
    </div>

</form>


<?php include_once('footer.php'); ?>