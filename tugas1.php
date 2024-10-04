<?php
// membuat array (berisikan aray $fruits dengan 3 elemen yaitu buahnya)
$fruits = array('apel', 'pisang', 'nanas');

// mengonversi array mjd JSON 
$json_fruits = json_encode($fruits); //json_encode untuk mengonversi array mjd format JSON

// menampilkan hasil JSON
echo $json_fruits;
?>