<?php 
if(isset($_GET["submit"])){

function lotto(){
$lottozahlen = array();
$i = 0;
while($i < 6){
    $zufallswert = mt_rand(1, 7); 
    if(in_array($zufallswert, $lottozahlen)){
        continue;
    }
    else{
        array_push($lottozahlen, $zufallswert);
        $i++;
    }
}

$counter = 1;
foreach($lottozahlen as $val){
    echo "Zahl " . $counter . ":    " . $val . "<br>";
    $counter += 1;
}

}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
        echo lotto(); 
}
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3.13.php" method="get">
    <label>Lotto</label>
    <input type="submit" name="submit">
    </form>
</body>
</html>