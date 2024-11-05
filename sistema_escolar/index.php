<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.css">

    <title>SISTEMA DE CURSOS</title>
</head>
    <body>
        <header class="main-header">
            <div class="main-cont">
                <div class="desc-header">
                    <img src="images/school.svg" alt="image school">
                    <p>School</p>
                </div>
            </div>
            <div class="cont-header">
                <h1>Bienvenid@</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Administrador</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profesor</button>
                    </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"
                        >
                            <form action="" method="POST" onsubmit="return validar()">
                                <label for="usuario">USUARIO</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre del Usuario"->
                                <label for="password">CONTRASEÑA</label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña">
                                <button id="loginUsuario" type="button">INICIAR SESION</button>

                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"
                        >
                            <form action="" method="POST" onsubmit="return validar()">
                                <label for="usuario">USUARIO</label>
                                <input type="text" name="usuario" id="usuario" placeholder="Nombre del Usuario"->
                                <label for="password">CONTRASEÑA</label>
                                <input type="password" name="pass" id="pass" placeholder="Contraseña">
                                <button id="loginProfesor" type="button">INICIAR SESION</button>

                            </form>
                        </div>
                    </div>
            </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.12/dist/sweetalert2.min.js"></script>
    <script src="js/script.js"></script>
    </body>

</html>