<html>
<head>
<title>Relatório de dados</title>
<META CHARSET="utf-8">
</head>

<body>
<table border=2 width=70% align=center>
<tr align=center>
<td width=25%> Nome </td> <td width=25%> Endereço </td> <td width=25%> Telefone </td> <td width=25%> Email </td> </tr>

<?php
require 'provaconexao.php';

$conexao = DBConnect();
$sql = "select nomecliente, enderecocliente, telefonecliente, emailcliente from tblclientes";

$result1 = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

while ($row = mysqli_fetch_assoc($result1)) {
	
echo "<tr align=center>";
echo "<td>".$row['nomecliente']."</td>";
echo "<td>".$row['enderecocliente']."</td>";
echo "<td>".$row['telefonecliente']."</td>";
echo "<td>".$row['emailcliente']."</td>";
echo "</tr>";
}
?>
</body>
</html>	 