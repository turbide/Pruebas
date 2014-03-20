<html>
<head>
<meta charset="utf-8">
<style type="text/css">
	table{
		border: solid black 1px;
	}
	td{
		border: solid black 1px;
	}
	tr:nth-child(2n){
		background: #cccccc;
	}
	th{
		border: solid black 1px;
		background: #888888;
	}
</style>
<title>Carrito de compras</title>
</head>
<body>
<table>
	<tr>
		<th>Id Producto</th>
		<th>Nombre en latín</th>
		<th>Nombre genérico</th>
		<th>Auxiliar en el tratamiento de</th>
		<th>Presentación</th>
		<th>Potencia</th>
		<th>Seleccionar</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Apis Mellifica</td>
		<td>Abeja mielera</td>
		<td>Hinchazón aguda;<br />
Retención de líquidos;<br />
Piquetes de abeja</td>
		<td><select><option>Tintura</option>
<option>Globulos</option>
<option>Dilusión</option>
</select></td>
		<td><select><option>Ø</option>
<option>6°</option>
<option>30°</option>
<option>200°</option>
<option>Mc</option>
</select></td>
		<td><center><input type="checkbox" class="checkBox"></input></center></td>
	</tr>

	<tr>
		<td>12</td>
		<td>Apis Mellifica</td>
		<td>Abeja mielera</td>
		<td>Hinchazón aguda;<br />
Retención de líquidos;<br />
Piquetes de abeja</td>
		<td><select><option>Tintura</option>
<option>Globulos</option>
<option>Dilusión</option>
</select></td>
		<td><select><option>Ø</option>
<option>6°</option>
<option>30°</option>
<option>200°</option>
<option>Mc</option>
</select></td>
		<td><center><input type="checkbox" class="checkBox"></input></center></td>
	</tr>
	<tr>
		<td>29</td>
		<td>Apis Mellifica</td>
		<td>Abeja mielera</td>
		<td>Hinchazón aguda;<br />
Retención de líquidos;<br />
Piquetes de abeja</td>
		<td><select><option>Tintura</option>
<option>Globulos</option>
<option>Dilusión</option>
</select></td>
		<td><select><option>Ø</option>
<option>6°</option>
<option>30°</option>
<option>200°</option>
<option>Mc</option>
</select></td>
		<td><center><input type="checkbox" class="checkBox"></input></center></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Apis Mellifica</td>
		<td>Abeja mielera</td>
		<td>Hinchazón aguda;<br />
Retención de líquidos;<br />
Piquetes de abeja</td>
		<td><select><option>Tintura</option>
<option>Globulos</option>
<option>Dilusión</option>
</select></td>
		<td><select><option>Ø</option>
<option>6°</option>
<option>30°</option>
<option>200°</option>
<option>Mc</option>
</select></td>
		<td><center><input type="checkbox" class="checkBox"></input></center></td>
	</tr>
	<tr>
		<td>9</td>
		<td>Apis Mellifica</td>
		<td>Abeja mielera</td>
		<td>Hinchazón aguda;<br />
Retención de líquidos;<br />
Piquetes de abeja</td>
		<td><select><option>Tintura</option>
<option>Globulos</option>
<option>Dilusión</option>
</select></td>
		<td><select>
			
</select></td>
<button id="agregar">Agregar</button>
		<td><center><input type="checkbox" class="checkBox"></input></center></td>
	</tr>
</table>
<script type="text/javascript">
	agregar.addEventListener("click",function(e){
		var cantCheck=document.getElementsByClassName("checkBox").length;
		for(var i=0;i<cantCheck;i++)
			if(document.getElementsByClassName("checkBox")[i].checked){
				var elem = document.getElementsByClassName("checkBox")[i].parentNode.parentNode.parentNode;
				console.log(elem.children[0].innerHTML+":"+elem.children[4].children[0].value+":"+elem.children[5].children[0].value);
			}
	},false);
</script>
</body>
</html>