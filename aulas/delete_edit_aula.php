<?php 
require '../conexao.php';

define("MSGERRO", "Ocorreu algum erro ao editar...");
define("MSGSUCCESS", "Aula editada com sucesso!");

function retorna($erro, $msg){
    echo json_encode(array(
        'erro'=> $erro, 
        'msg' => $msg
    ));
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    // DELETAR
    if(isset($_GET['id']) && isset($_GET['method'])){
        if($_GET['method'] == 'del'){
            $id = $_GET['id'];
            $sql = "DELETE from aula where id = '$id'";
            $query = mysqli_query($conexao, $sql);
            if($query){
                header("Location: resultado_consulta_aula?delete=y");
            }else{
                header("Location: resultado_consulta_aula?delete=n");
            }
        }
    }

}else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // editar
    if(isset($_POST['classe_id']) && isset($_POST['sala_id']) && isset($_POST['professor_id']) && isset($_POST['horario']) && isset($_POST['id'])){
        
        $classe_id  = $_POST['classe_id'];
        $professor_id = $_POST['professor_id'];
        $sala_id = $_POST['sala_id'];
        $time = $_POST['horario'];
        $id = $_POST['id'];
        
        file_put_contents('logEdit.txt', json_encode(array(
            'classe_id' => $classe_id,
            'professor_id' => $professor_id,
            'sala_id' => $sala_id, 
            'horario' => $time, 
            'id' => $id
        )));
        
        $sql = "UPDATE aula set classe_id = '$classe_id', professor_id = '$professor_id', sala_id = '$sala_id',
            horario = '$time' where id = '$id'";
        $query = mysqli_query($conexao, $sql);

        if(!$query){
            retorna(true, MSGERRO);
        }else{
            retorna(false,MSGSUCCESS);
        }

    }
}