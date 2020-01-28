<?php 
    /**
     * function userOnly
     * @param Int $redirect
     * @return void
     */
    function userOnly($redirect = "index.php")
    {
        if (empty($_SESSION["id"])) {
            $_SESSION["message"] = "You need to be loggged to see the page";
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

    /**
     * function adminOnly
     * @param String $redirect
     * @return void
     */
    function adminOnly($redirect = "index.php")
    {
        if (empty($_SESSION["id"]) || empty($_SESSION["admin"]) ) {
            $_SESSION["message"] = "You are not authorized please contact an administrator";
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

    /**
     * function guestOnly
     * @param String $redirect
     * @return void
     */
    function guestOnly($redirect = "index.php")
    {
        if (isset($_SESSION["id"])) {
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

?>