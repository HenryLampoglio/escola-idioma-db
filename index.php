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
}
</style>
<div class="nav">
    <a href="index"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512">
        <style>svg{fill:#000000}</style>
        <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
    </a>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Professor
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="professor/consulta_professor">Consultar professor</a>
            <a class="dropdown-item" href="professor/cadastrar_professor">Cadastrar professor</a>
            <a class="dropdown-item" href="professor/editar_professor">Atualizar dados de professor</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Aulas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="aulas/aulas">Visualizar todas aulas</a>
            <a class="dropdown-item" href="aulas/cadastrar_aula">Cadastrar aula</a>
            <a class="dropdown-item" href="aulas/editar_aula">Atualizar dados de aula</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Aluno   
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="alunos/consulta_aluno">Consultar aluno</a>
            <a class="dropdown-item" href="alunos/cadastrar_aluno">Cadastrar aluno</a>
            <a class="dropdown-item" href="alunos/editar_aluno">Atualizar dados de aluno</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Turmas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="turma/consulta_turma">Consultar turmas</a>
            <a class="dropdown-item" href="turma/cadastrar_turma">Cadastrar turmas</a>
            <a class="dropdown-item" href="turma/editar_turma">Atualizar dados de turmas</a>
        </div>
    </div>
    <div class="dropdown">
        <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notas
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="notas/consulta_notas">Consultar Notas</a>
            <a class="dropdown-item" href="notas/cadastrar_notas">Cadastrar Notas</a>
            <a class="dropdown-item" href="notas/editar_notas">Atualizar Notas</a>
        </div>
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
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5aae5df822.js" crossorigin="anonymous"></script>
</html>