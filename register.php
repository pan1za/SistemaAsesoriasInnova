<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href='css/styles.css'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Registrarse - Sistema de Asesorías Innova</title>
</head>

<body class="login-page">
    <div class="login-box">
        <div id="result"></div>
        <!-- <div class="login-logo">
            <a href=""><img src="img/logo.png"></a>
        </div> -->
        <div class="login-box-body">
            <p class="login-box-msg">Regístrate</p>
            <form id="add" name="add" method="POST"> 
                <div class="form-group has-feedback">
                    <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombres" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="col-xs-4">
                            <button type="submit" id="save_data" class="btn btn-primary btn-flat">Crear cuenta</button>
                        </div>
                    </div>
                </div>
                <div>
                    <p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a></p>
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

<script>
   

    $( "#add" ).submit(function( event ) {
    $('#save_data').attr("disabled", true);
  
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "action/register.php",
        data: parametros,
        beforeSend: function(objeto){
            $("#result").html("Mensaje: Cargando...");
        },
            success: function(datos){
            $("#result").html(datos);
            $('#save_data').attr("disabled", false);
        }
    });
  event.preventDefault();
})

</script>


</body>
</html>