<?php 

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/components/validate_user.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$table       = "users";
$admin_users = selectAllInTable($table, ["admin" => 1]);

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
        header("location: " . BASE_URL . "app/admin/dashboard.php");
    } else {
        header("location: " . BASE_URL . "index.php");
    }
    exit(); //close
}

if (isset($_POST["registerBtn"]) || isset($_POST["create-admin"])) {
    $errors = validateUser($_POST);
    // displayContent($_POST);

    if (count($errors) === 0) {
        unset($_POST["registerBtn"], $_POST["password_confirm"], $_POST["create-admin"]); // remove registerBtn and confirm input
        $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);  // hash the password
        
        if (isset($_POST["admin"])) {
            $_POST   ["admin"]   = 1;                                           // user registration is not admnin
                      $user_id   = createTable($table, $_POST);
            $_SESSION["message"] = "Admin user has been created successfully";
            header("location: " . BASE_URL . "app/admin/users/users.php");
            exit();
        } else {
            $_POST["admin"] = 0;                                             // user registration is not admnin
                   $user_id = createTable($table, $_POST);
                   $user    = selectOneInTable($table, ["id" => $user_id]);
            // log user with session
            loginUser($user);
        }
    } else {
        $user_name        = $_POST["user_name"];
        $admin            = isset($_POST["admin"]) ? 1 : 0;
        $email            = $_POST["email"];
        $password         = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
    }
}

if (isset($_GET["id"])) {
    $user = selectOneInTable($table, ["id" => $_GET["id"]]);

    $id        = $user["id"];
    $user_name = $user["user_name"];
    $admin     = isset($user["admin"]) ? 1 : 0;
    $email     = $user["email"];
    
}

if (isset($_POST["update-user"])) {
    $errors = validateUser($_POST);
    // displayContent($_POST);

    if (count($errors) === 0) {
        $id = $_POST["id"];

        unset($_POST["update-user"], $_POST["password_confirm"], $_POST["id"]);
        $_POST   ["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $_POST   ["admin"]    = isset($_POST["admin"]) ? 1 : 0;
                  $count      = updateTable($table, $id, $_POST);
        $_SESSION["message"]  = "Admin user has been updated successfully";
        header("location: " . BASE_URL . "app/admin/users/users.php");
        exit();       
        
    } else {
        $user_name        = $_POST["user_name"];
        $admin            = isset($_POST["admin"]) ? 1 : 0;
        $email            = $_POST["email"];
        $password         = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
    }
}

if (isset($_POST["loginBtn"])) {
    // displayContent($_POST);
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOneInTable($table, ["user_name" => $_POST["user_name"]]);

        if ($user && password_verify($_POST["password"], $user["password"])) {
            // login handler - redirect
            loginUser($user);
        } else {
            array_push($errors, "Wrong password");
        }
    }

    $user_name = $_POST["user_name"];
    $password  = $_POST["password"];
}   

if (isset($_GET["delete_id"])) {
              $count     = deleteTable($table, $_GET["delete_id"]);
    $_SESSION["message"] = "Admin user has been deleted successfully";
    header("location: " . BASE_URL . "app/admin/users/users.php");
    exit();
}