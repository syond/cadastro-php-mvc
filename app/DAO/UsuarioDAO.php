<?php 
	require "../models/Usuario.php";

	/**
	* Classe DAO de usuário
	*/
	class UsuarioDAO extends DAO
    {
        public $con;

        function __construct()
        {
            $this->con->getInstance();
        }

        function cadastrar()
        {
            $sql = "INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)";

            $usuario = new Usuario();

            $stmt = $this->con->prepare($sql);

            $stmt->bindParam(':nome', $usuario->getNome());
            $stmt->bindParam(':email', $usuario->getEmail());
            $stmt->bindParam(':senha', $usuario->getSenha());

            $stmt->execute();
        }
	}