<html>
	<head>
		<title>Delta Sports</title>
		<link rel="stylesheet" type="text/css" href="../layout/estilo_menu.css"/>
</head>
<body>
	<div id="rodape2"></div>
	<div id="rodape">
		<table>
			<tr class="nav">
				<td>
					<a href="../usuarios/listar_usuario.php">Usu&aacute;rios</a>
				</td>	
			</tr>
			<tr class="nav">
				<td>
					<a href="../Produtos/listar_produto.php">Produtos</a>
				</td>
			</tr>
			<tr class="nav">
				<td>
					<a href="../categorias/listar_categoria.php">Categorias</a>
				</td>
		</table>

		<form name="frmBusca" method="post" action="../usuarios/index.php" >
			<input type="text" name="nome" id="texto" placeholder="Buscar"/>
			<input type="hidden" name="acao" value="buscar" >
		    <input type="submit"  value="Buscar" id="btnBusca" name="buscar"/>
		</form>

			<b><a id="sair" href='../logout'>Sair</a></b>
		</div>	
</body>
</html>