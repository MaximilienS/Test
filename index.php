

<?php 

$tache = [];




$file = fopen("data.csv","r");

while (!feof($file)){
		$task=fgetcsv($file);
		if ($task !== false)
		{
			array_push($tache, $task);
		}
}
fclose($file);

include"page.phtml" ?>

