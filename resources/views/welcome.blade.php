<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Article Finder</title>

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="">
            <div class="content">
                <form action="/login-validate" method="POST">
                @csrf
                    <div>
                        <label>Usuário:</label>
                        <input type="text" placeholder="Insira seu nome de usuário" name="usuario"/>
                    </div>
                    <div>
                        <label>Senha:</label>
                        <input type="password" placeholder="Insira sua senha" name="senha"/>
                    </div>
                    <div>
                        <input type="submit" value="Entrar"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
