<?php 
$title = "PHP Farben Test";


mt_srand((double)microtime()*1000000);
$zufallswert = mt_rand(0, 16777215);
$color = "#" . dechex($zufallswert); 

?>

<html>
<title><?php echo $title ?></title>
<style>
        body {
            background-color: <?= $color ?>
        }
    </style>

<body>

<h1>hello</h1>

</body>

</html>
