
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo Prueba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">SUMA DE NUMEROS</h1>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">

                <form action="index.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="number" name="num1" class="form-control" placeholder="Primer número">
                            </div>
                            <div class="col">
                            <input type="number" name="num2" class="form-control" placeholder="Segundo número">
                        </div>
                    </div>
                    <button type="submit" name="calcular" class="btn btn-primary mt-3">Calcular</button>
                </form>
            </div>
            </div>
        </div>


<?php


if(isset($_POST["calcular"])){

    if (isset($_POST["num1"]) && isset($_POST["num2"]) && is_numeric($_POST["num1"]) && is_numeric($_POST["num2"])); {

        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        echo $numero1+$numero2;
        
    }

}

?>

        
    </main>

    <footer>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>








