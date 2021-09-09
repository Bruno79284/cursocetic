<html>
<head>
<title>Formulário de pesquisa</title>
<META CHARSET="utf-8">
</head>


<body>
<form name="pesquisa" action="provaresp1.php" method="POST">
<table border="0" width=100%>
<tr>
<td width="5%">Nome:</td><td><input type=text name="txtnome" size=60 maxlength=50></td>
</tr>  
<tr>
<td width="5%">Endereço:</td><td><input type=text name="txtendereco" size=120 maxlength=100></td>
</tr>
<tr>
<td width="5%">Bairro:</td><td><input type=text name="txtbairro" size=60 maxlength=50></td>
</tr>
<tr>
<td width="5%">CEP:</td><td><input type=text name="txtcep" size=15 maxlength=11></td>
</tr>
<tr>
<td width="5%">Telefone:</td><td><input type=text name="txttelefone" size=20 maxlength=15></td>
</tr>
<tr>
<td width="5%">Email:</td><td><input type=text name="txtemail" size=100 maxlength=50></td>
</tr>
<tr>
<td width="5%">Aniversário:</td><td><input type=date name="txtaniversario" size=20 maxlength=15></td>
</tr>
</table>
<input type="submit" name="btnenviar" value="Enviar">
<input type="reset" name="btncancelar" value="Cancelar">
</form>
</body>
</html>