<html>
<head>	
<title>sign up</title>	
</head>
<body>
<form name="form1" method="post" action="insert_prod.php">
<table border="0" align="center">
<tr>
<td><br></td>	
</tr>
<th	colspan="2" align="center">market</th>
<tr>
<td><br></td></tr>
<tr><td>Codigo producto: <font color="red"></font></td>
<td align="right"><input type="text" name="codprod" pattern="[0-9]+" title="Solo numeros"></td>
</tr>		
<tr>		
<td>nombre producto: <font color="red"></font></td>
<td align="right"><input type="text" name="nomprod"></td>
</tr>
<tr>		
<td>Cantidad: <font color="red"></font></td>
<td align="right"><input type="text" required name="cantprod" pattern="[0-9]+" title="Solo numeros"></td>
</tr>
<tr>
<td>Estado: <font color="red"></font></td>
<td align="right"><select required name="estprod" style="width:173px">
<option value="1"> </option>
<option value="0">desabilitado</option>
<option value="1">habilitado</option>
</select></td>
</tr>

<tr>
<td><br></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Registrar" align="center"></td>
</tr>
</table>
<hr>
</form>
</body>
</html>