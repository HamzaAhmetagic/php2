<?php
    // $user_name = $_GET["name"];
    $user_name = $_POST["name"];
    // echo $user_name;
    if($user_name == "Hamza"){
        echo "<h1>Welcome $user_name</h1>";
    }  else{
        echo "<h1>Welcome guest</h1>";
    }
?>