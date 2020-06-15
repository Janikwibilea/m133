<?php 


if(!empty($_POST['username'])){
$username = $_POST['username'];

setcookie('username', $username, time() + 3600);
setcookie('besuchzeit', date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']), 0);

$username = $_COOKIE['username'];
$besuchzeit = $_COOKIE['besuchzeit'];

echo 'Hallo ' . $username . '<br>';
echo $besuchzeit;



}

?>