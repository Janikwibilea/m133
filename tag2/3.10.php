<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["color"])) {
        $color = $_POST["color"];
    } else {

        echo "keine Farbe gewählt";
    }

}
?>
<style>
 body{
     background: <?= $color ?>;
 }

</style>
<body>
<form method="post" action="3.10.php">
    <label>Rot</label>
    <input type="radio" value="red" name="color">
    <br>
    <label>Gelb</label>
    <input type="radio" value="yellow" name="color">
    <br>
    <label>Grün</label>
    <input type="radio" value="green"name="color">
    <br>
    <label>Blau</label>
    <input type="radio" value="blue" name="color">
    <br>
    <label>Grau</label>
    <input type="radio" value="grey" name="color">
    <br>
    <input type="submit" value="Absenden">
    
    
    </form>

    
    
</body>
</html>