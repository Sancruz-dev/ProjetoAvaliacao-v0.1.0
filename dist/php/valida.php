<?php   
session_start();
include_once("conexao.php");
//Verifico se o botão acessar foi clicado
$acessar = filter_input(INPUT_POST,'acessar',FILTER_SANITIZE_STRING);
if($acessar){
	//armazena os dados digitados nas variáveis
	$usuario = filter_input(INPUT_POST,'usuario',FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
	
	//verifica se os campos usuario e senha foi prenchido
	if((!empty($usuario)) AND (!empty($senha))){
		
		//Pesquisar o usuario e a senha no banco 
		$result_usuario = "SELECT * FROM usuarios where usuario = '$usuario' LIMIT 1";
		
		$resultado_usuario = mysqli_query($sql,$result_usuario);
		
		//se foi encontrado algum dado igual
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			//discriptografa a senha para poder comparar se a senha do banco é igual a senha que está no input senha
			if(password_verify($senha,$row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				header("Location: ../inicio.php");				
			}else{
				$_SESSION['msg']="Login ou senha e incorretos!</text>";
				echo 'ERRO 3 Página não encontrada!'; 	
				header("Location: ../index.php");
			}			
		}
	}else{
		$_SESSION['msg']="Preencha os campos do usuário e senha para entrar!</text>";
		echo 'ERRO 3 Página não encontrada!'; 	
		header("Location: ../index.php");

	}
}else{
	$_SESSION['msg']="<texto>Página não encontrada!</text>";
	header("Location: ../index.php");
	echo 'ERRO 3 Página não encontrada!';
}

?>