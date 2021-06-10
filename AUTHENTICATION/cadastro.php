<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?PHP include('menu.php'); ?>
<h1>Cadastro</h1>
<br>
<script type="text/javascript">
function valida_campos()
	{
		if(document.getElementById('name').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('name').focus();
				return false;
			}
		if(document.getElementById('email').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('email').focus();
				return false;
			}
		if(document.getElementById('pass').value == '' || document.getElementById('pass').value != document.getElementById('pass2').value)
			{
				alert('Por favor, as senhas não conferem, por favor, redigite.');
				document.getElementById('pass').focus();
				return false;
			}
	}
</script>
<form action="cadastrar.php" method="post" onSubmit="return valida_campos();">
	* Nome<br>
    <input type="text" name="name" id="name">
	<br>
	* E-mail<br>
	<input type="text" name="email" id="email">
<br>
	* Senha<br>
	<input type="password" name="pass" id="pass">
<br>
	* Confirmar senha
    <br>
    <input type="password" name="pass2" id="pass2">
  <br>
  <br><input type="submit" value="Cadastrar" class="but_comando">
</form>
</body>
</html>
