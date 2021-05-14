<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shorkut icon" href="rating.svg">
	<title>Pagina de login</title>
	
	<!-- Style-->
	<link rel="stylesheet" href="css/index/index.css">
	<link rel="stylesheet" href="css/index/scroll.css">

	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
	<div class="container">	

		<?php
			session_start();
			ob_start();
			//Verifica se botao cadastrar foi selecionado
			$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
			if($btnCadUsuario){
				include_once 'php/conexao.php';
				$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
				
				$erro = false;
				
				$dados_st = array_map('strip_tags', $dados_rc);
				$dados = array_map('trim', $dados_st);
				
				if(in_array('',$dados)){
					$erro = true;
					$_SESSION['msg'] = "Necessário preencher todos os campos";
				}elseif((strlen($dados['senha'])) < 6){
					$erro = true;
					$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";

				}elseif(stristr($dados['senha'], "&")) {
					$erro = true;
					$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";
				}else{
					$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
					$resultado_usuario = mysqli_query($sql, $result_usuario);
					if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
						$erro = true;
						$_SESSION['msg'] = "Este usuário já está sendo utilizado";
					}
					
					$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
					$resultado_usuario = mysqli_query($sql, $result_usuario);
					if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
						$erro = true;
						$_SESSION['msg'] = "Este e-mail já está cadastrado";
					}
				}
				
				
				//var_dump($dados);
				if(!$erro){
					//O código a baixo criptografa a senha 
					$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
					
					$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
									'" .$dados['nome']. "',
									'" .$dados['email']. "',
									'" .$dados['usuario']. "',
									'" .$dados['senha']. "'
									)";
					$resultado_usario = mysqli_query($sql, $result_usuario);
					if(mysqli_insert_id($sql)){
						$_SESSION['msg'] = "Usuário cadastrado com sucesso";
						// header("Location: index.php"); 
					}else{
						$_SESSION['msg'] = "Erro ao cadastrar o usuário";
					}
				}
				
			}
		?>

		<div class="forms-container">
			<div class="signin-signup">

				<!-- FORMULÁRIO LOGIN -->
				<form type="text" action="php/valida.php" method="post" class="sign-in-form">

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

					<h2 class="title">Login</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input name="usuario" type="text" placeholder="Usuário" />
					</div>

					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input name="senha" type="text" placeholder="Senha" />
					</div>

					<input name="acessar" type="submit" value="Login" class="btn solid" />

					<p class="social-text">Nos siga nas redes socias</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>
				
				<!-- FORMULÁRIO CADASTRO -->
				<form method="POST" action="" class="sign-up-form">
					<h2 class="title">Cadastro</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input name="nome" type="text" placeholder="Nome" />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input name="email" type="text" placeholder="Email" />
					</div>
					<div class="input-field">
						<i class="fas fa-user-circle"></i>
						<input name="usuario" type="text" placeholder="Usuário" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input name="senha" type="password" placeholder="Senha" />
					</div>

					<input name="btnCadUsuario" type="submit" class="btn" value="Cadastrar" />

					<p class="social-text">Nos siga nas redes socias</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>

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
					<button class="btn transparent" id="sign-up-btn">Cadastrar</button>
				</div>
				<img src="img/log.svg" class="image" alt="" />

			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>Já é Cadastrado?</h3>
					<p>
						O Login veio para facilitar nossas vidas! <br>
						Pare de preencher estes campos e venha logar... <br>
						Mas claro, se já for um de nós!
					</p>
					<button class="btn transparent" id="sign-in-btn">Entrar</button>
				</div>
				<img src="img/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
	<script src="js/scroll_strigger.js"></script>

	<script src="js/carousel.js"></script>
    <script src="js/slide.js"></script>
    <script src="js/btn_alert.js"></script>
</body>
</html>