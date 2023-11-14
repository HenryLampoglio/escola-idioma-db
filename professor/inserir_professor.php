<?php 

function insertDb($nome, $materia, $email, $telefone, $endereco){
    require '../conexao.php';

    $sql = "INSERT INTO professor(nome,materia,email, telefone, endereco ) values ('$nome', '$materia','$email','$telefone', '$endereco')";
    $query = mysqli_query($conexao, $sql);
    if($query){
        retorna(false,'Professor cadastrado!');
    }else{
        retorna(true,'Erro ao cadastrar professor.');
    }
}

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if(isset($_POST['nome']) && isset($_POST['materia']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco'])){
        
        $nome = $_POST['nome'];
        $materia = $_POST['materia'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
         
        insertDb($nome, $materia, $email, $telefone,  $endereco);

    }else{
        retorna(true, 'Ocorreu algum erro...');
        die();
    }
}