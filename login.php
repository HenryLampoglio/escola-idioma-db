<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rocket & Grow</title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
  <body>
    <div class="page">
        <form method="POST" class="formLogin" id="login">
            <h1>Rocket & Grow</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="text">Login</label>
            <input type="text" name="user" placeholder="Digite seu login" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name="pass" placeholder="Digite sua senha" />
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>  
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

     $("#login").on("submit", function (event) {
        
        event.preventDefault();

        $.ajax({
            method: "POST",
            url: "login_validator.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (json) {
                console.log(json);
                var resposta = JSON.parse(json);
                console.log(resposta.erro);
                if(resposta.erro == true) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: 'Usuário ou senha incorretos!'
                    })
                }else if(resposta.erro == 'empty'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: 'Preencha o usuário e senha!'
                    })
                }
                else if(resposta.erro == false) {
                    window.location.href = "index"
                }
            }
        })
    });
</script>