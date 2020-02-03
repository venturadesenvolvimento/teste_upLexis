<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Article Finder</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="/login-validate" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="usuario">Usuário:</label>
                        <input type="text" class="form-control" placeholder="Insira seu nome de usuário" name="usuario" id="usuario"/>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" placeholder="Insira sua senha" name="senha" id="senha"/>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" class="btn btn-secondary" value="Entrar"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
