<?php 
require '../conexao.php';?>
<?php include_once '../validacao.php';?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rocket & Grow</title>
<link rel="stylesheet" type="text/css" href="../css/tabela.css">
<link rel="stylesheet" type="text/css" href="../css/formulario.css">
</head>
    <body>
    <h1><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>    Consulta das notas</h1>
    <form id="cadastrar_professor" method="POST">

        <label for="classe">Escolha uma classe para visualizar as notas:</label>
        <select name="classe" id="classe" required>
            <option selected> Classe </option>
        <?php 
        $sql = "SELECT id from classe";
        $query = mysqli_query($conexao, $sql);
        while($array = mysqli_fetch_array($query)){
            $id_classe = $array['id'];
            echo "<option value='$id_classe'>$id_classe</option>";
        }
        ?>
        </select>

        <div id="data"></div>
     

    </form>
        <?php
        
        $SQL = "select * from classe";
        $query = mysqli_query($conexao, $SQL);
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
    $(document).ready(function() {
        $("#classe").on("change", function() {
            getData(); 
        });
    });

    function getData() {
        var selected = $("#classe").val();
        
        $.ajax({
            type: "POST",
            url: "busca_notas.php",
            data: { classe_id: selected },
            success: function(response) {
                $("#data").html(response);
            }
        });
    }
</script>