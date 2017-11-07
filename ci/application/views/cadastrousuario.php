<!DOCTYPE html>
<html>
    <body>
        <div>
            <?= $msg ?>
        </div>
        <form action="/ci/index.php/usuario/cadastro/" method="post">
            Nome: <input type="text" name="nome"/><br>
            E-mail: <input type="email" name="email"/><br>
            Senha: <input type="password" name="senha"/><br>
            <input type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>