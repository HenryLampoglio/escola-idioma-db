<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rocket & Grow</title>
<link rel="stylesheet" type="text/css" href="../css/tabela.css">
<link rel="stylesheet" type="text/css" href="../css/toast.css">
</head>
    <body>
    <h1><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>    Alunos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Classe</th>
            <th>Responsavel</th>
        </tr>
        <?php
        require '../conexao.php';
        $sql = "SELECT al.id, al.nome, al.idade, al.telefone,  
        (SELECT id from classe where id = al.classe_id limit 1) as classe, 
        (SELECT nome from responsavel where id = al.responsavel_id limit 1) as responsavel
        from aluno al order by id desc";
        $query = mysqli_query($conexao, $sql);
        while($array = mysqli_fetch_array($query)){
            $id = $array['id']; 
            $nome = $array['nome'];
            $idade = $array['idade'];
            $telefone = $array['telefone']; 
            $responsavel = $array['responsavel'];
            $classe = $array['classe'];

        echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$idade</td>";
            echo "<td>$telefone</td>";
            echo "<td>$classe</td>";
            echo "<td>$responsavel</td>";
            echo '<td><a href="editar_aluno?id='.$id.'">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg></i>
            </a></td>';
            echo '<td><a href="delete_aluno.php?id='.$id.'&method=del"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#000000}</style><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></a></td>';
        echo '</tr>';

        }
        ?>
        
<footer>
    <p>Desenvolvido por:</p>
    <p>Cyberia Club</p>
</footer>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

const Toast = Swal.mixin({
    toast: true,
    position: 'center',
    iconColor: 'white',
    customClass: {
        popup: 'colored-toast',
    },
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
})

function toastDelete(id){
    Toast.fire({
        icon: 'success',
        title: 'Registro ' + id + ' deletado!',
    })
}

function toastDeleteError(){
    Toast.fire({
        icon: 'warning',
        title: 'Erro ao deletar o registro!',
    })
}
</script>

<?php 
if(isset($_GET['delete'])){
    $idget = $_GET['id'];
    if($_GET['delete'] == 'y'){
        echo "<script> toastDelete($idget)</script>";
    }else if($_GET['delete'] == 'n'){
        echo '<script> toastDeleteError(); </script>';
    }
    
}?> 