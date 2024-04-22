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

    <div class="cursos">
        <div class="Corpo_Curso">
            <img class="logo" src="./imagens/logo-powebi.png" alt="logo_BI">

            <div class="Descricao">
                <p class="Titulo">Power BI: Introdução ao Poder da Análise de Dados
                </p>
                <p class="texto">O Curso Online de Power BI: Introdução ao Poder da Análise de Dados é um programa
                    abrangente projetado
                    para capacitar profissionais e entusiastas de dados a explorarem todo o potencial do Power BI, uma
                    poderosa ferramenta de visualização e análise de dados desenvolvida pela Microsoft. Neste curso,
                    você
                    mergulhará nas funcionalidades e recursos do Power BI, aprendendo a criar painéis interativos,
                    relatórios dinâmicos e análises avançadas, tudo isso sem a necessidade de conhecimentos prévios de
                    programação.
                </p>

                <a class="tags_rodape" href="Power_BI_login.php?var=<?php echo urlencode($email);?>" style="margin-top: 10px;">
                    Saiba mais
                </a>
            </div>

        </div>

        <div class="Corpo_Curso">
            <img class="logo" src="./imagens/logo-pacote-office.png" alt="logo_Office">

            <div class="Descricao">
                <p class="Titulo">Office: Domine as Ferramentas Essenciais para a Produtividade Profissional
                </p>
                <p class="texto">O Curso Online de Pacote Office é um programa abrangente projetado para ajudar
                    profissionais e estudantes a dominarem as principais ferramentas do Microsoft Office, incluindo
                    Word, Excel e PowerPoint. Neste curso, você aprenderá a utilizar de forma eficiente e produtiva
                    essas ferramentas fundamentais, desenvolvendo habilidades que são essenciais para o ambiente de
                    trabalho moderno.

                </p>

                <a class="tags_rodape" href="Office_login.php?var=<?php echo urlencode($email);?>" style="margin-top: 10px;">
                    Saiba mais
                </a>

            </div>
        </div>

        <div class="Corpo_Curso">
            <img class="logo" src="./imagens/logo-html-css-js.png" alt="logo_HTMLCSSJS">

            <div class="Descricao">
                <p class="Titulo">HTML, CSS e JavaScript: Fundamentos para Desenvolvimento Web Interativo
                </p>
                <p class="texto">O Curso Online de HTML, CSS e JavaScript é um programa completo projetado para aqueles
                    que desejam aprender as bases fundamentais do desenvolvimento web interativo. Neste curso, você
                    mergulhará nas linguagens de marcação HTML, estilização com CSS e programação com JavaScript,
                    adquirindo as habilidades necessárias para criar websites dinâmicos e interativos.


                </p>

                <a class="tags_rodape" href="html_css_JS_login.php?var=<?php echo urlencode($email);?>" style="margin-top: 10px;">
                    Saiba mais
                </a>

            </div>
        </div>

        <div class="Corpo_Curso">
            <img class="logo" src="./imagens/logo-python.png" alt="logo_Python">

            <div class="Descricao">
                <p class="Titulo">Python: Fundamentos e Aplicações na Programação
                </p>
                <p class="texto">O Curso Online de Python é um programa abrangente projetado para capacitar iniciantes e
                    entusiastas da programação a dominarem a linguagem Python, uma das mais populares e versáteis do
                    mundo. Neste curso, você será introduzido aos conceitos fundamentais de programação usando Python,
                    aprenderá a sintaxe da linguagem e explorará suas aplicações em diversos domínios.
                </p>

                <a class="tags_rodape" href="Python_login.php?var=<?php echo urlencode($email);?>" style="margin-top: 10px;">
                    Saiba mais
                </a>

            </div>
        </div>

        <div class="Corpo_Curso">
            <img class="logo" src="./imagens/logo-photoshop.png" alt="logo_Python">

            <div class="Descricao">
                <p class="Titulo"> Photoshop: Domine as Ferramentas de Edição e Manipulação de Imagens

                </p>
                <p class="texto">O Curso Online de Photoshop é um programa abrangente projetado para ajudar entusiastas
                    de design, fotógrafos e profissionais criativos a dominarem as habilidades essenciais de edição e
                    manipulação de imagens com o Adobe Photoshop. Neste curso, você mergulhará no mundo das ferramentas
                    poderosas do Photoshop, aprendendo a transformar suas ideias em realidade visual.

                </p>

                <a class="tags_rodape" href="Photoshop_login.php?var=<?php echo urlencode($email);?>" style="margin-top: 10px;">
                    Saiba mais
                </a>

            </div>
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