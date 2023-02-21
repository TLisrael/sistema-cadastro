<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema de cadastro | html, css e php </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php">
                    <li>Cadastro</li>
                </a>
                <a href="consultas.php">
                    <li>Consultas</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>

            <form action="post" action="processa.php">
                Nome<br>
                <input class="campo" type="text" maxlength="40" required autofocus name="nome" id="nome" ><br>
                Email<br>
                <input class="campo" type="email" maxlength="50" required  name="email" id="email" ><br>
                Profissão<br>
                <input class="campo" type="text" maxlength="40" required  name="profissao" id="profissao"><br>


                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
            </form>
        </section>
    </div>
</body>

</html>