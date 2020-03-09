<?php

include(ROOT_PATH . "/app/db/database.php");
include(ROOT_PATH . "/app/controllers/validate_posts.php");

$table = "posts";
$categories = selectAllInTable("categories");
$posts = selectAllInTable($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$categorie_id = "";
$published = "";

if (htmlspecialchars(isset($_GET["id"]), ENT_QUOTES, "UTF-8")) {
    $post = selectOneInTable($table, ["id" => $_GET["id"]]); // Select the article with the id of the post
    $id = $post["id"]; // post id
    $title = htmlentities($post["title"], ENT_QUOTES, "UTF-8"); // title
    $body = htmlentities($post["body"], ENT_QUOTES, "UTF-8"); // content of the post
    $categorie_id = $post["categorie_id"]; // categorie id
    $published = $post["published"]; // if the post id published or unpublished
}

// DELETE POST
if (htmlspecialchars(isset($_GET["delete_id"]), ENT_QUOTES, "UTF-8")) {
    $count = deleteTable($table, $_GET["delete_id"]); // Select in the database the id of the post and delete him

    $_SESSION["message"] = "Your post has been deleted successfully"; // Display the alert
    header("location: " . BASE_URL . "app/admin/posts/posts.php"); // Redirection
    exit();
}

// UPDATE IF ARTICLE IS PUBLISHED OR NOT
if (isset($_GET["published"]) && (isset($_GET["p_id"]))) {
    $published = $_GET["published"]; // Get if the post is published or not
    $p_id = $_GET["p_id"]; // Get the id
    $count = updateTable($table, $p_id, ["published" => $published]); // Update in the database with 1 or 0 (boolean)

    $_SESSION["message"] = "Your post state has been updated successfully"; // Display the alert
    header("location: " . BASE_URL . "app/admin/posts/posts.php"); // Redirection
    exit();
}

// VALIDATE POST
if (htmlspecialchars(isset($_POST["add-post"]), ENT_QUOTES, "UTF-8")) {
    //displayContent($_FILES["image"]);
    $errors = validatePost($_POST);

    if (!empty($_FILES["image"]["name"])) {
        // add unix time with image name
        $image_name = time() . ' ' . $_FILES["image"]["name"]; // Add a time code in the image name
        $image_destination = ROOT_PATH . "/assets/images/" . $image_name; // Define the folder of destination
        $result = move_uploaded_file($_FILES["image"]["tmp_name"], $image_destination); // Move the image with the time code on the folder
        if ($result) {
            $_POST["image"] = $image_name; // Good
        } else {
            array_push($errors, "Failed to upload the image please try again"); // Display the error
        }
    } else {
        array_push($errors, "For better SEO, please put an image"); // Error, the image is required
    }
    

    if (count($errors) === 0) {
        unset($_POST["add-post"]);
        $_POST["user_id"] = $_SESSION["id"]; // add the id of the post
        $_POST["published"] = isset($_POST["published"]) ? 1 : 0; // Checkbox if the post id published or not
        $_POST["body"] = htmlspecialchars(htmlentities($_POST["body"]), ENT_QUOTES, "UTF-8"); // the content of the post

        $post = createTable($table, $_POST); // Create the post in the database
        $_SESSION["message"] = "Your post has been created successfully"; // Display the alert
        header("location: " . BASE_URL . "app/admin/posts/posts.php"); // Redirection
    } else {
        $title = htmlspecialchars(htmlentities($_POST["title"]), ENT_QUOTES, "UTF-8"); // Title of the post
        $published = isset($_POST["published"]) ? 1 : 0; // Checkbox for the published/unpublished
        $body = htmlentities($_POST["body"]); // content of the post
        $categorie_id = $_POST["categorie_id"]; // All the categories
    }
}

// UPDATE POST
if (htmlspecialchars(isset($_POST["update-post"]), ENT_QUOTES, "UTF-8")) {
    $errors = validatePost($_POST);

    if (!empty($_FILES["image"]["name"])) {
        $image_name = time() . ' ' . $_FILES["image"]["name"]; // Add the time code in the name of the image
        $image_destination = ROOT_PATH . "/assets/images/" . $image_name; // Define the destination folder
        $result = move_uploaded_file($_FILES["image"]["tmp_name"], $image_destination); // Move the image in the destination folder
        if ($result) {
            $_POST["image"] = $image_name; // Goood
        } else {
            array_push($errors, "Failed to upload the image please try again"); // Error on the upload
        }
    } else {
        array_push($errors, "For better SEO, please put an image"); // Image is alwas required
    }

    if (count($errors) === 0) {
        $id = $_POST["id"]; // post id
        unset($_POST["update-post"], $_POST["id"]);
        $_POST["user_id"] = $_SESSION["id"]; // update name of the author
        $_POST["published"] = isset($_POST["published"]) ? 1 : 0; // published/unpublished
        $_POST["body"] = htmlentities($_POST["body"], ENT_QUOTES, "UTF-8"); // content of the blog

        $categorie_id = updateTable($table, $id, $_POST); // Update the post in the database
        $_SESSION["message"] = "Your post has been updated successfully"; // Display alert
        header("location: " . BASE_URL . "app/admin/posts/posts.php"); // Redirection
        exit();
    } else {
        $title = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8"); // Title of the article
        $published = isset($_POST["published"]) ? 1 : 0; // Published/npublished
        $body = htmlentities($_POST["body"]); // content
        $categorie_id = $_POST["categorie_id"]; // categorie id
    }
}