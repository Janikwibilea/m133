<?php 
$name = "Janik";
$wohnort = "Andelfingen";
$haarfarbe = "braun";
$alter = "17";
?> 
<html> Guten Tag<br/>
 Mein Name ist <?php echo $name ?> und ich komme von <?php $wohnort?>.<br/>
  Meine Haare sind <?php echo $haarfarbe?>, ich bin <?php echo $alter?> Jahre alt.
</html>

<br>
<br>
<br>


  
<?php
$daten = [
'name' => 'Janik',
'wohnort' => 'Andelfingen',
'haarfarbe' => 'braun',
'alter' => '17',
];

echo "Guten Tag <br/>";
echo "Mein Name ist ", $daten["name"], " und ich komme von ", $daten["wohnort"], "<br/>";
echo "Meine Haare sind ", $daten["haarfarbe"], " ich bin ", $daten["alter"], " Jahre alt.";

?>