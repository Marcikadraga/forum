<?php

if(isset($_POST["submit"])){

    //Grabbing the data
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    
    //Instantiate LoginContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login=new LoginContr($email, $pwd);

    //Running error handlers and user signup
    $login->loginUser();


    //going to back to front page
    // header("location: ../pages/index.php");
}