<?php
    include 'header.php';
?>

<head>
  <meta charset="UTF-8">
  <title> CADASTRO </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<form action="analise.php" method="post">
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%; border-radius: 15px;">
      <div class="text-center mb-4">
        <h3 class="fw-bold text-primary">CADASTRO DE CLIENTE</h3>
        <small class="text-muted">Preencha os Dados</small>
      </div>
      <form>
        <div class="mb-3">
          <label for="usuario" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome de Usuário">
          <label for="usuario" class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control" id="data" name="dataNascimento" placeholder="aaaa/mm/dd">
          <label for="usuario" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="Telefone" name="telefone" placeholder="(92)99519-9615">
          <label for="usuario" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com">
          <label for="usuario" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua AA, 3000">
        </div>
        
        <div class="d-grid">
          <button type="submit" class="btn btn-warning fw-semibold" >Cadastrar</button>
        </div>
        <div class="mt-3 text-center">
          
        </div>
      </form>
    </div>
  </div>


<?php
    include 'footer.php';

?>