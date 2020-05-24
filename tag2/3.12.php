<?php 
if(isset($_GET["submit"])){


function umrechnung($zahl){
        $hex = dechex($zahl);
        $binary = decbin($zahl);
        $view = "Umrechung der Dezimalzahl $zahl: <br> ins Binärsystem: $binary <br> ins Hexadezimalsystem: $hex";
        return $view;
    } 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(is_numeric($_GET["zahl"])){
        $zahl = $_GET["zahl"];
        echo umrechnung($zahl); 
    }
    else{
        echo "Gib bitte eine Dezimalzahl ein";
    }
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
    <form action="3.12.php" method="get">
    <label>Dezimalzahl eingeben</label>
    <input type="text" name="zahl" >
    <input type="submit" name="submit">
    </form>
</body>
</html>