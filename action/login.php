<?php
    session_start();

    include_once "../config/config.php";

    $email = mysqli_real_escape_string($conn, (strip_tags($_POST["email"],ENT_QUOTES)));
    $password = mysqli_real_escape_string($conn, (strip_tags($_POST["password"],ENT_QUOTES)));

    $sql = "SELECT * FROM usuario WHERE email = '" . $email . "' AND password = '" . $password . "';";
    $query = mysqli_query($conn, $sql);
    
    if($row = mysqli_fetch_array($query)){
        if(isset($_SESSION['email'])){
            session_unset();
        }
            $_SESSION["email"] = $email;
            $_SESSION['user_id'] = $row['id'];
            
            print "Cargando... $email";
            print "<script>window.location='../home.php';</script>";
    }else{
        echo "<script>alert(\"El usuario no se encuentra en la base de datos\"); window.location=\"../index.php\"</script>";
    }

?>