<?php
include 'header.php';
include 'banco.php';
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Clientes Cadastrados</h1>
   
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DATA DE NASCIMENTO</th>
            <th>TELEFONE</th>
            <th>EMAIL</th>
            <th>ENDEREÇO</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $resultado = listaClientes();
        if($resultado) {
            for($i = 0; $i < count($resultado); $i++) {
            echo "<tr>";
                echo "<td>".$resultado[$i]['id']."</td>";
                echo "<td>".$resultado[$i]['nome']."</td>";
                echo "<td>".$resultado[$i]['data']."</td>";
                echo "<td>".$resultado[$i]['contato']."</td>";
                echo "<td>".$resultado[$i]['email']."</td>";
                echo "<td>".$resultado[$i]['endereco']."</td>";
            echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<?php
include 'footer.php';
?>
