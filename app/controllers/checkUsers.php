<?php
    
    /**
     * userOnly, redirect the user if the user is not allowed to see the page
     *
     * @param  string $redirect link of the page 
     *
     * @return void
     */
    function userOnly($redirect = "index.php")
    {
        if (empty($_SESSION["id"])) { // If there id not id in the session cookie > Alert with redirection
            $_SESSION["message"] = "You need to be logged to see the page";
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

    
    /**
     * adminOnly, redirect the user if they try to go to the dashboard administration
     *
     * @param  string $redirect link of the page 
     *
     * @return void
     */
    function adminOnly($redirect = "index.php")
    {
        if (empty($_SESSION["id"]) || empty($_SESSION["admin"])) { // If the user is not an admin and if there is no id in the session > Alert with redirection
            $_SESSION["message"] = "You are not authorized to see this page please contact an administrator.";
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }