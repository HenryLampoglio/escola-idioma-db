<?php 

define("MSGERRO", "Ocorreu algum erro ao editar...");
define("MSGESUCCESS", "Aula editada com sucesso!");

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
        }
    }

}else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // editar
    if(isset($_POST['classe_id']) && isset($_POST['sala_id']) && isset($_POST['professor_id']) && isset($_POST['horario'])){
        
        $classe_id  = $_POST['classe_id'];
        $professor_id = $_POST['professor_id'];
        $sala_id = $_POST['sala_id'];
        $time = $_POST['horario'];
        
        file_put_contents('log.txt', json_encode(array('classe_id' => $classe_id, 'professor_id' => $professor_id, 'sala_id' => $sala_id, 'horario' => $time)));    

    }
}