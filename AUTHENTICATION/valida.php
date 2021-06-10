<?PHP
include('config.php');
include('menu.php');
# Validar os dados do usuário

function anti_sql_injection($string)
	{
		include('config.php');
		$string = stripslashes($string);
		$string = strip_tags($string);
		$string = mysqli_real_escape_string($conexao,$string);
		return $string;
	}

$sql = mysqli_query($conexao,"select * from auth where email='".anti_sql_injection($_POST['email'])."' and pass=md5('".anti_sql_injection($_POST['pass'])."') limit 1") or die("Erro");
$linhas = mysqli_num_rows($sql);
if($linhas == '')
	{
		?>
        <div class="msg2 padding20">Usuário não encontrado ou usuário e senha inválidos.</div>
        <?PHP
	}
else
	{
		while($dados=mysqli_fetch_assoc($sql))
			{
				//session_start();
				$_SESSION['nome_usu_sessao'] = $dados['name'];
				header("Location: conteudo.php");
			}
	}
?>
