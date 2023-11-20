<?php require '../conexao.php'; ?>
<?php include_once '../validacao.php';?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rocket & Grow</title>
<link rel="stylesheet" type="text/css" href="../css/formulario.css">
</head>
<body>
    <h1><a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg></a>    Cadastro de Aula</h1>
    <form id="cadastrar_aula" method="POST" action="">

        <div class="formulario">
            <label for="dia">Dia da Semana:</label>
            <select name="dia" id="dia" required>
               <option value="1">Segunda-Feira</option>
               <option value="2">Terça-feira</option>
               <option value="3">Quarta-feira</option>
               <option value="4">Quinta-feira</option>
               <option value="5">Sexta-feira</option>
               <option value="6">Sábado</option> 
            </select>
        </div>
        <div class="formulario">
            <label for="horario">Horário:</label>
            <input type="time" name="horario" id="horario" required>
        </div>

        <div class="formulario">
            <label for="sala_id">Número da Sala:</label>
        <select name="sala_id" id="sala_id" required>
            <?php 
            $sql = "SELECT id from sala";
            $query = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($query)){
                $id_sala = $array['id'];
                echo "<option value='$id_sala'>$id_sala</option>";
            }
            ?>
        </select>
        </div>

        <div class="formulario">
            <label for="professor_id">Professor:</label>
            <select name="professor_id" id="professor_id" required>
            <?php 
            $sql = "SELECT id, nome from professor";
            $query = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($query)){
                $id_professor = $array['id'];
                $professor_nome = $array['nome'];
                echo "<option value='$id_professor'>$professor_nome</option>";
            }
            ?>
            </select>
        </div>

        <div class="formulario">
            <label for="classe_id">Número da Classe:</label>
            <select name="classe_id" id="classe_id" required>
            <?php 
            $sql = "SELECT id from classe";
            $query = mysqli_query($conexao, $sql);
            while($array = mysqli_fetch_array($query)){
                $id_classe = $array['id'];
                echo "<option value='$id_classe'>$id_classe</option>";
            }
            ?>
            </select>
        </div>

        <input type="submit" value="Cadastrar">
    </form>

    <footer>
        <p>Desenvolvido por:</p>
        <p>Cyberia Club</p>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

     $("#cadastrar_aula").on("submit", function (event) {
        
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            method: "POST",
            url: "inserir_aula.php",
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
                        window.location.href = 'aulas';      
                    }, 1000);

                }else{
                    Swal.fire({
                        icon: "error",
                        title: "Erro",
                        text: resposta.msg
                    });
                }
                console.log(resposta);
            }
        })
    });
</script>