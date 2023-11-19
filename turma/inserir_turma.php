<?php 

require '../conexao.php';

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if(isset($_POST['idioma'])){
        
        $idioma = $_POST['idioma'];
         
        $sql = "INSERT INTO classe(idioma) values('$idioma')";
        if(mysqli_query($conexao, $sql)){
            retorna(false, 'Turma adicionada com sucesso!');
        }else{
            retorna(true, 'Ocorreu algum erro...');    
        }

    }else{
        retorna(true, 'Ocorreu algum erro...');
        die();
    }
}