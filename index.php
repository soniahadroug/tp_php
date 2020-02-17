<?php
include 'test.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1> Formation PHP </h1>
<p> Bonjour <?php echo $administration.' '.$name ?> </p>
<?php 
$chaine='01/02/2020';
echo $chaine;
var_dump(explode('/', $chaine)); ?>
</body>
</html>
