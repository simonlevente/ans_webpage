<?php

function getdata($root,$user)
{
	$datafile = fopen($root.$user.".txt", "r") or die("Unable to open file!");
	$data["name"] = fgets($datafile);
	$data["info"] = fgets($datafile);
	$data["website"] = fgets($datafile);
	$data["getfile"] = intval(fgets($datafile));
	fclose($datafile);

	$data["pub"] = "";
	$pubfile = fopen($root.$user."_pub.txt", "r") or die("Unable to open file!");
	//$pubfile = fopen($root.$user."_pub.txt", "r") or die("Unable to open file!");
	while(!feof($pubfile)) {
	  $data["pub"] .= fgets($pubfile);
	}
	fclose($pubfile);

	return $data;

}


?>