

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
	<?php 
	$chaine = 'Bonjour Sonia, Bienvenue a la formation php ';
	
	var_dump($chaine);

	$tab=count_chars($chaine,1);

	?>
	<br>
<table border="2" >
	<tr>
		<th>Caractère</th>
		<th> Nombre d'occurences </th>
	</tr>

	<?php foreach ($tab as $key => $value) {
	
	 ?>	
	 <tr>
	 	
	 	<td> <?= chr($key)?></td>
	 	<td> <?= $value ?></td>
	 </tr>
	
	<?php } ?>

</table>
</body>
</html>
