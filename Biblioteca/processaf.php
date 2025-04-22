<?php
    include 'banco.php';
    session_start();

    $idFuncionario = $_POST['idFuncionario'];
 
    $funcionario = pesquisarFuncionario($idFuncionario);
    if($funcionario){
       $_SESSION['startFuncionario'] = true;
       $_SESSION['nome'] = $funcionario[0]['nome'];
       $_SESSION['id'] = $funcionario[0]['id'];
        header('location:index.php'); 
          

    }else{
        header('location:loginfuncionario.php'); 
           
    }
    
    
?>


