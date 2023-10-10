<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$semestre = $_POST['semestre'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    </meta>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </meta>

    <title>RECOLECCION DE DATOS</title>

    <!-- mandar a traer las letras de googlefonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    </link>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    </link>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
    </link>

    <!-- mandar a traer las hojas de css -->

    <link rel="stylesheet" href="estilo.css">
    </link>

    <!-- mandar a traer los iconos -->

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    </link>
</head>

<body>
    <header class="titulo">
        <h1>
            Programacion WEB 2

            <span class="titulo__secundario">ICO</span>
        </h1>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace " href="index.php">Ingreso de datos</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="resultado.php">Revision de datos</a>

    </nav>

    <main>
        <h1 class="descuentos__texto">Bienvenido: <?php echo $nombre ?></h1>


        <h2>Favor de revisar que tus datos esten correctos</h2>
        <h3 class="descuentos__titulo">Tu nombre es:</h3>
        <p class="descuentos__texto"> <?php echo $nombre ?> </p>

        <h3 class="descuentos__titulo">Tu Telefono es:</h3>
        <p class="descuentos__texto"> <?php echo $telefono ?> </p>


        <h3 class="descuentos__titulo">Tu correo es:</h3>
        <p class="descuentos__texto"> <?php echo $correo ?> </p>


        <h3 class="descuentos__titulo">Estas inscrito en el semestre</h3>
        <p class="descuentos__texto"> <?php echo $semestre ?> </p>


        <footer class="redes">

        </footer>
</body>

</html>