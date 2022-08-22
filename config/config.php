<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'innova');
    define('DB_NAME', 'sai_prueba');

    $conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conn){
        @die("<h2 style='aling:center'>No se puede conectar a la base de datos </h2>".mysqli_error($conn));
    }
    if(@mysqli_connect_errno()){
        
    }
?>