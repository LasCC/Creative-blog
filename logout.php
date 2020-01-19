<?php 
    include("path.php");
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["user_name"] );
    unset($_SESSION["admin"]);
    unset($_SESSION["message"]);
    session_destroy();

    header("location: " . BASE_URL . "index.php");
