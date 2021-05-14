<?php 
	include "../conexao.php";
	
	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$usuario = $_POST["usuario"];
	$email = $_POST["email"];

	$sql->query("update usuarios set nome='$nome', email='$email', usuario='$usuario' where id = $id ");

    header("Location: listar.user.php");
?>