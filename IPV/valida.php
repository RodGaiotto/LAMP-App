<?PHP
include('config1.php');
include('menu.php');
# Validar os dados do usuário

function anti_sql_injection($string)
        {
                include('config1.php');
                $string = stripslashes($string);
                $string = strip_tags($string);
                $string = mysqli_real_escape_string($conexao,$string);
                return $string;
        }

if ($conexao->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}


$sql = mysqli_query($conexao,"select * from auth where email='".anti_sql_injection($_POST['email'])."' and pass=md5('".anti_sql_injection($_POST['pass'])."') limit 1") or die("Erro");
//$sql = mysqli_query($conexao,"select * from auth where email='".$_POST['email']."' and pass='".$_POST['pass']."' limit 1") or die("Erro");

$linhas = mysqli_num_rows($sql);
if($linhas == '')
        {
                ?>
        <div class="msg2 padding20">Invalid email or password</div>
        <?PHP
        }
else
        {
                while($dados=mysqli_fetch_assoc($sql))
                        {
                                session_start();
                                $_SESSION['nome_usu_sessao'] = $dados['name'];
                                header("Location: adm.php");
                        }
        }
?>
