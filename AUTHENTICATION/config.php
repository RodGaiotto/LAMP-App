<?PHP
# Conexão com o banco de dados
$conexao = mysqli_connect('localhost','root','srsystem9823','test') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'test') or die("Erro ao selecionar o banco de dados");
?>
