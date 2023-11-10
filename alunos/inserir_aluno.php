<?php 


function insertDb($nome, $idade, $classe, $telefone,  $responsavel){
    require '../conexao.php';

    $sql = "INSERT INTO aluno(nome,idade,telefone, classe_id, responsavel_id)
        values ('$nome', '$idade','$telefone','$classe', '$responsavel')";
    $query = mysqli_query($conexao, $sql);
    
    return $query ? retorna(false,'Aluno cadastrado!') : retorna(true,'Erro ao cadastrar aluno...'); 
}

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

function validaDados($responsavel){
    require '../conexao.php';
    $sql = "SELECT * from responsavel where id = '$responsavel'";
    $query = mysqli_query($conexao, $sql);
    

    return mysqli_num_rows($query) >= 1 ? true : false;
}



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['classe']) && isset($_POST['responsavel']) && isset($_POST['telefone'])){
        
        $nome  = $_POST['nome'];
        $idade = $_POST['idade'];
        $classe = $_POST['classe'];
        $responsavel = $_POST['responsavel'];
        $telefone = $_POST['telefone'];

        file_put_contents('log.txt', json_encode(array('nome' => $nome, 'idade' => $idade, 'classe' => $classe, 'responsavel' => $responsavel, 'telefone'=> $telefone)));    
        
        if(validaDados($responsavel)){
            insertDb($nome, $idade, $classe, $telefone, $responsavel);
        }else{
            retorna(true, 'Ocorreu algum erro...');
            die();
            
        }

    }else{
        retorna(true, 'Ocorreu algum erro...
        ');
        die();
    }
}
