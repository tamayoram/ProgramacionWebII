<?php include_once('header.php'); ?>

<div id="demo" class="carousel slide mt-4" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
	<li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	<li data-target="#demo" data-slide-to="4"></li>
	<li data-target="#demo" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo(base_url("public/img/Perros2.jpg")) ?>" alt="Aves liberadas">
      <div class="carousel-caption">
        <h4>Recuperación de perros en condición de abandono</h4>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Guacamaya1.jpg")) ?>" alt="Buhos en recuperación">
      <div class="carousel-caption">
        <h3>Centro de recuperación</h3>
        <p>Buhos en recuperación en el centro de nuestro hogar</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Lagarto.jpg")) ?>" alt="Largartos en recuperación" >
      <div class="carousel-caption">
        <h3>Centro de recuperación</h3>
        <p>Lagos en recuperación luego de ser atacados por pescadores de la zona</p>
      </div>   
	</div>
	
	<div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Ave1.jpg")) ?>" alt="Largartos en recuperación" >
      <div class="carousel-caption">
        <h3>Centro de recuperación</h3>
        <p>Lagos en recuperación luego de ser atacados por pescadores de la zona</p>
      </div>   
	</div>
	
	<div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Zarigueya1.jpeg")) ?>" alt="Largartos en recuperación" >
      <div class="carousel-caption">
        <h3>Centro de recuperación</h3>
        <p>Lagos en recuperación luego de ser atacados por pescadores de la zona</p>
      </div>   
	</div>

	<div class="carousel-item">
      <img src="<?php echo(base_url("public/img/Gato1.jpg")) ?>" alt="Largartos en recuperación" >
      <div class="carousel-caption">
        <h3>Centro de recuperación</h3>
        <p>Lagos en recuperación luego de ser atacados por pescadores de la zona</p>
      </div>   
	</div>
	
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="presentation mt-4">
		<p>Somos una organización sin animo de lucro, dedicado al cuidado de fauna doméstica y silvestre que ha sufrido algún tipo de....</p>
</div>

<a href="<?php echo(base_url("public/Registroanimales")) ?>" class="btn btn-dark" role="button">Ver lista de animales</a>
<a href="#" class="btn btn-dark" role="button">Registrar un animal</a>


<?php include_once('footer.php'); ?>