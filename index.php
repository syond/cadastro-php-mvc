<?php require "app/functions/functions.php"; getHeader();?>

<div class="container">
	<h1>Cadastro de Usuários</h1>
	<div class="row">
		<form method="POST" action="app/controllers/ActionCadusuario.php">
				<label>Nome:</label>
					<input type="text" name="nome">
				<label>Email:</label>
					<input type="text" name="email">
				<label>Senha:</label>
					<input type="password" name="senha">
			<input type="submit" value="Cadastrar">
		</form>
	</div>	
</div>

<?php getFooter(); ?>