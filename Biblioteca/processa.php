<?php
    include 'banco.php';
    session_start();

    $id = $_POST['id'];
 
    $clientes = pesquisarCliente($id);
    if($clientes){
       $_SESSION['startCliente'] = true;
       $_SESSION['nome'] = $clientes[0]['nome'];
       $_SESSION['id'] = $clientes[0]['id'];
        header('location:index.php'); 
               

    }else{
        header('location:login.php');
        
    }
  
    
?>