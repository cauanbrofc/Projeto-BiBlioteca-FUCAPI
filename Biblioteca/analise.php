<?php
include 'banco.php';

$nome = $_POST['nome'];
$dataNascimento = $_POST['dataNascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$id = cadastraCliente($nome, $dataNascimento, $telefone, $email, $endereco);

if ($id) {
    echo "<script>
            alert('Cadastro efetuado com sucesso! ID do cliente: $id');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('Deu erro ao cadastrar!');
            window.history.back();
          </script>";
}
?>
