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
        <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Ingreso de datos</a>
    </nav>

    <main>
        <h2>DATOS</h2>

        <form class="formulario" action="resultado.php" method="post">
            <fieldset>
                <legend>Ayudanos ingresando tus datos</legend>

                <div class="formulario__campos">
                    <div class="formulario__campo">
                        <label for="">Nombre</label>

                        <input class="formulario__input-text" type="text" placeholder="Tu nombre" name="nombre"></input>
                    </div>

                    <div class="formulario__campo">
                        <label for="">Telefono</label>

                        <input class="formulario__input-text" type="tel" placeholder="Tu Telefono o celular"
                            name="telefono"></input>
                    </div>

                    <div class="formulario__campo">
                        <label for="">E-mail</label>

                        <input class="formulario__input-text" type="email" placeholder="Tu e-mail"
                            name="correo"></input>
                    </div>

                    <div class="formulario__campo">
                        <label for="">Semestre inscrito</label>

                        <select name="semestre" class="formulario__input-text" id="">
                            <option value="1">1</option>

                            <option value="2">2</option>

                            <option value="3">3</option>

                            <option value="4">4</option>

                            <option value="5">5</option>

                            <option value="6">6</option>

                            <option value="7">7</option>

                            <option value="8">8</option>

                            <option value="9">9</option>
                        </select>
                    </div>
                </div>

                <div class="alinear-derecha flex">
                    <input class="boton--formulario" type="submit" value="Enviar"></input>
                </div>
            </fieldset>
        </form>

        <br>
        <br>
        <br>
        <br>
        <br>
    </main>

    <footer class="redes">
        <ul>
            <li class="facebook">
                <a href="https://www.facebook.com/luisaxel.flores.3?mibextid=ZbWKwL">
                    <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                </a>
            </li>

            <li class="instagram">
                <a href="https://instagram.com/lu_axel_17?igshid=ZDdkNTZiNTM=">
                    <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                </a>
            </li>

            <li class="whatsapp">
                <a href="https://wa.link/5i4gcd">
                    <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
                </a>
            </li>

            <li class="linkedin">
                <a href="https://www.linkedin.com/in/flores-morales-luis-axel-90a814216/">
                    <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>