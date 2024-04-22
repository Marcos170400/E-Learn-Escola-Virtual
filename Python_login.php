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
            Python: Fundamentos e Aplicações na Programação
        </p>
    </div>

    <main class="inicio">
        <section class="apresentacao">
            <p class="texto_apresentacao">
                O Curso Online de Python é um programa abrangente projetado para capacitar iniciantes e entusiastas da
                programação a dominarem a linguagem Python, uma das mais populares e versáteis do mundo. Neste curso,
                você será introduzido aos conceitos fundamentais de programação usando Python, aprenderá a sintaxe da
                linguagem e explorará suas aplicações em diversos domínios.

                <br><br>
                Ao longo do curso, você contará com instrutores especializados que fornecerão explicações claras e
                exemplos práticos, ajudando você a compreender os conceitos de programação de forma eficaz. Você
                aprenderá a criar programas simples, manipular dados, automatizar tarefas e resolver problemas do mundo
                real usando Python.

            </p>
        </section>
        <img class="apresentacao_imagem" src="./imagens/PowerBI/python.png" alt="Homem estudando no computador">
    </main>

    <div class="Subtitulo">
        <p>
            Principais tópicos abordados no curso:
        </p>
    </div>
    <div class="Principais_Topicos">
        <p class="topicos">
            1 - Introdução à programação: conceitos básicos, lógica de programação, algoritmos e estruturas de dados.


            <br><br>
            2 - Sintaxe e estruturas de controle: familiarização com a sintaxe da linguagem Python, uso de variáveis,
            operadores, estruturas condicionais e loops.



            <br><br>
            3 - Funções e módulos: criação e utilização de funções, importação de módulos e reutilização de código.


            <br><br>
            4 - Manipulação de dados: trabalhar com listas, tuplas, dicionários e conjuntos, além de explorar a leitura
            e gravação de arquivos.


            <br><br>
            5 - Orientação a objetos: conceitos básicos de programação orientada a objetos (POO), criação de classes,
            instâncias e herança.

            <br><br>
            6 - Aplicações práticas: utilização de bibliotecas populares, como NumPy e Pandas, para análise de dados,
            visualização e processamento estatístico.


            <br><br>
            7 - Desenvolvimento de projetos: aplicação dos conceitos aprendidos em projetos práticos, como jogos,
            automação de tarefas e análise de dados.


        </p>
    </div>

    <div class="Final_Curso">
        <p>
            Ao concluir o Curso Online de Python, você estará preparado para utilizar a linguagem Python para criar
            programas simples e resolver problemas de programação do mundo real. Você terá adquirido uma base sólida em
            conceitos de programação, o que lhe permitirá expandir seus conhecimentos em outras áreas, como
            desenvolvimento web, ciência de dados e inteligência artificial.


            <br><br>
            Este curso é adequado para iniciantes na programação, estudantes de ciência da computação, profissionais que
            desejam adquirir habilidades em Python e qualquer pessoa interessada em aprender uma linguagem de
            programação versátil e de alto nível. Com Python, você terá um poderoso recurso em suas mãos, capaz de
            impulsionar sua carreira e abrir portas para diversas oportunidades profissionais.

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