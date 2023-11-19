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
        
    $idioma = $_POST['idioma'];
    $id = $_POST['id'];
    
    $sql = "UPDATE classe set idioma = '$idioma' where id = '$id'";
    $query = mysqli_query($conexao, $sql);

    if(!$query){
        retorna(true, MSGERRO);
    }else{
        retorna(false,MSGSUCCESS);
    }

}