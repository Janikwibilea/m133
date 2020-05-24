<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {

error_reporting(0);

    $users = array(
        "user1" => "1234",
        "user2" => "1234",
        "user3" => "1234",
        "user4" => "1234",
        "user5" => "1234",
    );

    if (isset($_POST["name"])) {
        $password = $_POST["password"];
        $name = $_POST["name"];

        if($users[$name] == $password){
            echo "Dies ist die geheime Information!";
        }  
        else{
            echo "ungültige angaben";
        }

    } else {

        echo "Nicht alle Werte eingetragen";
    }
}?>