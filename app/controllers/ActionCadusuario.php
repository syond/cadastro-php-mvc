<?php
	/**
	* Classe controller de cadastro de usuários
	*/
	class ActionCadusuario
	{
	    public $usuario;

		function __construct()
		{
			$this->usuario = new Usuario();

			if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])){
			$nome	= $_POST['nome'];
			$email	= $_POST['email'];
			$senha	= $_POST['senha'];

			$cript	= password_hash($senha, CRYPT_BLOWFISH, ['cost' => 12]);
			}

			try {
			$this->usuario->setNome($nome);
			$this->usuario->setEmail($email);
			$this->usuario->setSenha($cript);

			$this->usuario->getEmail();
			$this->usuario->getNome();
			$this->usuario->getSenha();

			} catch (Exception $e) {
				echo "erro";
			}
		}

		function cadastrar()
		{
            $usuarioDAO = new UsuarioDAO();

            $usuarioDAO.cadastrar();
            $usuarioDAO.listar();
		}
		
	}