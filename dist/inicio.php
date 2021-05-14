<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Landing Page Step By Step </title>	
    
    <!-- Style -->
    <link rel="shorkut icon" href="rating.svg">
    <link rel="stylesheet" href="css/style1.css" />

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')
                $('.navigation').toggleClass('active')
                $('.body').toggleClass('active')
            })
        })
    </script>
</head>
<body class="body">
    
    <section class="sec">
        <header>
            <a href="#" class="logo"><img src="img/rating.svg"></a>
            <!-- <div class="toggleMenu" onclick="menuToggle();"></div> -->
            <div class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navigation">
                <li><a href="#">Início</a></li>
                <li><a href="php/prova.php">Prova</a></li>
                <li><a href="#">Conteúdo</a></li>
                <li><a href="php/lista/listar.user.php">Meus Dados</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBx">
                <h2>Lógica <br><span>de Programação</span></h2>
                <p>
                    HTML Significa HyperText Markup Language (linguagem de marcação de texto) e serve para você criar páginas web, pois através das tags (etiquetas) você define a estrutura e os componentes que deverão ser interpretados pelo navegador, como uma imagem, um botão, um campo de entrada de texto como este que eu escrevo e outras inúmeras possibilidades previstas pelas tags.
                </p>
                <div class="btnBx">
                    <a href="php/prova.php">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Iniciar Prova
                    </a>
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1612906325">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
        
        <img class="girl" src="img/WomanInLaptop.png">
    </section>
</body>
</html>