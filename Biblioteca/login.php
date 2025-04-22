<?php
    include 'header.php'
?>

<head>
  <meta charset="UTF-8">
  <title> Login </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<form action="processa.php" method="post">
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%; border-radius: 15px;">
      <div class="text-center mb-4">
        <h3 class="fw-bold text-primary">LOGIN USUÁRIO</h3>
        <small class="text-muted">Acesse sua conta</small>
      </div>
      <form>
        <div class="mb-3">
          <label for="usuario" class="form-label">ID do Usuário</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="Digite seu ID de usuário">
        </div>
        
        <div class="d-grid">
          <button type="submit" class="btn btn-warning fw-semibold" >Entrar</button>
        </div>
        <div class="mt-3 text-center">
          
        </div>
      </form>
    </div>
  </div>

<?php
  include 'footer.php';

  ?>