<?php 

// $myip = "127.0.0.1"; localhost


//IPv6 localhost = ::1
$myip = "::1";

$remoteaddr = $_SERVER["REMOTE_ADDR"];

if($myip == $remoteaddr){
    echo "„Sie waren heute bereits hier! Kommen Sie später wieder!“";
}else{
    echo "„<br>Guten Tag; hier der Seiten Inhalt: ...“ ";
}


?>



<?php foreach($_SERVER as $key => $value)
 {
 echo "<b>".$key.":</b> ".$value."\n"."<BR />";
 }
?> 
