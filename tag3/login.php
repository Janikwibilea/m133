<?php 

session_start();
if(!isset($_POST['UserID']) OR empty($_POST['UserID'])){
    $UserID = 'Guest';
}else{
    $UserID = $_POST['UserID'];
}

$_SESSION['UserID'] = $UserID;

echo 'Hallo ' . $UserID . '<br>';

echo '<a href="logout.php">Logout</a> <br>';

?>