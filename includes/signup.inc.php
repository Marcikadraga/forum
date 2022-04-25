<?php
if(isset($_POST["submit"])){

    //Grabbing the data
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdrepeat"];
    $email=$_POST["email"];
    $status="user";
    $points="0";
    $img=$_POST["img"];

    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup=new SignupContr($uid, $pwd, $pwdRepeat, $email, $status, $points, $img);

    //Running error handlers and user signup
    $signup->signupUser();

    //going to back to front page
    header("location: ../pages/index.php?page=logout");
    
}