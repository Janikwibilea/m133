<?php 

$file = fopen("fuer141.txt", "r");
/*
echo fgets($file);
fclose($file);
*/


/*
while(! feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file);
*/


$daten = array();
while(! feof($file)){
    $daten[] = fgets($file);
}
$datenumgekehrt = array_reverse($daten);
foreach($datenumgekehrt as $i){
    echo $i . "<br>";
}


?>