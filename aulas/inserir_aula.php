<?php 

file_put_contents('log.txt', file_get_contents('php://input'));

function insertDb($time, $sala, $professor, $classe){
    require '../conexao.php';

    $sql = "INSERT INTO aula(horario,sala_id,professor_id, classe_id ) values ('$time', '$sala_id','$professor_id','$classe_id')";
    $query = mysqli_query($conexao, $sql);
    if($query){
        retorna(false,'Aula inserida!');
    }else{
        retorna(true,'Erro ao inserir aula.');
    }

}

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['classe_id']) && isset($_POST['sala_id']) && isset($_POST['professor_id']) && isset($_POST['horario'])){
        
        $classe_id  = $_POST['classe_id'];
        $professor_id = $_POST['professor_id'];
        $sala_id = $_POST['sala_id'];
        $time = $_POST['horario'];
        
        // echo json_encode(array(
        //     'classe_id' => $classe_id, 
        //     'professor_id' => $professor_id, 
        //     'sala_id' => $sala_id, 
        //     'horario' => $time
        // ));
        
        insertDb($time, $sala_id, $professor_id, $classe_id);
       
    }
}
