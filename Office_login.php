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
    <script src="parabens.js"></script>
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
            Pacote Office: Domine as Ferramentas Essenciais para a Produtividade Profissional

        </p>
    </div>

    <main class="inicio">
        <section class="apresentacao">
            <p class="texto_apresentacao">
                O Curso Online de Pacote Office é um programa abrangente projetado para ajudar profissionais e
                estudantes a dominarem as principais ferramentas do Microsoft Office, incluindo Word, Excel e
                PowerPoint. Neste curso, você aprenderá a utilizar de forma eficiente e produtiva essas ferramentas
                fundamentais, desenvolvendo habilidades que são essenciais para o ambiente de trabalho moderno.


                <br><br>
                Ao longo do curso, você será guiado por instrutores especializados que fornecerão instruções passo a
                passo sobre as funcionalidades e recursos do Pacote Office. Você aprenderá a criar documentos
                profissionais no Word, analisar e organizar dados no Excel e criar apresentações visualmente impactantes
                no PowerPoint.

            </p>
        </section>
        <img class="apresentacao_imagem" src="./imagens/PowerBI/Office.jpg" alt="Homem estudando no computador">
    </main>

    <div class="Subtitulo">
        <p>
            Principais tópicos abordados no curso:
        </p>
    </div>
    <div class="Principais_Topicos">
        <p class="topicos">
            1 - Microsoft Word: formatação de documentos, criação de estilos, inserção de tabelas e gráficos, utilização
            de recursos de colaboração e revisão.
            <br><br>
            2 - Microsoft Excel: criação e formatação de planilhas, fórmulas e funções básicas e avançadas, análise e
            visualização de dados, criação de gráficos e tabelas dinâmicas.

            <br><br>
            3 - Microsoft PowerPoint: criação de slides profissionais, formatação de textos e imagens, inserção de
            elementos multimídia, utilização de transições e animações para criar apresentações cativantes.

            <br><br>
            4 - Integração e produtividade: explorando a integração entre as ferramentas do Pacote Office, dicas e
            truques para economizar tempo, personalização de recursos e automação de tarefas repetitivas.

        </p>
    </div>

    <div class="Final_Curso">
        <p>
            Ao concluir o Curso Online de Pacote Office, você estará apto a utilizar as ferramentas do Microsoft Office
            de forma confiante e eficaz. Essas habilidades são altamente valorizadas no mercado de trabalho, pois o
            Pacote Office é amplamente utilizado em praticamente todas as áreas profissionais. Você poderá criar
            documentos profissionais, analisar dados de forma inteligente e criar apresentações convincentes, aumentando
            sua produtividade e melhorando sua comunicação visual.
            <br><br>
            Este curso é recomendado para profissionais de diferentes áreas, estudantes universitários e qualquer pessoa
            que deseje adquirir ou aprimorar suas habilidades no uso do Pacote Office. Independentemente do seu nível de
            conhecimento atual, o Curso Online de Pacote Office oferece uma base sólida para o sucesso no ambiente de
            trabalho moderno.
        </p>
    </div>

    <div class="inscrever">
        <a onclick="parabens()" class="tags_botao" href="" style="margin-top: 10px;">
            Inscrever-se
        </a>
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