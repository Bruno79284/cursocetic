<html>
<head>
<title>Suas Respostas</title>
<meta charset="utf-8">
</head>

<body>
<?php
require 'provaconexao.php';

$nome = $_POST['txtnome'];
$endereco = $_POST['txtendereco'];
$bairro = $_POST['txtbairro'];
$cep = $_POST['txtcep'];
$telefone = $_POST['txttelefone'];
$email = $_POST['txtemail'];
$aniversario = $_POST['txtaniversario'];

Echo "Seu nome é: ".$nome."<br>";
Echo "Seu endereço é: ".$endereco."<br>";
Echo "Seu bairro é: ".$bairro."<br>";
Echo "Seu CEP é: ".$cep."<br>";
Echo "Seu telefone é: ".$telefone."<br>";
Echo "Seu e-mail é: ".$email."<br>";
Echo "Seu aniversário é: ".$aniversario."<p>";

$conexao = DBConnect();

$sql = "INSERT INTO tblclientes(idcliente, nomecliente, enderecocliente, bairrocliente, cepcliente, telefonecliente, emailcliente, aniversariocliente)
		values (0, '$nome', '$endereco', '$bairro', '$cep', '$telefone', '$email', '$aniversario')";
		
if (mysqli_query($conexao, $sql)) {
	echo "Cadastro  realizado com sucesso!";
} else {
	echo "Erro: ".mysqli_error($conexao);
}
?>
</body>
</html>	