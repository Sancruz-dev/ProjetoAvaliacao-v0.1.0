<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shorkut icon" href="../../rating.svg">
	<title>ALTERAR Dados</title>
	
	<!-- Custom Style-->
	<link rel="stylesheet" href="../../css/index/index.css">
	<link rel="stylesheet" href="../../css/index/scroll.css">

	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	
	<!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
	<div class="container">	
		<?php 
			include "../conexao.php";
			$id = $_GET["id"];

			$query = mysqli_query($sql,"SELECT * FROM usuarios WHERE id = $id ");

			$row = mysqli_fetch_array($query);
		?>

		<?php
			session_start();
			ob_start();
			//Verifica se botao cadastrar foi selecionado
			$btnEdit = filter_input(INPUT_POST, 'btnEdit', FILTER_SANITIZE_STRING);
			if($btnEdit){
				include_once '../conexao.php';
				$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
				
				$erro = false;
				
				$dados_st = array_map('strip_tags', $dados_rc);
				$dados = array_map('trim', $dados_st);
				
				if(in_array('',$dados)){
					$erro = true;
					$_SESSION['msg'] = "Necessário preencher todos os campos";
				
				}else{
					$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
					$resultado_usuario = mysqli_query($sql, $result_usuario);
					if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
						$erro = true;
						$_SESSION['msg'] = "Este usuário já está sendo utilizado";
						
					}else{
						
						$id = $_POST["id"];
						$nome = $_POST["nome"];
						$email = $_POST["email"];
						$usuario = $_POST["usuario"];
						$email = $_POST["email"];

						$sql->query("update usuarios set nome='$nome', email='$email', usuario='$usuario' where id = $id ");

						header("Location: listar.user.php");
					}
					
					$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
					$resultado_usuario = mysqli_query($sql, $result_usuario);
					if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
						$erro = true;
						$_SESSION['msg'] = "Este e-mail já está cadastrado";
					}
				}
			}
		?>

		<div class="forms-container">
			<div class="signin-signup">
				<form type="text" action="" method="POST" class="sign-in-form">
				
					<!-- FORMULÁRIO LOGIN (FORM)-->
					<form id="form-envia" name="form-envia" action="salvar.user.php" method="POST" class="sign-in-form">

						<?php
							if(isset($_SESSION['msg'])){
								echo "
									<section id='sectionMsg'>
											<h2 class='reveal'><b>".$_SESSION['msg']."</b></h2>
									</section>
								";
								unset($_SESSION['msg']);
							}
						?>

						<h2 class="title">Alterar Dados</h2>
						<input type="hidden" name="id" id="id" value="<?php echo $row['id'];?>">
						<div class="input-field">
							<i class="fas fa-user"></i>
							<input name="nome" type="text" placeholder="Nome" value="<?php echo $row['nome'];?>">
						</div>
						<div class="input-field">
							<i class="fas fa-envelope"></i>
							<input name="email" type="text" placeholder="Email" value="<?php echo $row['email'];?>" >
						</div>
						<div class="input-field">
							<i class="fas fa-user-circle"></i>
							<input name="usuario" type="text" placeholder="Usuário" value="<?php echo $row['usuario'];?>">
						</div>

						<input name="btnEdit" type="submit" class="btn" value="validar" onclick="enviaForm();" />
					</form>
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Novo por aqui ?</h3>
					<p>
						Clique no botão 'CADASTRAR' abaixo, preencha todos os campos
						da área de cadastro e envie o cadastro. 
					</p>
					<p>
						Se nada der errado, você é direcionado à
						tela de login para entrar com seu nome de usuário, e com sua senha.
					</p>
					<a href="listar.user.php">
					<button class="btn transparent" id="sign-up-btn">Voltar</button>
					</a>
				</div>
				<img src="../../img/log.svg" class="image" alt="" />

			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
	<script src="../../js/scroll_strigger.js"></script>
</body>
</html>