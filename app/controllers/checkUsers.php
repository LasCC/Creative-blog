<?php 
    /**
     * function userOnly
     * @param int $redirect id of the user
     * @return void If there is no userId in the coockie redirection
     */
    function userOnly($redirect = "index.php")
    {
        if (empty($_SESSION["id"])) {
            $_SESSION["message"] = "You need to be logged to see the page";
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

    /**
     * function adminOnly
     * @param int $redirect ID od admin user
     * @return void If there is not adminId in the cookie redirection
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
     * @param int $redirect 
     * @return void if the id in the cookie does not exst in the database redirection
     */
    function guestOnly($redirect = "index.php")
    {
        if (isset($_SESSION["id"])) {
            header("location: " . BASE_URL . $redirect);
            exit();
        }
    }

?>