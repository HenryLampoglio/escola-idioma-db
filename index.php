<?php include_once 'validacao.php';?>
<html lang="pt-br"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rocket & Grow</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<style>
body{
    background-color: #0A3876;
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://i.pinimg.com/originals/b5/aa/17/b5aa17f0ebb5bb72c039e0d79e274000.png');
    background-size: auto;
    background-position: center center;
    background-repeat: no-repeat;
}


</style>
<div class="nav">
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Professor
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="professor/professores">Visualizar os professores</a>
            <a class="dropdown-item" href="professor/cadastrar_professor">Cadastrar professor</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Aulas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="aulas/aulas">Visualizar todas aulas</a>
            <a class="dropdown-item" href="aulas/cadastrar_aula">Cadastrar aula</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aluno   
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="alunos/alunos">Visualizar todos os alunos</a>
            <a class="dropdown-item" href="alunos/cadastrar_aluno">Cadastrar aluno</a>
        </div>
    </div>

    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Responsavel   
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="responsavel/responsavel">Visualizar responsavel</a>
            <a class="dropdown-item" href="responsavel/cadastrar_responsavel">Cadastrar responsavel</a>
        </div>
    </div>

    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Turmas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="turma/turma">Visualizar turmas</a>
            <a class="dropdown-item" href="turma/cadastrar_turma">Cadastrar turmas</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="notas/notas">Visualizar as Notas</a>
            <a class="dropdown-item" href="notas/cadastrar_notas">Cadastrar Notas</a>
        </div>
    </div>

<div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Salas
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="salas/salas">Visualizar as Salas</a>
                <a class="dropdown-item" href="salas/cadastrar_sala">Cadastrar Salas</a>
            </div>
        </div>
        <a href="logout.php"><input type="image" src="https://cdn.icon-icons.com/icons2/2518/PNG/512/logout_icon_151219.png"></a>
    </div>
</div>  


<div class="container_cards">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://media.istockphoto.com/id/950614324/pt/foto/school-girl-writing-in-class.jpg?s=612x612&w=0&k=20&c=twCOsbe7GiOe568v9aG8HVXWN2j3U2KQsB1xr5WA5nw=" alt="Imagem de capa do card">
        <div class="card-body">
            <p class="card-text">Aulas de inglês, Espanhol e Italiano</p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://horario.com.br/wp-content/uploads/2019/11/03_geha_blog_formacao_das_turmas.jpg">
        <div class="card-body">
            <p class="card-text">Diversas turmas disponíveis</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://img.freepik.com/fotos-premium/um-estudante-vestindo-um-bone-e-beca-de-formatura-fica-em-frente-a-um-predio_765582-6527.jpg">
        <div class="card-body">
            <p class="card-text">Certificado com reconhecimento internacional</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://s3.amazonaws.com/uploads.lms.novaescola.org.br/trilha/ea1ea719-d08e-47d7-a04c-6a3160fd31c7.png">
        <div class="card-body">
            <p class="card-text">Há 15 anos inspirando jovens</p>
        </div>
    </div>

</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5aae5df822.js" crossorigin="anonymous"></script>
</html>