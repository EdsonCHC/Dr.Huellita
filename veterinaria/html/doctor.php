<?php 
    session_start();
 if(isset($_SESSION["doctor_info"])){
    header("Location: ../html/doctorCitas.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Doctor.css">
    <link rel="stylesheet" href="../css/Login.css">
    <title>Entrar Sistema</title>
    <link rel="shortcut icon" href="../img/logo.png">
</head>

<body>

    <!-- import header -->
    <header>
    <div class="logo">
            <img src="../img/logo.png" class="logo">
        </div>
    </header>    
    <div id="container">
        <form action="../php/doctorLogin.php" method="post" id="formulario">
            <h1>Bienvenido Veterinario<span id="point"></span></h1>
            <fieldset>
                <label for="txt">
                    Usuario
                    <input type="text" id="txt" name="User" required>
                </label>
                <label for="pass">
                    Contraseña
                    <input type="password" required id="pass" name="pass">
                    <i class="sePass" onclick="mostrarContraseña();"><img src="../icons/ver.png" id="changeImage"></i>
                </label>
                <p class="warnings" id="warnings2"></p>
                <label for="button" id="labelS">
                    Enviar
                </label>
                <input type="submit" id="button">
            </fieldset>
        </form>
    </div>
    <script src="../js/valDoctor.js"></script>
    <script src="../js/seepass.js"></script>
</body>

</html>