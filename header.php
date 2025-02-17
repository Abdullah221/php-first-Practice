<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href='css/style.css'>
</head>
<body>
    <header>
        <div class="topNav">
            <?php
            include("nav.php");
            foreach($tNavLeft as $navItem){
                echo '<a href="'. $navItem['path'] .'"><i>' . $navItem['icon'] . '</i> <h3 class="navTopText">'. $navItem['text'] . '</h3></a>';
            }
            echo $tNavCenter;
            echo $tNavRight;
            ?>
        </div>
        <nav>
           <ul>
            <?php
            include('nav.php');
            foreach($navigation as $navitem){
                echo '<li><a href="' . $navitem['path'] . '" >' . $navitem['title'] . '</a></li>';
            } 
            ?>
            </ul>
        </nav>
    </header>
    <div class="container">
        <!-- Your main content here -->