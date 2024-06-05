<?php
$zip = 20766900;
$url = "https://viacep.com.br/ws/{$zip}/json/";
$address = json_decode(file_get_contents($url), true);
var_dump($address)

?>