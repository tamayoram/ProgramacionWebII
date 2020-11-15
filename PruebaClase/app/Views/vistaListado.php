<?php include_once('header.php'); ?>

<div class="container">
        <?php 
        
        print_r($usuarios);
        
        ?>

<div class="row row-cols-1 row-cols-md-3">
    <?php foreach($usuarios as $usuario): ?>

 <div class="col mb-4">
   <div class="card h-100">
      <img src="<?php echo $usuario["foto"]?>" class="card-img-top" alt="Imagen">
      <div class="card-body">
        <h5 class="card-title"><?php echo $usuario["nombre"]?></h5>
        <p class="card-text"><?php echo $usuario["descripcion"]?></p>
        <p class="card-text"><?php echo $usuario["tipo"]?></p>

        <a href="<?php echo(base_url("public/animales/eliminar/".$usuario["id"]))?>" class="btn btn-danger">Eliminar</a>
         
         <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar">
     Editar
       </button>
      </div>
  
 

    
  </div>


    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Descripcion:</label>
                            <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

 
    
  </div>
    
    <?php endforeach ?>

</div>

    
    </div>