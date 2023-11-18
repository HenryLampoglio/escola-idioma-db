<?php 
require '../conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // DELETAR
    if(isset($_GET['id']) && isset($_GET['method'])){
        if($_GET['method'] == 'del'){
            $id = $_GET['id'];
            $sql = "DELETE from aluno where id = '$id'";
            $query = mysqli_query($conexao, $sql);
            if($query){
                header("Location: alunos?delete=y&id=$id");
            }else{
                header("Location: alunos?delete=n");
            }
        }
    }
}