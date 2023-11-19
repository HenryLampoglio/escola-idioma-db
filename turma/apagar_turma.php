<?php 
require '../conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // DELETAR
    if(isset($_GET['id']) && isset($_GET['method'])){
        if($_GET['method'] == 'del'){
            $id = $_GET['id'];
            $sql = "SELECT * from aluno where classe_id = $id";
            $query = mysqli_query($conexao, $sql);
            if(mysqli_num_rows($query) >= 1){
                header("Location: turma?delete=n");
            }else{
                $sql = "DELETE FROM classe where id = $id";
                if(mysqli_query($conexao, $sql)){
                    header("Location: turma?delete=y&id=$id");
                }else{
                    header("Location: turma?delete=n");
                }
            }
        }
    }
}