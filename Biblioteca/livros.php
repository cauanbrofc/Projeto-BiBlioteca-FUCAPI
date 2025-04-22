<?php
include 'header.php';
include 'banco.php';
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Nosso Acervo Digital</h1>
   
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Código</th>
            <th>Editora</th>
            <th>Livro</th>
            <th>Lançamento</th>
            <th>Classe Indicativa</th>
            <th>Capa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $resultado = listaLivros();
        if($resultado) {
            for($i = 0; $i < count($resultado); $i++) {
            echo "<tr>";
                echo "<td>".$resultado[$i]['ID']."</td>";
                echo "<td>".$resultado[$i]['Editora']."</td>";
                echo "<td>".$resultado[$i]['Livro']."</td>";
                echo "<td>".$resultado[$i]['Lancamento']."</td>";
                echo "<td>".$resultado[$i]['Indicativa']."</td>";
                echo "<td>".$resultado[$i]['Capa']."</td>";
            echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<?php
include 'footer.php';
?>
