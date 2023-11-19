<?php 
require '../conexao.php';


function retorna($erro, $msg){
    echo json_encode(array(
        'erro' => $erro,
        'msg' => $msg
    ));
}

if(isset($_POST['aluno']) && $_POST['aluno'] != '0' && isset($_POST['nota'])){
    $aluno = $_POST['aluno'];
    $nota = $_POST['nota'];

    $sql = "INSERT into notas(aluno_id, nota) values('$aluno', '$nota')";
    $query = mysqli_query($conexao, $sql);

    if($query){
        retorna(false, 'Nota adicionada com sucesso');
    }else{
        retorna(true, 'Erro ao inserir a nota do aluno');
    }


}else{
    retorna(true, 'Voce deve selecionar um aluno');
}
