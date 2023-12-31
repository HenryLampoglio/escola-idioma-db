<?php 

require '../conexao.php';

define("MSGERRO", "Ocorreu algum erro ao editar...");
define("MSGSUCCESS", "Registro editado com sucesso!");

function retorna($erro, $msg){
    echo json_encode(array(
        'erro'=> $erro, 
        'msg' => $msg
    ));
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $id = $_POST['id'];
    
    $sql = "UPDATE responsavel set nome = '$nome', cpf = '$cpf', telefone = '$telefone',
        email = '$email', endereco = '$endereco' where id = '$id'";
    $query = mysqli_query($conexao, $sql);

    if(!$query){
        retorna(true, MSGERRO);
    }else{
        retorna(false,MSGSUCCESS);
    }

}