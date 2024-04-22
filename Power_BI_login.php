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
    <script src = "parabens.js"></script>
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
            Power BI: Introdução ao Poder da Análise de Dados é um programa
        </p>
    </div>

    <main class="inicio">
        <section class="apresentacao">
            <p class="texto_apresentacao">
                O Curso Online de Power BI: Introdução ao Poder da Análise de Dados é um programa abrangente projetado
                para capacitar profissionais e entusiastas de dados a explorarem todo o potencial do Power BI, uma
                poderosa ferramenta de visualização e análise de dados desenvolvida pela Microsoft. Neste curso, você
                mergulhará nas funcionalidades e recursos do Power BI, aprendendo a criar painéis interativos,
                relatórios dinâmicos e análises avançadas, tudo isso sem a necessidade de conhecimentos prévios de
                programação.

                <br><br>
                Ao longo do curso, você será guiado por especialistas no assunto, que compartilharão suas experiências
                práticas e melhores práticas na manipulação de dados, modelagem e criação de visualizações impactantes.
                Você também aprenderá a importar dados de diferentes fontes, transformá-los em informações
                significativas e criar poderosas apresentações visuais que ajudarão na tomada de decisões informadas.
            </p>
        </section>
        <img class="apresentacao_imagem" src="./imagens/PowerBI/power-BI.png" alt="Homem estudando no computador">
    </main>

    <div class="Subtitulo">
        <p>
            Principais tópicos abordados no curso:
        </p>
    </div>
    <div class="Principais_Topicos">
        <p class="topicos">
            1 - Introdução ao Power BI: familiarização com a interface, painéis e recursos básicos.
            <br><br>
            2 - Importação e transformação de dados: como importar dados de diversas fontes e transformá-los em formatos
            adequados para análise.
            <br><br>
            3 - Modelagem de dados: criação de relacionamentos entre tabelas, cálculos personalizados e medidas
            agregadas.
            <br><br>
            4 - Visualizações interativas: construção de gráficos, tabelas dinâmicas e mapas para explorar e comunicar
            insights.
            <br><br>
            5 - Publicação e compartilhamento de relatórios: como publicar seus relatórios e compartilhá-los com outras
            pessoas.
            <br><br>
            6 - Análises avançadas: utilização de recursos avançados do Power BI, como segmentação de dados, filtragem e
            drill-through.
            <br><br>
            7 - Automatização de processos: introdução a recursos de automação usando o Power Automate e o Power Apps.
        </p>
    </div>

    <div class="Final_Curso">
        <p>
            Ao concluir o Curso Online de Power BI, você estará apto a utilizar o Power BI para criar relatórios
            interativos, obter insights valiosos a partir de dados e comunicar suas descobertas de maneira eficaz. Este
            curso é ideal para profissionais de diversas áreas, como marketing, finanças, recursos humanos, entre
            outras, que desejam aprimorar suas habilidades de análise de dados e impulsionar sua tomada de decisões com
            base em evidências sólidas.

        </p>
    </div>

    <div class="inscrever">
        <a onclick="parabens()" class="tags_botao" href="" style="margin-top: 10px; ">
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