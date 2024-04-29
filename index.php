<?php


require_once("controllers/loginController.php");

$loggedIn=null;

//in case post request
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["i1"]) && isset($_POST["i2"])){

    $host="localhost";
    $db="topskart";
    $user="root";
    $password="";
    
    $dbConn = new mysqli($host,$user, $password,$db);

    $email = $_POST["i1"];
    $password = $_POST["i2"];


    $result = $dbConn->query("SELECT count(*) as count FROM `users` WHERE email='$email' and password='$password'");

    $row = $result->fetch_assoc();
    $value = $row["count"];

    $loggedIn = $value==1;

   


}


render($loggedIn);

?>