<?php 


var_dump($_POST); 



if (
	array_key_exists('titre', $_POST) && empty('titre')== false && 
	array_key_exists('description', $_POST) && empty('description')== false &&
	array_key_exists('jour', $_POST) && empty('jour')== false &&
	array_key_exists('mois', $_POST) && empty('mois')== false &&
	array_key_exists('annee', $_POST) && empty('annee')== false &&
	array_key_exists('priorite', $_POST) && empty('priorite')== false)

{
	$list = $_POST;

}
	

$file = fopen("data.csv","a");
fputcsv($file, $list);

fclose($file);



header("Location: index.php?status=OK");


?>