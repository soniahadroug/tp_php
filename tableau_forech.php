
<?php
$donneesPerso = $arrayName = array("name" => "sonia" ,"prenom" => "hadroug", "age" => "38"   );
?>
<!doctype html>
<html>
<head>
				<meta charset="utf-8">
</head>
<body>
<table border="2" >
	<tr>
		<th>Title</th>
		<th> Info </th>
	</tr>
	<?php foreach ($donneesPerso as $key => $value) {
	
		?>	
		<tr>
			
			<td> <?= $key ?></td>
			<td> <?= $value ?></td>
		</tr>
	
	<?php } ?>

</table>
</body>
</html>
