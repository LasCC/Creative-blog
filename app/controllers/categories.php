<?php

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/components/validate_categories.php");

$table       = "categories";
$errors      = array();
$id          = "";
$name        = "";
$description = "";

$categories = selectAllInTable($table);

if (isset($_POST["add-categorie"])) {
    $errors = validateCategorie($_POST);

    if (count($errors) === 0) {
        unset($_POST["add-categorie"]);
        $categories_id = createTable($table, $_POST);
        $_SESSION["message"]     = "Your categorie was created successfully!";
        header("location: " . BASE_URL . "app/admin/categories/categories.php");
        exit();
    } else {
        $name        = $_POST["name"];
        $description = $_POST["description"];
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
    $count     = deleteTable($table, $id);
    $_SESSION["message"] = "Your categorie has been deleted successfully!";
    header("location: " . BASE_URL . "app/admin/categories/categories.php");
    exit();
}

if (isset($_POST["update-categorie"])) {

    if (count($erros) === 0) {
        $id = $_POST["id"];
        unset($_POST["update-categorie"], $_POST["id"]);
        $categories_id = updateTable($table, $id, $_POST);
        $_SESSION["message"]     = "Your categorie was updated successfully!";
        header("location: " . BASE_URL . "app/admin/categories/categories.php");
        exit();
    } else {
        $name        = $_POST["name"];
        $description = $_POST["description"];
    }
    
}