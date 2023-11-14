<?php 

function insertDb($nome, $cpf, $email, $telefone, $endereco){
    require '../conexao.php';

    $sql = "INSERT INTO responsavel(nome,cpf ,email, telefone, endereco ) values ('$nome', '$cpf','$email','$telefone', '$endereco')";
    $query = mysqli_query($conexao, $sql);
    if($query){
        retorna(false,'Responsável cadastrado!');
    }else{
        retorna(true,'Erro ao cadastrar responsável.');
    }
}

function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if(isset($_POST['nome']) && isset($_POST['CPF']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco'])){
        
        $nome = $_POST['nome'];
        $cpf = $_POST['CPF'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
         
        insertDb($nome, $cpf, $email, $telefone,  $endereco);

    }else{
        retorna(true, 'Ocorreu algum erro...');
        die();
    }
}