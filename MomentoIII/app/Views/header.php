<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar Nuevo Porvenir</title>
   
    <!--Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Estilos-->
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active m-1">
                    <a class="nav-link" href="<?php echo(base_url("public/")) ?>"> <i class="fa fa-home" style="font-size:25px"></i> Inicio</a>
                </li>

                <li class="nav-item active m-1">
                    <a class="nav-link" href="<?php echo(base_url("public/Listadoanimales")) ?>"> <i class="fa fa-refresh m-1" style="font-size:20px"></i> Ver lista de animales</a>
                </li>
                <li class="nav-item active m-1">
                    <a class="nav-link" href="<?php echo(base_url("public/Registroanimales")) ?>"><i class="fa fa-calendar-check-o m-1" style="font-size:20px"></i> Registrar un nuevo animal</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="media border border-secondary rounded-sm p-2 my-2">
            <div class="media-body">
                <h4>Hogar Nuevo Porvenir</h4>
                <p>Sede administrativa -> Transversal 5 # 75D-124 Barrio Belén / Teléfono: 559 22 99 / Celular: (300) 5962788</p>
            </div>
            <i class="fa fa-paw" style='font-size:54px'></i>
        </div>