<?php

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/controllers/validate_user.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$table       = "users";
$admin_users = selectAllInTable($table, ["admin"]) ;

$errors           = array();
$user_name        = "";
$id               = "";
$email            = "";
$password         = "";
$password_confirm = "";
$admin            = "";



function loginUser($user)
{
    $_SESSION["id"]        = $user["id"];
    $_SESSION["user_name"] = $user["user_name"];
    $_SESSION["admin"]     = $user["admin"];
    $_SESSION["message"]   = "You are now successfully logged in";

    if ($_SESSION["admin"]) {
        header("location: " . BASE_URL . "app/admin/dashboard.php"); // If the user is an admin > in the dashboard
    } else {
        header("location: " . BASE_URL . "index.php"); // Else > in the index of the blog
    }
    exit(); //close
}

if (htmlspecialchars(isset($_POST["registerBtn"]), ENT_HTML401, "UTF-8") || htmlspecialchars(isset($_POST["create-admin"]), ENT_HTML401, "UTF-8")) {
    $errors = validateUser($_POST);
    // displayContent($_POST);

    if (count($errors) === 0) {
        unset($_POST["registerBtn"], $_POST["password_confirm"], $_POST["create-admin"]); // unset the register btn when the user is logged
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);  // hash the password in the database
        
        if (isset($_POST["admin"])) { // If the user in an administrator, it will be redirect in the dashboard
            $_POST   ["admin"]   = 1;
            $user_id   = createTable($table, $_POST);
            $_SESSION["message"] = "Admin user has been created successfully";
            header("location: " . BASE_URL . "app/admin/users/users.php");
            exit();
        } else { // Else in the blog
            $_POST["admin"] = 0;
            $user_id = createTable($table, $_POST);
            $user    = selectOneInTable($table, ["id" => $user_id]);
            // log user with session
            loginUser($user);
        }
    } else { // Else return all the default user cred
        $user_name        = $_POST["user_name"];
        $admin            = isset($_POST["admin"]) ? 1 : 0;
        $email            = $_POST["email"];
        $password         = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
    }
}

if (htmlspecialchars(isset($_GET["id"]), ENT_HTML401, "UTF-8")) {
    $user = selectOneInTable($table, ["id" => $_GET["id"]]);

    $id        = $user["id"];
    $user_name = $user["user_name"];
    $admin     = $user["admin"];
    $email     = $user["email"];
}

if (htmlspecialchars(isset($_POST["update-user"]), ENT_HTML401, "UTF-8")) { // Update the user in the dashboard section
    $errors = validateUser($_POST);
    // displayContent($_POST);

    if (count($errors) === 0) {
        $id = $_POST["id"];

        unset($_POST["update-user"], $_POST["password_confirm"], $_POST["id"]);
        $_POST   ["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT); // New password
        $_POST   ["admin"]    = isset($_POST["admin"]) ? 1 : 0; // Checkbox if the user is admin or not
        $count      = updateTable($table, $id, $_POST); // Update in the database
        $_SESSION["message"]  = "Admin user has been updated successfully"; // Display the alert
        header("location: " . BASE_URL . "app/admin/users/users.php"); // Redirection
        exit();
    } else { // Else return all the default user cred
        $user_name        = $_POST["user_name"];
        $admin            = isset($_POST["admin"]) ? 1 : 0;
        $email            = $_POST["email"];
        $password         = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
    }
}

if (htmlspecialchars(isset($_POST["loginBtn"]), ENT_HTML401, "UTF-8")) {
    // displayContent($_POST);
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOneInTable($table, ["user_name" => $_POST["user_name"]]);

        if ($user && password_verify($_POST["password"], $user["password"])) { // Check if the user exist in the database
            // login handler - redirect
            loginUser($user);
        } else {
            array_push($errors, "Wrong password"); // Display the error message
        }
    }

    $user_name = $_POST["user_name"]; // Else > Keep the user login and password in the input
    $password  = $_POST["password"]; // Else > Keep the user login and password in the input
}

if (htmlspecialchars(isset($_GET["delete_id"]), ENT_HTML401, "UTF-8")) {
    $count     = deleteTable($table, $_GET["delete_id"]);  // Delete the id of the user in the database
    $_SESSION["message"] = "The user has been deleted successfully"; // Display the alert
    header("location: " . BASE_URL . "app/admin/users/users.php"); // Redirect
    exit();
}