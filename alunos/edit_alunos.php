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

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];
    $classe = $_POST['classe'];
    $responsavel = $_POST['responsavel'];

    
    $sql = "UPDATE aluno set nome = '$nome', idade = '$idade', telefone = '$telefone',
        classe_id = '$classe', responsavel_id = '$responsavel' where id = '$id'";
    $query = mysqli_query($conexao, $sql);

    if(!$query){
        retorna(true, MSGERRO);
    }else{
        retorna(false,MSGSUCCESS);
    }

}