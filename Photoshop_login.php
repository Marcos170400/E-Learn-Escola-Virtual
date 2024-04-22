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
            Photoshop: Domine as Ferramentas de Edição e Manipulação de Imagens

        </p>
    </div>

    <main class="inicio">
        <section class="apresentacao">
            <p class="texto_apresentacao">
                O Curso Online de Photoshop é um programa abrangente projetado para ajudar entusiastas de design,
                fotógrafos e profissionais criativos a dominarem as habilidades essenciais de edição e manipulação de
                imagens com o Adobe Photoshop. Neste curso, você mergulhará no mundo das ferramentas poderosas do
                Photoshop, aprendendo a transformar suas ideias em realidade visual.


                <br><br>
                Ao longo do curso, você contará com instrutores especializados que compartilharão técnicas e dicas
                práticas para utilizar o Photoshop de forma eficiente. Você aprenderá a realizar correções de cor,
                ajustes de exposição, remoção de imperfeições, criação de composições avançadas, retoques fotográficos e
                muito mais. Além disso, você explorará as funcionalidades avançadas do software, como camadas, máscaras,
                filtros e ferramentas de seleção.


            </p>
        </section>
        <img class="apresentacao_imagem" src="./imagens/PowerBI/photoshop.png" alt="Homem estudando no computador">
    </main>

    <div class="Subtitulo">
        <p>
            Principais tópicos abordados no curso:
        </p>
    </div>
    <div class="Principais_Topicos">
        <p class="topicos">
            1 - Introdução ao Photoshop: familiarização com a interface, painéis e configurações básicas.


            <br><br>
            2 - Edição e retoque de imagens: ajuste de brilho, contraste, equilíbrio de cores, remoção de manchas, olhos
            vermelhos e outras imperfeições.




            <br><br>
            3 - Composição e montagem: aprenda a criar composições avançadas, mesclando elementos de diferentes imagens
            para criar efeitos visuais impressionantes.


            <br><br>
            4 - Manipulação de camadas e máscaras: utilize camadas para organizar e controlar elementos da imagem, e
            explore o poder das máscaras para criar efeitos precisos.



            <br><br>
            5 - Efeitos especiais e filtros: adicione efeitos artísticos, desfoques, texturas e filtros para alcançar
            resultados criativos e personalizados.


            <br><br>
            6 - Design gráfico e tipografia: crie layouts, banners, cartazes e manipule texto com ferramentas de
            tipografia avançadas.



            <br><br>
            7 - Fluxo de trabalho e otimização: aprenda a organizar seu trabalho, salvar em diferentes formatos e
            preparar imagens para impressão e publicação online.



        </p>
    </div>

    <div class="Final_Curso">
        <p>
            Ao concluir o Curso Online de Photoshop, você estará apto a utilizar o Adobe Photoshop de forma proficiente,
            criando e editando imagens de alta qualidade para diversos fins. Você poderá melhorar suas habilidades como
            fotógrafo, criar designs gráficos impactantes e até mesmo iniciar sua jornada como um profissional de
            design.


            <br><br>
            Este curso é recomendado para iniciantes e intermediários que desejam adquirir ou aprimorar suas habilidades
            em edição e manipulação de imagens com o Photoshop. Com o conhecimento adquirido, você poderá explorar seu
            lado criativo e elevar suas produções visuais a um novo patamar.

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