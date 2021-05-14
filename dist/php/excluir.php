<?php
include "conexao.php";

$id = $_GET["codigo"];

mysqli_query($sql,"delete from animal where codigo = $id");

header("Location:Listar.php");

?>