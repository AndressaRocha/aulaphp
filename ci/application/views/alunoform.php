<!DOCTYPE html>
<html>
    <body>
         <div>
            <?= $msg ?>
        </div>
        <form action="/ci/index.php/aluno/cadastro/" method="post">
            Nome: <input type="text" name="nome"/><br>
            E-mail: <input type="email" name="email"/><br>
            <input type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>