<?php
session_start();

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Livraria</title>

    
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script>

    

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="text-center">
          <?php
        if (isset($_SESSION['startCliente']) || isset($_SESSION['startFuncionario'])){
          echo '<h3>Bem vindo(a), 🐎 <a href="index.php" style="text-decoration: none; color: inherit;">' . $_SESSION['nome'] . '</a>!</h3>';
        }else{
          echo '<h3><a href="index.php" style="text-decoration: none; color: inherit;">🐎 Livraria Corsel</a></h3>';
        }       
        
        
        ?>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            
          <?php
             if (isset($_SESSION['startCliente'])) {                
                echo '<a class="btn btn-success" href="livros.php" style="margin-left: 10px;">Livros</a>';
                echo '<a class="btn btn-danger" href="logout.php" style="margin-left: 10px;">Logout</a>';
           } elseif (isset($_SESSION['startFuncionario'])) {           
                echo '<a class="btn btn-primary" href="login.php" style="margin-left: 10px;">Adicionar Livros</a> ';
                echo '<a class="btn btn-success" href="clientes.php" style="margin-left: 10px;">Verificar Clientes</a>';
                echo '<a class="btn btn-danger" href="logout.php" style="margin-left: 10px;">Logout</a>';
              } else {
                    echo '<a class="btn btn-info" href="loginfuncionario.php" >Login Corporativo</a>';
                    echo '<a class="btn btn-primary" href="login.php" style="margin-left: 10px;">Login</a> ';
                    echo '<a class="btn btn-success" href="cadastro.php" style="margin-left: 10px;">Cadastrar</a>';
                    }
          ?>
          </div>
        </div>
      </header>