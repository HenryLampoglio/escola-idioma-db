<?php 
require '../conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // DELETAR
    if(isset($_GET['id']) && isset($_GET['method'])){
        if($_GET['method'] == 'del'){
            $id = $_GET['id'];
            $sql = "DELETE from professor where id = '$id'";
            $query = mysqli_query($conexao, $sql);
            if($query){
                header("Location: professores?delete=y&id=$id");
            }else{
                header("Location: professores?delete=n");
            }
        }
    }
}