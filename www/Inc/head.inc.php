<?php
session_start();
//$currentTimeout = ini_get('session.gc_maxlifetime');


//ini_set('session.gc_maxlifetime', 2678400);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8007423901561970"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="../media/logo.ico">
    <meta name="viewport"
        content="initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    <script src="https://kit.fontawesome.com/2ce93a0a32.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../TurboDesigners/js/app.js?v=1"></script>
    <script src="./js/main.js?t=50" defer></script>
    <script>
function IsLogged() {
    $(".sys li:nth-child(2) a").html('Log Out');
    $(".sys li:nth-child(2) a").attr("href", "../logout/")
    $(".sys li:nth-child(1) a").attr("href", "../UserProfile/")
    $(".this2").attr("href", "../UserProfile/")
    $(".this").attr("href", "../logout/");
}

function NoLogged() {
    $(".this2").attr("href", "../Register/")
    $(".sys li:nth-child(2) a").html('Login');
    $(".sys li:nth-child(2) a").attr("href", "../Login/");
    $(".this").attr("href", "../Login/");
}
    $(window).on("load", function() {
        $('.loading').hide();
        $("body").css('overflow', 'auto');
    });
    </script>
    <style>

    @import url("https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    <?php 
    include("./css/style.css");
    include("../css/main.css");
    include("./css/main.css");
    include("../css/style.css");
    ?>
    </style>
<link rel="stylesheet" href="https://alowlaomar.de/TurboDesigners/css/main.css">
</head>

<body>
    <div class="loading D-F">
        <img src="">
    </div>
