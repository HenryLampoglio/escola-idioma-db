<?php 
require '../conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // DELETAR
    if(isset($_GET['id']) && isset($_GET['method'])){
        if($_GET['method'] == 'del'){
            $id = $_GET['id'];
            $sql = "SELECT * from aluno where responsavel_id = $id";
            $query = mysqli_query($conexao, $sql);
            if(mysqli_num_rows($query) >= 1){
                header("Location: responsavel?delete=n&error=$erromsg");
            }else{
                $sql = "DELETE FROM responsavel where id = $id";
                if(mysqli_query($conexao, $sql)){
                    header("Location: responsavel?delete=y&id=$id");
                }else{
                    header("Location: responsavel?delete=n&error=$erromsg");
                }
            }
        }
    }
}