<?php

$file=fopen("data.csv","r");

$list= array();

while (!feof($file)){
		$task=fgetcsv($file);
		if ($task !== false)
		{
			array_push($list, $task);
		}
}
fclose($file);

var_dump($list);

$file=fopen("data.csv","w");

for ($i=0; $i <count($list) ; $i++) { 
	if(!in_array($i, $_POST["task_id"])){
		fputcsv($file, $list[$i]);
	}
}
fclose($file);

header ("Location: index.php"); 