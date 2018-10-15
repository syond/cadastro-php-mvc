<?php 
	require "../src/Usuario.php";
	require "DAO.php";

	$con = new DAO();
	$con->getInstance();

	$usuario = new Usuario();

	function cadastrar(){
		$sql = "INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)";

		$stmt = $con->prepare($sql);
		$stmt->bindParam(':nome', $usuario->getNome());
		$stmt->bindParam(':email', $usuario->getEmail());
		$stmt->bindParam(':senha', $usuario->getSenha());

		$stmt->execute();
	}
 ?>