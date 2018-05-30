 <?php
	$login = addslashes($_POST["txt_login"]);	
	$senha = addslashes($_POST["txt_Senha"]);

	$conn=false;
 $conn = mysql_connect("localhost", "root", "");
 
/*if (!$conn) {
    die("Não foi possível conectar: " . mysql_error());
}
echo "Conexão bem sucedida";
*/


$db=mysql_select_db("seguranca");
$sql = "SELECT * FROM usuarios WHERE nome = '".$login."' and senha = '".$senha."'";
$query = mysql_query(  sql );

if(mysql_num_rows( query)>0){
	echo "correto";
}else{
	echo "Nao existe"; 
}
//mysqli_close($conn);
?>