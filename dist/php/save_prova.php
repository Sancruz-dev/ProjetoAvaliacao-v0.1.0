<?php
    $hoje = date('d/m/Y');
    session_start();

    if(!empty($_SESSION['id'])){
    echo "<h4>".$_SESSION['nome']."</h4>";
    echo "Hoje é dia".$hoje."<br><br>";

    }else{
    $_SESSION['msg'] = "<h2 class=arearest> Área restrita. É necessário estar logado para abrir a página principal</h2>";
    header("Location:../index.php");
    }

    include "conexao.php";

    $nota = 0;
    $nome = $_SESSION['nome'];
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];
    $p4 = $_POST["p4"];
    $p5 = $_POST["p5"];
    $p6 = $_POST["p6"];
    $p7 = $_POST["p7"];
    $p8 = $_POST["p8"];
    $p9 = $_POST["p9"];
    $p10 = $_POST["p10"];

    if($p1 == "a"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa A) Todas as alternativas <br><br>";
    }

    
    if($p2 == "b"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa B)Todas as alternativas não seguem o padrão. <br><br>";
    }
    echo"$nota";


    if($p3 == "A"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa A) Apenas a C é falsa <br><br>";
    }
    echo"$nota";


    if($p4 == "c"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa C) Apenas A e B são corretas  <br><br>";
    }
    echo"$nota";


    if($p5 == "a"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "A) Da tag < script > <br><br>";
    }
    echo"$nota";


    if($p6 == "c"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa C) Ele terá problema na acentuação (exceto no Chrome) e todo o conteúdo exibido no browser estará em destaque, inclusive o segundo parágrafo.<br><br>";
    }
    echo"$nota";


    if($p7 == "b"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa B) B é verdadeira<br><br>";
    }
    echo"$nota";


    if($p8 == "d"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa D)A, C são exemplos de concatenação<br><br>";
    }
    echo"$nota";


    if($p9 == "b"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa B) B e C são verdadeiras <br><br>";
    }
    echo"$nota";


    if($p10 == "b"){
        echo "correto <br><br>";
        $nota = $nota + 1;
    }else{
        echo "Errado! A resposta era a alternativa B) AB2010C15D <br><br>";
    }
    echo"$nota";

    $sql->query("insert into tbl_prova(id, nome, data, nota) 
	values(null, '$nome','$hoje','$nota')");
?>