<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliação</title>

    <link rel="stylesheet" href="../css/prova.css">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
  <input type="checkbox" id="check">

  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Avali <span>Ação</span></h3>
    </div>
    <div class="right_area">
      <a href="sair.php" class="logout_btn">Sair da conta</a>
    </div>
  </header>

  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="../img/profile-user.svg" class="mobile_profile_image" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
  </div>

  <!--sidebar start-->
  <div class="sidebar">
    <div class="profile_info">
      <img src="../img/profile-user.svg" class="profile_image" alt="">
      <?php
          session_start();
          ob_start();

          if(!empty($_SESSION['id'])){
          echo "<h4>".$_SESSION['nome']."</h4>";

          }else{
          $_SESSION['msg'] = "Área restrita. É necessário estar logado para abrir a página principal";
          echo "
								<section>
										<h2 class='reveal'>".$_SESSION['msg']."</h2>
								</section>
							";
          header("Location:../index.php");
          }
      ?>
    </div>
    <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
  </div>

  <div class="content">
    <div class="card">
      <p>Bem Vindo à prova HTML e CSS. Boa sorte nessa jornada</p>
    </div>
    <form type="text" action="save_prova" method="post">

      <!-- ------------- QUESTÃO 1 -->
      <div class="card">
        <p>
          <b>1) </b> No passado, era preciso instalar os mais diversos programas, muitos deles pagos, para que fosse possível dar os primeiros passos no mundo da programação. Isso acabava espantando os candidatos à programação. A boa notícia é que as coisas mudaram!<br><br>
          Temos as seguintes afirmações sobre o parágrafo anterior:<br><br>
          A) Os sistemas operacionais mais populares do mercado (Windows, Linux, Mac) já vêm com um navegador web padrão e todo navegador é capaz de interpretar um código escrito por nós.<br><br>
          B) Uma das linguagens que o navegador compreende é a HTML. <br><br>
          C) Um navegador é um poliglota. <br> <br>
          Qual das opções abaixo é verdadeira a respeito das afirmativas anteriores?
        </p>
      </div>
      <input type="radio" name="p1" value="a">A) Todas as alternativas<br><br>
      <input type="radio" name="p1" value="b">B) Um navegador é um poliglota. <br><br>
      <input type="radio" name="p1" value="c">C) Uma das linguagens que o navegador compreende é a HTML. <br><br> 

      <!-- ------------- QUESTÃO 2 -->
      <div class="card">
        <p>
          <b>2) </b> Com base na revisão que fizemos de extensão de arquivo e convenção, temos os seguintes nomes de arquivo: <br><br>
          A) meu_primeiro_programa <br><br>
          B) segundoprograma.html <br><br>
          C) MEU_PROGRAMA.HTML <br><br>
          D) programa_ninha.HTML <br><br> 
          E) lógica_de_programação.html
        </p>
      </div>
      <input type="radio" name="p2" value="a">A) Apenas A, B, C, D não seguem o padrão.<br><br>
      <input type="radio" name="p2" value="b">B) Todas as alternativas não seguem o padrão.<br><br>
      <input type="radio" name="p2" value="c">C) Apenas A, B, C, E não seguem o padrão.<br><br>

      <!-- ------------- QUESTÃO 3 -->
      <div class="card">
        <p>
          <b>3) </b>Sobre o HTML podemos dizer:<br><br>
          A) Sua sigla significa Hyper Text Markup Language, ou seja, é uma linguagem de marcação de texto caracterizada pelo uso de TAGS. <br><br>
          B) TAG indicam instruções especiais a serem interpretadas pelo navegador.  <br><br>
          C) A TAG < h2 > é usada para criar links para que o usuário seja levado de uma página para outra. <br><br>
          D) < meta > é o exemplo de uma TAG HTML. 
        </p>
      </div>
      <input type="radio" name="p3" value="a">A) Apenas a C é falsa <br><br>
      <input type="radio" name="p3" value="b">B) A e B é falsa <br><br>
      <input type="radio" name="p3" value="c">C) Todas as alternativas <br><br>

      <!-- ------------- QUESTÃO 4 -->
      <div class="card">
        <p>
          <b>4) </b> A linguagem HTML é uma linguagem baseada em tags. Sobre tags podemos dizer:<br><br>
          A) Toda tag começa com < e termina com >. Por exemplo, existem as tags < h1 > e < a >. <br><br>
          B) Dependendo da tag, ela pode ou não ter fechamento. Por exemplo, a tag < h1 > precisa de fechamento para delimitar seu conteúdo. Já a tag < meta > não. Ela define o valor de diferentes atributos, como o que vimos mais cedo, o chamado charset. <br><br>
          C) O seguinte exemplo é de uma tag válida: < h1> Olá< h1 >. 
        </p>
      </div>
      <input type="radio" name="p4" value="a">A) Apenas B e C são corretas  <br><br>
      <input type="radio" name="p4" value="b">B) Apenas A e C são corretas <br><br>
      <input type="radio" name="p4" value="c">C) Apenas A e B são corretas <br><br>

      <!-- ------------- QUESTÃO 5 -->
      <div class="card">
        <p>
        <b>5) </b> Quando escrevemos um código JavaScript, o primeiro passo é dar uma pista ao navegador para que ele entenda que o trecho de código a ser lido é JavaScript. Fazemos isso através: 
      </div>
      <input type="radio" name="p5" value="a">A) Da tag script <br><br>
      <input type="radio" name="p5" value="b">B) Da tag < javascript > <br><br>
      <input type="radio" name="p5" value="c">C) Da tag < a > <br><br>

      <!-- ------------- QUESTÃO 6 -->
      <div class="card">
        <p>
          <b>6) </b> < h1 >Um pequeno passo para quem já programa, um gigantesco salto para quem esta começando< h1 >
          Este é meu primeiro programa!<br>
          Marque a opção abaixo que indica quais são os erros existentes no código: 
        </p>
      </div>
      <input type="radio" name="p6" value="a">A) O conteúdo exibido no browser estará em destaque, inclusive o segundo parágrafo. <br><br>
      <input type="radio" name="p6" value="b">B)Ele terá apenas problema de acentuação na exibição.<br><br>
      <input type="radio" name="p6" value="c">C) Ele terá problema na acentuação (exceto no Chrome) e todo o conteúdo exibido no browser estará em destaque, inclusive o segundo parágrafo. <br><br>

      <!-- ------------- QUESTÃO 7 -->
      <div class="card">
        <p>
        <b>7) </b> Aprendemos que a instrução alert tem como funcionalidade a exibição de um alerta pop up. Sendo assim, temos o seguinte código script: <br><br>
        <code>
          alert();
        </code> <br> <br>
        Sobre a maneira pela qual a instrução alert foi escrita podemos dizer que: <br>
        A) Nenhum popup será exibido <br>
        B) O popup será exibido, mas nenhuma mensagem será exibida. <br>
        C) Haverá um erro que pode ser averiguado pelo debugger, o console do navegador. <br>
        </p>
      </div>
      <input type="radio" name="p7" value="a">A)A é verdadeira <br><br>
      <input type="radio" name="p7" value="b">B)B é verdadeira <br><br>
      <input type="radio" name="p7" value="c">A)C é verdadeira <br><br>

      <!-- ------------- QUESTÃO 8 -->
      <div class="card">
        <p>
          <b>8) </b>Temos as seguintes operações em código script: <br><br>
          A)<code>
            document.write(12 + " anos");
          </code> <br> <br>
          B)<code>
            document.write(Minha idade é + 12);
          </code> <br> <br>
          C)<code>
            document.write("Média calculada " + 20);
          </code> <br> <br>
          D)<code>
            document.write(10 + 20);
          </code> <br> <br>
          Podemos dizer que:
        </p>
      </div>
      <input type="radio" name="p8" value="a">A,B,C,D são exemplos de concatenação <br><br>
      <input type="radio" name="p8" value="b">B)A e D não são exemplos de concatenação <br><br>
      <input type="radio" name="p8" value="c">C)A, C e D são exemplos de concatenação <br><br>
      <input type="radio" name="p8" value="d">D)A e C são exemplos de concatenação <br><br>

      <!-- ------------- QUESTÃO 9-->
      <div class="card">
        <p>
          <b>9)</b>Sobre o uso de tags, em HTML, podemos afirmar: br><br>
          A) Uma convenção muito usada é usar tags em letra maiúscula. <br><br>
          B) Uma convenção muito usada é usar tags em letra minúscula. <br><br>
          C Podemos usar tanto tags em maiúscula ou em minúscula que não faz diferença para o navegador. <br><br>
          Sobre as afirmativas acima podemos dizer que:
        </p>
      </div>
      <input type="radio" name="p9" value="a">A)B e C são verdadeiras <br><br>
      <input type="radio" name="p9" value="b">B)A e C são verdadeiras <br><br>
      <input type="radio" name="p9" value="c">C)A é a verdadeira <br><br>

      <!-- ------------- QUESTÃO 10 -->
      <div class="card">
        <p>
          <b>10) </b> Temos o seguinte código:<br><br>
          <code>
            document.write("A" + "B" + 20 + 10 + "C" + (5 + 10) + "D");
          </code><br><br>
          Qual das opções abaixo possui o resultado que é exibido na tela?
        </p>
      </div>
      <input type="radio" name="p10" value="a">A) AB30C15D <br><br>
      <input type="radio" name="p10" value="b">B) AB2010C15D <br><br>
      <input type="radio" name="p10" value="c">C) AB2010C510D <br><br>

      <input type="submit" value="Enviar resposta">
    </form>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
  </script>
</body>
</html>