<!DOCTYPE html>
<html>
<head>
	<title> Página home </title>
	<style type="text/css"> body { background: #FF6984; }
	input[type=submit]{
	margin-left:6%;
	}
	</style>

</head>
<body>

<h1><i> Olá, Seja bem vindo(a) <?php echo $nome ?> </i></h1>

<form action="<?php echo $view['router']->path('dados_page') ?>" method="post">
	<input type="text" name="nome" value="<?php echo $nome ?>" hidden>
	<input type="text" name="senha" value="<?php echo $senha ?>" hidden>
	<input type="submit" value="Próximo">
</form>

</body>
</html>