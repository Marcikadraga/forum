<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">

    
</head>
<body>
<div>
<?php



  if(isset($_SESSION['uid'])){
    ?>
    <div class="header">
        Hello <?php echo $_SESSION['uid'];?> !<img style="width:100px;height: 100px;" src="../imgs/portraits/<?php echo session('img') ?>" alt="">
        <a href='?page=logout'><button >Logout</button></a>
    </div>
<?php
    }else{
         echo "<div class='header'>
         <a href='index.php?page=signup'><button >Signup</button></a>
         <a href='index.php?page=login'><button >Login</button></a>
         </div>";
    }



