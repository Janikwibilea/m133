<?php

$line = '';
$file = 'geheimnis.txt';
if($i = fopen($file, 'r')){
  $line = fgets($i);
  fclose($i);
}

$passwort = $line;
$hash = password_hash($passwort, PASSWORD_DEFAULT);
$gespeicherter_hash = '$2y$10$VFS61IAcoKnGk3nzD0j5I.2O/or5lLcH/tuTjBINIsNHFvoFqbRYq';


if(password_verify($passwort, $gespeicherter_hash) )
{
 echo 'Datei ok!';
}
else
{
 echo 'Datei wurde verändert!';
} 


?>