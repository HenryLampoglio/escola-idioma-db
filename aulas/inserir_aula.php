<?php 


function insertDb($time, $sala, $professor, $classe){
    require '../conexao.php';

    $sql = "INSERT INTO aula(horario,sala_id,professor_id, classe_id ) values ('$time', '$sala','$professor','$classe')";
    $query = mysqli_query($conexao, $sql);
    if($query){
        retorna(false,'Aula inserida!');
    }else{
        retorna(true,'Erro ao inserir aula.');
        die();
    }
}

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

function validaDados($sala_id, $professor_id, $classe_id){
    require '../conexao.php';
    $sql = "SELECT * from sala where id = '$sala_id'";
    $query = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($query) >= 1){
        $sala = true;
    }else{
        $sala =  false;
    }

    $sql = "SELECT * from professor where id = '$professor_id'";
    $query = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($query) >= 1){
        $professor = true;
    }else{
        $professor =  false;
    }

    $sql = "SELECT * from classe where id = '$classe_id'";
    $query = mysqli_query($conexao, $sql);
    
    if(mysqli_num_rows($query) >= 1){
        $classe = true;
    }else{
        $classe =  false;
    }

    if($sala && $professor && $classe){
        return true;
    }else{
        return false;
    }

}



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['classe_id']) && isset($_POST['sala_id']) && isset($_POST['professor_id']) && isset($_POST['horario'])){
        
        $classe_id  = $_POST['classe_id'];
        $professor_id = $_POST['professor_id'];
        $sala_id = $_POST['sala_id'];
        $time = $_POST['horario'];
        
        file_put_contents('log.txt', json_encode(array('classe_id' => $classe_id, 'professor_id' => $professor_id, 'sala_id' => $sala_id, 'horario' => $time)));    
        
        if(validaDados($sala_id, $professor_id, $classe_id)){
            insertDb($time, $sala_id, $professor_id, $classe_id);
        }else{
            retorna(true, 'Ocorreu algum erro...1');
            die();
        }

    }else{
        retorna(true, 'Ocorreu algum erro...2');
        die();
    }
}
