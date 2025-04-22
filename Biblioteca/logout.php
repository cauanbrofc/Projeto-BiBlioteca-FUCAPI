<?php
    session_start();
    if(isset($_SESSION['startCliente']) || isset($_SESSION['startFuncionario'])){
        session_unset();
        session_destroy();

    }
    header('location:index.php')

    

?>