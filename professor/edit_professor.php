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
    // editar
    if(isset($_POST['nome']) && isset($_POST['materia']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['endereco']) && isset($_POST['id'])){
        
        $nome = $_POST['nome'];
        $materia = $_POST['materia'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $id = $_POST['id'];
        
        $sql = "UPDATE professor set nome = '$nome', materia = '$materia', telefone = '$telefone',
            email = '$email', endereco = '$endereco' where id = '$id'";
        $query = mysqli_query($conexao, $sql);

        if(!$query){
            retorna(true, MSGERRO);
        }else{
            retorna(false,MSGSUCCESS);
        }
    }
}