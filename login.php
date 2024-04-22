<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylelogado.css">
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
            Digite suas credenciais
        </p>
    </div>

    <div class = "login">
        <div class = "formulario">
            <form method="POST" action="" >
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
                <button class = "login_botao" type="submit">Login</button>
            </p>
            
                <label class = "login_cadastrese"><a href="cadastro.php" class="ancora">Não possui uma conta? Cadastre-se!</a></label>

            
            </form>

        

            <!-- Programa em PHP: -->
            <?php
                $erro = true;

                if(count($_POST) > 0){

                    include('conexao.php');
                    $erro= false;

                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    
                    if (!empty($email)){
                        $erro = true;
                    }
                    if (!empty($senha)){
                        $erro = true;
                    }
                

                    $sql_Usuarios = "SELECT * FROM cadastro";
                    $query_Usuarios = $mysqli->query($sql_Usuarios) or die($mysqli->error);
                    $num_Usuarios = $query_Usuarios->num_rows;
                    $myClass = "erros";

                    while ($Usuarios = $query_Usuarios->fetch_assoc()){
                        if(password_verify($senha, $Usuarios['senha']) && $email == $Usuarios['email']){
                            $erro = false;
                        }
                        else if($erro != false){
                            
                            $erro = true;
                        }
                    }

                    if($erro == true){
                        echo "<p class = 'erros'>Erro: Email ou senha inválidos!</p>";
                        
                        
                    }else {
                        header("Location: index_login.php?var=".$email);
                        exit();
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
