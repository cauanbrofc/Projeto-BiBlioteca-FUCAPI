<?php
$user = "root";
$senha = "";

function conecta() {
    try {
        global $user;
        global $senha;
        $conexao = new PDO("mysql:host=localhost;dbname=livrariasucesso", $user, $senha);
        $conexao->exec("set names utf8mb4"); 
        return $conexao;
    } catch(PDOException $e) {
        return $conexao; 
    }
}

function listaLivros() {
    try {
        $conexao = conecta();
        $query = "SELECT livros.id as ID, 
                         editoras.nome as Editora, 
                         livros.nome as Livro, 
                         livros.data as Lancamento, 
                         livros.classe_indicativa as Indicativa, 
                         livros.tipo_capa as Capa                         
                  FROM livros, editoras
                  WHERE livros.id_editora = editoras.id
                  ORDER BY ID asc";              

        $result = $conexao->prepare($query); 
        $result->execute();
        $resultado = $result->fetchAll();

        return $resultado;
    } catch(PDOException $e) {
        return null;
    }
}



function cadastraCliente($nome,$dataNascimento,$telefone,$email,$endereco){
    try {
        $conexao = conecta();
        $inserir = $conexao ->prepare("INSERT INTO clientes(nome, data_nascimento,telefone,email,endereco)
                  VALUES (:nome,:data_nascimento,:telefone,:email,:endereco)");
                  $inserir -> bindValue(':nome',$nome);
                  $inserir -> bindValue(':data_nascimento',$dataNascimento);
                  $inserir -> bindValue(':telefone',$telefone);
                  $inserir -> bindValue(':email',$email);
                  $inserir -> bindValue(':endereco',$endereco);                                 
                  
        $inserir -> execute();
        return $conexao->lastInsertId(); 
    } catch(PDOException $e) {
        return false;
    }
}

function listaClientes() {
    try {
        $conexao = conecta();
        $query = "SELECT clientes.id as id, 
                         clientes.nome as nome, 
                         clientes.data_nascimento as data, 
                         clientes.telefone as contato, 
                         clientes.email as email, 
                         clientes.endereco as endereco                         
                  FROM clientes
                  ORDER BY ID desc";              

        $result = $conexao->prepare($query); 
        $result->execute();
        $resultado = $result->fetchAll();

        return $resultado;
    } catch(PDOException $e) {
        return null;
    }
}


function pesquisarCliente($id){
    try {
        $conexao = conecta();
        $query = "SELECT *
                  FROM clientes
                  WHERE id = :id";                 
                  
        $result = $conexao->prepare($query); 
        $result -> bindValue(':id',$id);
        $result->execute();
        $resultado = $result->fetchAll();

        return $resultado;
    } catch(PDOException $e) {
        return null;
    }
}

function deletarCliente($id){
    try {
        $conexao = conecta();
        $query = "DELETE id
                  FROM clientes
                  WHERE id = :id";                 
                  
        $result = $conexao->prepare($query); 
        $result -> bindValue(':id',$id);
        $result->execute();
        $resultado = $result->fetchAll();

        return $resultado;
    } catch(PDOException $e) {
        return null;
    }
}

function pesquisarFuncionario($idFuncionario){
    try {
        $conexao = conecta();
        $query = "SELECT *
                  FROM Autores
                  WHERE id = :id";                 
                  
        $result = $conexao->prepare($query); 
        $result -> bindValue(':id',$idFuncionario);
        $result->execute();
        $resultado = $result->fetchAll();

        return $resultado;
    } catch(PDOException $e) {
        return null;
    }
}
?>