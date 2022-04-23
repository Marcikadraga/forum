<?php
require_once "../helpers.php";
include "../includes/header.php";
include "../includes/footer.php";
include "../classes/dbh.classes.php";

if (isset($_GET['page'])) {
    $page=$_GET["page"];

    switch ($page) {
        case "signup":
            include "signup.php";
            break;
    
        case "login":
            include "login.php";
            break;
    
        case "logout":
            include "logout.php";
            break;
                
        case "home":
            include "home.php";
            break;
                
        case "admin":
            include "admin.php";
            break;

        default:
            include "errorpage.php";
            break;
        }
}













    
