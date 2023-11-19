<?php 
require '../conexao.php';
$classe_id = $_POST['classe_id'];

echo '
    <table>
        <tr>
            <th>Aluno</th>
            <th>Nota</th>
            <th>Classe</th>
        </tr>';

        $sql = "SELECT n.nota, a.nome from notas n inner join aluno a ON a.id = n.aluno_id where a.classe_id  = '$classe_id' order by a.nome desc";
        $query = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($query)){
            $nome = $array['nome']; 
            $nota = $array['nota'];

        echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$nota</td>";
            echo "<td>$classe_id</td>";
        echo '</tr>';
        }

echo '<footer>
    <p>Desenvolvido por:</p>
    <p>Cyberia Club</p>
</footer>';