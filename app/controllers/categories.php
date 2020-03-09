<?php

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/controllers/validate_categories.php");

$table       = "categories";
$errors      = array();
$id          = "";
$name        = "";
$description = "";

$categories = selectAllInTable($table);

if (isset($_POST["add-categorie"])) {
    $errors = validateCategorie($_POST); // Check if there is an error

    if (count($errors) === 0) {
        unset($_POST["add-categorie"]);
        $categories_id = createTable($table, $_POST); // Create categries
        $_SESSION["message"]     = "Your categorie was created successfully!"; // Display alert success
        header("location: " . BASE_URL . "app/admin/categories/categories.php"); // Redirection
        exit();
    } else {
        $name        = $_POST["name"]; // Else keep the data in the inputs
        $description = $_POST["description"]; // Else keep the data in the inputs
    }
}

if (isset($_GET["id"])) {
    $id          = $_GET["id"];
    $categorie   = selectOneInTable($table, ["id" => $id]);
    $id          = $categorie["id"];
    $name        = $categorie["name"];
    $description = $categorie["description"];
}

if (isset($_GET["delete_id"])) {
    $id        = $_GET["delete_id"];
    $count     = deleteTable($table, $id); // Delete the categorie with the id
    $_SESSION["message"] = "Your categorie has been deleted successfully!"; //Display the alert
    header("location: " . BASE_URL . "app/admin/categories/categories.php"); // Redirection
    exit();
}

if (isset($_POST["update-categorie"])) {
    if (count($erros) === 0) {
        $id = $_POST["id"];
        unset($_POST["update-categorie"], $_POST["id"]);
        $categories_id = updateTable($table, $id, $_POST);// Update the categorie
        $_SESSION["message"]     = "Your categorie was updated successfully!"; // Alert
        header("location: " . BASE_URL . "app/admin/categories/categories.php"); // Redirection
        exit();
    } else {
        $name        = $_POST["name"]; // Else keep the data in the inputs
        $description = $_POST["description"]; // Else keep the data in the inputs
    }
}