<!DOCTYPE html>
<html>
<head>
	<title> Seja Bem Vindo!!! </title>
	<style type="text/css"> body { background: #FF6984; }
	input[type=submit]{
	margin-left:6%;
	}
	</style>


</head>
<body>
  <h1><i> Efetue seu cadastro! </i></h1>
<form action="<?php echo $view['router']->path('home_page') ?>" method="post">
	<label><i> Nome: </i></label> 
	<input type="text" name="nome"> <br><br>
	<label><i> Senha: </i></label> 
	<input type="password" name="senha"> <br><br>
	<input type="submit" name="enviar"> 
</form>

</body>
</html>