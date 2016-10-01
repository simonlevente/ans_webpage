<?php

function getcontent($root)
{
	$datafile = fopen($root."despre.txt", "r") or die("Unable to open file!");	
	$data["despre"] = "";
	while(!feof($datafile)) {
	  $data["despre"] .= fgets($datafile);
	}
	fclose($datafile);

	$datafile = fopen($root."directii.txt", "r") or die("Unable to open file!");	
	$data["directii"] = "";
	while(!feof($datafile)) {
	  $data["directii"] .= fgets($datafile);
	}
	fclose($datafile);

	$datafile = fopen($root."arhiva.txt", "r") or die("Unable to open file!");	
	$data["arhiva"] = "";
	while(!feof($datafile)) {
	  $data["arhiva"] .= fgets($datafile);
	}
	fclose($datafile);

	$datafile = fopen($root."seminari.txt", "r") or die("Unable to open file!");	
	$data["seminari"] = "";
	while(!feof($datafile)) {
	  $data["seminari"] .= fgets($datafile);
	}
	fclose($datafile);

	return $data;
}
?>