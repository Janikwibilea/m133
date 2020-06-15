<?php

$line = '';
$file = 'geheimnis.txt';
if($i = fopen($file, 'r')){
  $line = fgets($i);
  fclose($i);
}

$passwort = $line;
$gespeicherter_hash = password_hash($passwort, PASSWORD_DEFAULT);


if(password_verify($passwort, $gespeicherter_hash) )
{
 echo 'Datei ok!';
}
else
{
 echo 'Datei wurde verändert!';
} 


?>