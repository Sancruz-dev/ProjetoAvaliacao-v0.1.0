<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Clientes Cadastrados</title>

        <link rel="shorkut icon" href="../../rating.svg">
        <link rel="stylesheet" type="text/css" href="../../css/table/btnCadastro.css" />
        <link rel="stylesheet" type="text/css" href="../../css/table/tabela1.css" />
    </head>
    
<body>
    <?php
        include "../conexao.php";
        
        $query = mysqli_query($sql,"select * from usuarios");
    ?>

    <section id="sectionTable">
        <div class="table-box">
            <table border="1" cellpadding="10">
                <tr>
                    <th align="center">Id</th>
                    <th align="center">Nome</th>
                    <th align="center">Email</th>
                    <th align="center">Usuário</th>
                    <!--colspan = quantidade de colunas -->
                </tr>
                
                <?php
                    while($row = mysqli_fetch_array($query)){
                        /**o nome da variavel row, tem que estar igual ao nome do atributo da tabela*/
                        $id = $row ['id'];
                        $nome = $row ['nome'];
                        $email = $row ['email'];
                        $usuario = $row ['usuario'];
                        
                        echo"
                        <tr>
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$email</td>
                        <td>$usuario</td>
                        <td class='edit'><a href=\"edit.user.php?id=$id\"><img src='../../img/edit.svg'></a></td>
                        <td class='del'><a href=\"exlcui.user.php?id=$id\"><img src='../../img/remove.svg'></a></td>
                        </tr>";   
                    }    
                ?>
            </table>
        </div>
        
        <div id="headerBtn">
            <div id="container">
                <a href="../../index.php">
                    <span>Inscrever-se</span>
                    <span>Inscrever-se</span>
                </a>
                <a href="../../inicio.php">
                    <span>Voltar</span>
                    <span>Voltar</span>
                </a>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1612906325">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
</body>
</html>