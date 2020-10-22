<?PHP
# Conexão com o banco de dados
$conexao = mysqli_connect('sl-us-south-1-portal.54.dblayer.com:24179','admin','QIFKWOYBCZWUWHHE','ipvdb') or die("Erro de conexão");
$banco = mysqli_select_db($conexao,'ipvdb') or die("Erro ao selecionar o banco de dados");
?>
