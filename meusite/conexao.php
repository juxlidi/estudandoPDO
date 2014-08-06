<?php 
try{
	$conexao = new PDO('mysql:host=localhost;dbname=meusite','root','');
}catch(PDOException $e){
	echo $e->getMessage();
}

$nome = addslashes(trim($_POST['nome']));
$sobrenome = addslashes(trim($_POST['sobrenome']));
$usuario = addslashes(trim($_POST['usuario']));
$email = addslashes(trim($_POST['email']));
$senha = addslashes(trim($_POST['senha']));
$idade = addslashes(trim($_POST['idade']));
$rua = addslashes(trim($_POST['rua']));
$numero = addslashes(trim($_POST['numero']));
$bairro = addslashes(trim($_POST['bairro']));
$cidade = addslashes(trim($_POST['cidade']));

$inserir = $conexao->prepare("INSERT INTO usuarios (nome, sobrenome, usuario, email, senha, idade, rua, numero, bairro, cidade) VALUES (:nome, :sobrenome, :usuario, :email, :senha, :idade, :rua, :numero, :bairro, :cidade)");
$inserir->bindParam(':nome', $_POST['nome']);
$inserir->bindParam(':sobrenome', $_POST['sobrenome']);
$inserir->bindParam(':usuario', $_POST['usuario']);
$inserir->bindParam(':email', $_POST['email']);
$inserir->bindParam(':senha', $_POST['senha']);
$inserir->bindParam(':idade', $_POST['idade']);
$inserir->bindParam(':rua', $_POST['rua']);
$inserir->bindParam(':bairro', $_POST['bairro']);
$inserir->bindParam(':cidade', $_POST['cidade']);

$validar = $conexao->prepare("SELECT * FROM usuarios WHERE email=?");
$validar->execute(array($email));
if($validar->rowCount() == 0):
	$inserir->execute();
	echo "Cadastrado com sucesso!";
else:
	echo "Ja existe!";
endif;
?>