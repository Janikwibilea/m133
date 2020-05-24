<?php 


if($_POST["text1"] != ""){
    $text1 = "Inhalt des ersten Feldes ist:" . $_POST['text1'] . "<br><br>";
}
else{
    $text1 = "nüt itippt <br>";
}
if($_POST["text2"] != ""){
    $text2 = "Inhalt des zweiten Feldes ist:" . $_POST['text2'];
}
else{
    $text2 = "nüt itippt <br>";
}



echo $text1;
echo $text2;

?>