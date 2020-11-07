<?php include_once('header.php'); ?>

<div class="container">
        <?php 
        
        print_r($usuarios);
        
        ?>

<div class="row row-cols-1 row-cols-md-3">
    <?php foreach($usuarios as $usuario): ?>

 <div class="col mb-4">
    <div class="card h-100">
      <img src="http://placeimg.com/640/480/animals" class="card-img-top" alt="Imagen">
      <div class="card-body">
        <h5 class="card-title"><?php echo $usuario["nombre"]?></h5>
        <p class="card-text"><?php echo $usuario["descripcion"]?></p>
      </div>
    </div>
  </div>
    
    <?php endforeach ?>

</div>

    
    </div>