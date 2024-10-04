<?php
// membuat variabel JSON ({} = di dalamnya merupakan string)
$json_data = '{"name":"Nisa","age":20}'; // variabel $json_data berisi string dalam format JSON

// mengonversi JSON menjadi Objek PHP
$obj = json_decode($json_data); // json_decode() digunakan untuk mengonversi string JSON $json_data menjadi objek PHP

// mengakses nilai dari Objek PHP
echo "Name: " . $obj->name . "<br>"; // nilai dari objek PHP diakses menggunakan tanda -> untuk mengambil properti name dan age
echo "Age: " . $obj->age . "<br>"; // <br> digunakan untuk memisahkan baris pada tampilan HTML

// mengonversi JSON menjadi Array PHP (variabel $array sekarang menjadi array dengan kunci 'name' dan 'age')
$array = json_decode($json_data, true); // json_decode() argumen ke2 (true) utk mengonversi string JSON menjadi array asosiatif PHP, bukan objek

// mengakses nilai dari Array PHP
echo "Name: " . $array['name'] . "<br>"; // nilai dlm array PHP diakses menggunakan tanda [] dgn kunci yang sesuai yaitu 'name' dan 'age'
echo "Age: " . $array['age'] . "<br>";
?>