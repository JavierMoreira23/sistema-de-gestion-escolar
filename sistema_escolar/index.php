<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>INGRESO AL SISTEMA</title>
    </head>
    <body>
        <header class="main-header">
            <div class="main-cont">
                <div class="desc-header">
                    <img src="images/school.svg" alt="image school">
                    <p>School</p>
                </div>
            </div>
            <div>
                <h1>Bienvenid@</h1>
                <form action="" method="POST" onsubmit="return validar()">
                    <label for="usuario">USUARIO</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre del Usuario"->
                    <label for="password">CONTRASEÑA</label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <button type="submit">INICIAR SESION</button>

            </form>
        </div>
    </header>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>