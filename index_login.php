<?php
    $email = $_GET['var'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylelogado.css">
    <script src="busca.js"></script>
</head>

<body>
    <header class="cabecalho">
        <nav class="cabecalho__menu">
            <a href = "index_login.php" ><img src="./imagens/logo2.png" alt="logo"></a>
            <a class="cabecalho__menu__link" href="index_login.php?var=<?php echo urlencode($email); ?>">Início</a>
            <a class="cabecalho__menu__link" href="cursos_login.php?var=<?php echo urlencode($email); ?>">Cursos</a>
            <a class="cabecalho__menu__link" href="https://exame.com/noticias-sobre/cursos-online/" target="_blank">Notícias</a>
           

            
            <div class="perfil" id="perfil">
                <?php
                include('conexao.php');
                    
                $sql_Usuarios = "SELECT * FROM cadastro";
                $query_Usuarios = $mysqli->query($sql_Usuarios) or die($mysqli->error);
                $num_Usuarios = $query_Usuarios->num_rows;
                $myClass = "ola";
                $nome = " ";
                $cpf = " ";

                while ($Usuarios = $query_Usuarios->fetch_assoc()){
                    if($email == $Usuarios['email']){
                        $nome = $Usuarios['Nome'];
                        $cpf = $Usuarios['CPF'];
                        echo "<p class = 'ola'>Olá, $nome</p>";
                    }
                }



            ?>
            
            <a><img src="./imagens/login/pessoinha.png" alt="usuario" class="icone"></a>
            </div>
            
            <nav id="menu" class = "menu">
                <ul>
                <li><a>Nome: <?php echo $nome?></a></li>
                <li><a>Email: <?php echo $email?></a> </a></li>
                <li><a>CPF: <?php echo $cpf?></a></a></li>
                <li><a href="index.html">Desconectar-se</a></li>
                </ul>
            </nav>

            <script src="menu.js"></script>

            <div class="search-container">
                <input id="pesquisa" type="text" class ="place" placeholder="Pesquisar" >
                <button onclick="busca()" type="submit">Buscar</button>
            </div>
        </nav>
    </header>

    <div class="titulo_apresentacao">
        <p>
            e-Learn Cursos
        </p>
    </div>

    <main class="inicio">
        <section class="apresentacao">
            <p class="texto_apresentacao">
                Bem-vindo ao e-Learn, o seu destino definitivo para cursos online de alta qualidade! Com uma ampla gama
                de disciplinas e tópicos abrangentes, oferecemos uma experiência de aprendizado flexível e acessível
                para estudantes de todas as idades e níveis de habilidade.
            <br><br>
                No e-Learn, você encontrará uma plataforma intuitiva e fácil de usar, que lhe permitirá aprender no seu
                próprio ritmo e no conforto da sua casa. Com vídeos interativos, materiais de estudo abrangentes e
                avaliações práticas, nosso sistema de aprendizado proporciona uma experiência envolvente e
                enriquecedora. Aprenda novas habilidades, atualize seu currículo e desenvolva-se pessoal e
                profissionalmente com o e-Learn - a chave para o seu sucesso educacional está ao seu alcance!
            </p>
        </section>
        <img class="apresentacao_imagem" src="./imagens/inicio/homem.jpeg" alt="Homem estudando no computador">
    </main>

    <div class="titulo_apresentacao">
        <p>
            O que você quer aprender hoje?
        </p>
    </div>

    <main class="aprendizado">
        <a class="tags" href="Power_BI_login.php?var=<?php echo urlencode($email); ?>">
            PowerBI
        </a>

        <a class="tags" href="Office_login.php?var=<?php echo urlencode($email); ?>">
            Office
        </a>

        <a class="tags" href="html_css_JS_login.php?var=<?php echo urlencode($email); ?>">
            HTML/CSS/JS
        </a>

        <a class="tags" href="Python_login.php?var=<?php echo urlencode($email); ?>">
            Python
        </a>

        <a class="tags" href="Photoshop_login.php?var=<?php echo urlencode($email); ?>">
            Photoshop
        </a>

    </main>

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