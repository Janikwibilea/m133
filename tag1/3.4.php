<?php

function namensausgabe($name, $alter)
    {
        $satz = "Mein Name ist $name, ich bin $alter Jahre alt";
        return $satz;
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

<?php namensausgabe("Janik", "17") ?>
    
</body>
</html>