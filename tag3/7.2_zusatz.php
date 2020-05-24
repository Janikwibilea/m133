<?php 
/*
$passwort = "admin123";
$hash = password_hash($passwort, PASSWORD_DEFAULT);

$file = fopen("hashes.txt", "r");
$gespeicherter_hash = fgets($file);
fclose($file);

if(password_verify($passwort, $gespeicherter_hash)){
    echo "richtiger hash";
}else{
    echo "falscher hash";
}
*/

$file = fopen("new_hashes.txt", "r");
$dict = array();

while(! feof($file)){
    $zeile = fgets($file);
    $split = explode(";", $zeile);
    $hash_file = $split[1];
    $user = $split[0];

    $dict[$user] = $hash_file;
}

$password = "Admin";




?>