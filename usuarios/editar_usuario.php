<?php
	include('../menu/index.tpl.php');
?>

<br><br><html>
	<head>
	<title>Delta Sports</title>
	<link rel="stylesheet" type="text/css" href="../layout/tab_usuario.css"/>
	<meta charset="ISO-8859-1"/>
	</head>
	<body>
		<form id="tab_incluir" method="post" action="index.php">
			Nome: <input class="n_incluir type="text" name="nome" value="<?php echo utf8_encode($array_usuario['nomeUsuario']); ?>"><br><br>
			E-mail: <input class="n_incluir type="email" name="email" value="<?php echo $array_usuario['loginUsuario']; ?>"><br><br>
			Senha: <input type="password" name="senha"><br><br>
			Perfil: <select name="perfil"> <?php
				if($array_usuario['tipoPerfil'] == 'A'){
					echo '<option value="A" selected>
							Administrador
							</option>
							<option value="C">
							Cliente
							</option>';
				}else{
					echo '<option value="A">
							Administrador
							</option>
							<option value="C" selected>
							Cliente
							</option>';
				}
				?>
					</select><br><br>
			Ativo: <?php
				if($array_usuario['usuarioAtivo'] == 1){
					echo '<input type="checkbox" name="ativo" checked>';
				}else{
					echo '<input type="checkbox" name="ativo">';
				}
				?>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<input type="hidden" name="acao" value="editar">
			<br><br>
			<input type="submit" value="Gravar" name="btnGravarUsuario" id="gravar">
		</form>
	</body>
</html>