<?php 
require '../conexao.php';
$idGET = $_GET['id'];
$sql = "SELECT * from classe where id = $idGET";
$query = mysqli_query($conexao, $sql);
$array = mysqli_fetch_array($query);
$idioma = $array['idioma'];
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rocket & Grow</title>
<link rel="stylesheet" type="text/css" href="../css/formulario.css">
</head>
<body>
    <h1><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>    Editar o cadastro das turmas</h1>
    <form id="editar_turma" method="POST">
        <input type="text" name="id" id="id" value="<?=$idGET?>" style="display: none;">
        <div class="formulario">
            <label for="idioma">Idioma:</label>
            <input type="text" name="idioma" id="idioma" value="<?=$idioma?>" required>
    </div>

    <input type="submit" value="Editar">

    <footer>
        <p>Desenvolvido por:</p>
        <p>Cyberia Club</p>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

     $("#editar_turma").on("submit", function (event) {
        
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: "edit_turma.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (json) {
                console.log(json);
                var resposta = JSON.parse(json);
                if(resposta.erro == false){
                    Swal.fire({
                        icon: "success",
                        title: "Sucesso",
                        text: resposta.msg
                    });
                    setTimeout(() => {
                        window.location.href = 'turma';      
                    }, 1000);

                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: resposta.msg
                    });
                }
            }
        })
    });
</script>