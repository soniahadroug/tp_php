<?php 
function somme(){
$s = 0;
$nb = func_num_args();
for($i=0; $i<$nb ; $i++)
{
	
$s = $s + func_get_arg($i);// on peut aussi l'ecrire de cette facon$s + =
}
echo $s;	
}
somme(1,2,3,4,5);
?>