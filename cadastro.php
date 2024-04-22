<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylecadastro.css">
    <script src="busca.js"></script>
</head>
<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <a href = "index.html" ><img src="./imagens/logo2.png" alt="logo"></a>
            <a class="cabecalho__menu__link" href="index.html">Início</a>
            <a class="cabecalho__menu__link" href="cursos.html">Cursos</a>
            <a class="cabecalho__menu__link" href="https://exame.com/noticias-sobre/cursos-online/" target="_blank">Notícias</a>
            <a class="cabecalho__menu__link" href="login.php">Login</a>            

            <div class="search-container">
                <input id="pesquisa" type="text" class ="place" placeholder="Pesquisar" >
                <button onclick="busca()" type="submit">Buscar</button>
            </div>
        </nav>
    </header>

    <div class="titulo_apresentacao">
        <p>
            Faça seu cadastro
        </p>
    </div>

    <div class = "login">
        <div class = "formulario">
        <form method="POST" action="">
            <p class = "search-container">
                <label class = "login_conteudo">Nome: </label>
                <input name="nome" type="text" class="place" placeholder="Digite seu nome">
            </p>
            <br>
            <p class = "search-container">
                <label class = "login_conteudo_CPF">CPF: </label>
                <input name="CPF" type="number" class = "place" placeholder="Digite seu CPF">
            </p>
            <br>
            <p class = "search-container">
                <label class = "login_conteudo">Email: </label>
                <input name="email" type="text" class = "place" placeholder="Digite seu email">
            </p>
            <br>
            <p class = "search-container">
                <label class = "login_conteudo">Senha: </label>
                <input name="senha" type="password" class = "place" placeholder="Digite sua senha">
            </p>
            <p>
                <button class = "login_botao" type="submit">Cadastrar</button>
            </p>
            
            
        </form>
        <!-- Programa em PHP: -->
        <?php
            $erro = false;

            if(count($_POST) > 0){

                include('conexao.php');
                $erro= false;

                $nome = $_POST['nome'];
                $CPF = $_POST['CPF'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
                
                if (empty($nome)){
                    $erro = "Preencha o nome";
                }
                if (empty($CPF)){
                    $erro = "Preencha o CPF";
                }
                if (empty($email)){
                    $erro = "Preencha o email";
                }
                if (empty($senha)){
                    $erro = "Preencha a senha";
                }
            

                $sql_Usuarios = "SELECT * FROM cadastro";
                $query_Usuarios = $mysqli->query($sql_Usuarios) or die($mysqli->error);
                $num_Usuarios = $query_Usuarios->num_rows;
                $myClass = "erros";

                while ($Usuarios = $query_Usuarios->fetch_assoc()){
                    if($CPF == $Usuarios['CPF'] || $email == $Usuarios['email']){
                        $erro = "Email ou CPF já cadastrados";
                    }
                }

                if($erro != false){
                    echo "<p class = 'erros'>Erro: $erro</p>";
                    
                }else {
                    
                    $sql_code = "INSERT INTO cadastro (nome, CPF, email, senha)
                    VALUES ('$nome', '$CPF', '$email', '$senhaCriptografada')";
                    $ok = $mysqli->query($sql_code) or die ($mysqli->error);
                
                    if($ok){
                        echo"<p class = 'erros'>Cliente cadastrado com sucesso!</p>";
                    }
                }
            }
        ?>
    </div>
</div>

    
   


    

<footer class="rodape">
        
        <div class="conteudo_rodape">
            <p style="text-align: justify;">Cadastre-se para receber as novidades sobre os cursos.</p>
            <a class="tags_rodape" href="cadastro.php" style="margin-top: 10px;">
                Cadastre-se
            </a>
        </div>

        <div class="conteudo_rodape2">
            <p >Redes sociais</p>
            <div >
                
                <a class="link_redes" href="https://www.facebook.com" target="_blank"><img
                        src="./imagens/redes-sociais/001-facebook.png" class="logos_redes"></a>
                <a class="link_redes" href="https://web.whatsapp.com" target="_blank"><img
                        src="./imagens/redes-sociais/003-whatsapp.png" class="logos_redes"></a>
                <a class="link_redes" href="https://www.linkedin.com" target="_blank"><img
                        src="./imagens/redes-sociais/010-linkedin.png" class="logos_redes"></a>
                <a class="link_redes" href="https://www.instagram.com" target="_blank"><img
                        src="./imagens/redes-sociais/011-instagram.png" class="logos_redes"></a>
            </div>

        </div>



    </footer>

    <p class="titulo_rodape">© Desenvolvido por Marcos Paulo Cardoso e Sofia Costa</p>
</body>

</html>



