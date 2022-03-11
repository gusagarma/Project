
<form action="cadastro.php" method = "get">
   Nome: <input type = "text" name = "nome">  
   <br>
   Nascimento : <input type = "date" name = "nasc">
   <br>
   CPF : <input type = "text" name = "cpf">

   <input type = "submit">
</form>
<br>
<?php include_once ("conexao.php");
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$nasc = $_GET['nasc'];



$result_usuario = "INSERT INTO usuario(nome, cpf, nasc, created) VALUES ('$nome', '$cpf','$nasc$, NOW())"; 
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>
