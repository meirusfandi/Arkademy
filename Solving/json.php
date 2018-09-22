<?php

$array	= Array(
	"name" => "mei rusfandi",
	"address" => "gadingrejo, pringsewu, Lampung",
	"hobies" => Array(
		"id" => "1",
		"set" => "Membaca"),
	"is_married" => "false",
	"school" => Array(
		"id" => "university"),
	"skills" => Array(
		"0" => Array(
			"id" => "1",
			"skill" => "java Programming"),
		"1" => Array(
			"id" => "2",
			"skill" => "C++ Programming"),
		"2" => Array(
			"id" => "3",
			"skill" => "PHP Programming")
			)
	);

$json = json_encode(array('data' => $array));

if (file_put_contents("data.json", $json)) {
	echo "File JSON sukses dibuat";
} else {
	echo "Terjadi kesalahan saat membuat file JSON";
}

?>