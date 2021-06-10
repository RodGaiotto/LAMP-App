<?PHP include('menu.php'); ?>
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
include('config.php');

$name = ucwords($_POST['name']); # Coloca a primeira letra da string em maiúsculo
$email = $_POST['email'];
$pass = $_POST['pass'];

$in = mysqli_query($conexao,"insert into auth (name,email,pass,admin) values ('$name','$email',(md5('$pass')),'N')") or die("Erro");

?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>
