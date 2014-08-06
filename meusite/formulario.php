<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
</head>
<body>
<div id="interface">
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="#">Fotos</a></li>
				<li><a href="#">Sobre Nós</a></li>
				<li><a href="formulario.php">Cadastre-se</a></li>
			</ul>
		</nav>
	</header>

	<article>
		<section>
			<h2>CADASTRE-SE E FAÇA PARTE DO NOSSO GRUPO!</h2>
			<form name="form1" method="post" action="conexao.php">
				<label>Nome: 
					<input id="nome" type="text" name="nome" size="40">
				</label><br/>
				<label>Sobrenome: 
					<input id="sobrenome" type="text" name="sobrenome" size="60">
				</label><br/>
				<label>Usuario: 
					<input id="usuario" type="text" name="usuario">
				</label><br/>
				<label>E-mail: 
					<input id="email" type="text" name="email" size="40">
				</label><br/>
				<label>Senha: 
					<input id="senha" type="password" name="senha">
				</label><br/>
				<label>Idade: 
					<input id="idade" type="text" name="idade" size="5" maxlength="3">
				</label><br/>
				<label>Sexo:
					<select id="sexo">
						<option></option>
						<option>Masc</option>
						<option>Fem</option>
					</select>
				</label><br/>
				<label>Rua:
					<input id="rua" type="text" name="rua">
				</label>
				<label id="numero" >Nº:
					<input id="numero" type="text" name="numero" size="6">
				</label><br/>
				<label>Bairro: 
					<input id="bairro" type="text" name="bairro">
				</label><br/>
				<label>Cidade: 
					<input id="cidade" type="text" name="cidade">
				</label><br/>
				<label>Estado: 
					<select id="estado">
						<option></option>
						<option>MG</option>
						<option>SP</option>
						<option>BH</option>
						<option>DF</option>
						<option>AM</option>
					</select>
				</label><br/>
				<h3>Cursos que deseja fazer:</h3>
				<label class="curso">
					<input type="checkbox" name="web"> Web Design
				</label>
				<label class="curso">
					<input type="checkbox" name="ingles"> Inglês
				</label>
				<label class="curso">
					<input type="checkbox" name="games"> Desenvolvimento de Games
				</label><br/>
				<label class="curso">
					<input type="checkbox" name="adm"> Administração
				</label>
				<label class="curso">
					<input type="checkbox" name="musica"> Música
				</label class="curso">
				<label>
					<input type="checkbox" name="mecatronica"> Mecatrônica
				</label><br/>
				<input id="botao" type="submit" value="Cadastrar">
			</form>
		</section>
		<section id="cont">
			<h2>OBRIGADO PELA PREFERÊNCIA!</h2>
		</section>
	</article>

	<footer>
		
	</footer>

</div>
</body>
</html>