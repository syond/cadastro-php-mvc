<?php /**
 * Cliente Model
 */

class Usuario
{
	private $nome;
	private $email;
	private $senha;

	function __construct()
	{
		
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setEmail($email){
		$this->email = $email;
	}

	function setSenha($senha){
		$this->senha = $senha;
	}

	function getNome(){
		return $this->nome;
	}

	function getEmail(){
		return $this->email;
	}

	function getSenha(){
		return $this->senha;
	}
} ?>