<?php 

require '../conexao.php';

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if(isset($_POST['capacidade']) && isset($_POST['id'])){
        
        $capacidade = $_POST['capacidade']; 
        $num = $_POST['id'];
         
        $sql = "INSERT INTO sala(id, capacidade) values('$num', '$capacidade')";
        if(mysqli_query($conexao, $sql)){
            retorna(false, 'Sala adicionada com sucesso!');
        }else{
            retorna(true, 'Ocorreu algum erro...');    
        }

    }else{
        retorna(true, 'Ocorreu algum erro ...');
        die();
    }
}