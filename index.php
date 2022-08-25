<?php
    include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "include/head.php";
    ?>
    
    <title>Iniciar sesión - Sistema de Asesorías Innova</title>
</head>

<body class="login-page">
    <div class="login-box">

        <!-- <div class="login-logo">
            <a href=""><img src="img/logo.png"></a>
        </div> -->
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar sesión</p>
            <form action="action/login.php" method="POST">
                <div class="form-group has-feedback">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <input type="text" name="email" class="form-control" placeholder="Correo electrónico" required>
                    <small id="emailHelp" class="form-text tex-muted">No compartiremos tu email con nadie.</small>
                </div>
                <div class="form-group has-feedback">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox">Recordar contraseña</input>
                            </label>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" name="login" value="login" class="btn btn-primary btn-flat">Iniciar Sesion</button>
                        </div>
                    </div>
                </div>
                <div>
                    <p>¿No tienes cuenta? <a href="register.php">Regístrate</a></p>
                </div>
            </form>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>