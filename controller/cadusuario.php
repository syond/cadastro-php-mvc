<?php 
require "../src/Usuario.php";

	if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])){
		$nome	= $_POST['nome'];
		$email	= $_POST['email'];
		$senha	= $_POST['senha'];
		$cript	= password_hash($senha, CRYPT_BLOWFISH, ['cost' => 12]);
	}

	try {
		$usuario = new Usuario();

		$usuario->setNome($nome);
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
	} catch (Exception $e) {
		echo "erro";
	}
 ?>