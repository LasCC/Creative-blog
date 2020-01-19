<?php

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/components/validate_posts.php");

$table = "posts";
$categories = selectAllInTable("categories");
$posts = selectAllInTable($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$categorie_id = "";
$published = "";

if (isset($_GET["id"])) {
    $post = selectOneInTable($table, ["id" => $_GET["id"]]);
    $id = $post["id"];
    $title = $post["title"];
    $body = $post["body"];
    $categorie_id = $post["categorie_id"];
    $published = $post["published"];
}

if (isset($_GET["delete_id"])) {
    $count = deleteTable($table, $_GET["delete_id"]);

    $_SESSION["message"] = "Your post has been deleted successfully";
    header("location: " . BASE_URL . "app/admin/posts/posts.php");
    exit();
}

if (isset($_GET["published"]) && isset($_GET["p_id"])) {
    $published = $_GET["published"];
    $p_id = $_GET["p_id"];
    $count = updateTable($table, $p_id, ["published" => $published]);

    $_SESSION["message"] = "Your post state has been updated successfully";
    header("location: " . BASE_URL . "app/admin/posts/posts.php");
    exit();
}

if (isset($_POST["add-post"])) {
    //displayContent($_FILES["image"]);
    $errors = validatePost($_POST);

    if (!empty($_FILES["image"]["name"])) {
        $image_name = time() . ' ' . $_FILES["image"]["name"];
        $image_destination = ROOT_PATH . "/assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES["image"]["tmp_name"], $image_destination);
        if ($result) {
            $_POST["image"] = $image_name;
        } else {
            array_push($errors, "Failed to upload the image please try again");
        }
    } else {
        array_push($errors, "For better SEO, please put an image");
    }
    

    if (count($errors) === 0) {
        unset($_POST["add-post"]);
        $_POST["user_id"] = $_SESSION["id"];
        $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
        $_POST["body"] = htmlentities($_POST["body"]);

        $post = createTable($table, $_POST);
        $_SESSION["message"] = "Your post has been created successfully";
        header("location: " . BASE_URL . "app/admin/posts/posts.php");
    } else {
        $title = $_POST["title"];
        $published = isset($_POST["published"]) ? 1 : 0;
        $body = $_POST["body"];
        $categorie_id = $_POST["categorie_id"];
    }
}

if (isset($_POST["update-post"])) {
    $errors = validatePost($_POST);

    if (!empty($_FILES["image"]["name"])) {
        $image_name = time() . ' ' . $_FILES["image"]["name"];
        $image_destination = ROOT_PATH . "/assets/images/" . $image_name;
        $result = move_uploaded_file($_FILES["image"]["tmp_name"], $image_destination);
        if ($result) {
            $_POST["image"] = $image_name;
        } else {
            array_push($errors, "Failed to upload the image please try again");
        }
    } else {
        array_push($errors, "For better SEO, please put an image");
    }

    if (count($errors) === 0) {
        $id = $_POST["id"];
        unset($_POST["update-post"], $_POST["id"]);
        $_POST["user_id"] = $_SESSION["id"];
        $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
        $_POST["body"] = htmlentities($_POST["body"]);

        $categorie_id = updateTable($table, $id, $_POST);
        $_SESSION["message"] = "Your post has been updated successfully";
        header("location: " . BASE_URL . "app/admin/posts/posts.php");
        exit();
    } else {
        $title = $_POST["title"];
        $published = isset($_POST["published"]) ? 1 : 0;
        $body = $_POST["body"];
        $categorie_id = $_POST["categorie_id"];
    }
}