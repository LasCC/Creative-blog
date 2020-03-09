<?php

/**
 * function validatePost
 * @param string $post The post name
 * @return string Check if the post is already exist and check if all the inputs are complete
 */
function validatePost($post)
{
    $errors = array();

    if (empty($post["title"])) {
        array_push($errors, "A title is required"); // Check if the title is empty or not
    }

    if (empty($post["body"])) {
        array_push($errors, "Put some content for the post"); // Check if the body is empty or not
    }

    if (empty($post["categorie_id"])) {
        array_push($errors, "Please select a categorie"); // Check if the categorie is empty or not
    }
    
    $existingPost = selectOneInTable("posts", ["title" => $post["title"]]);
    if ($existingPost) {
        if (isset($_POST["update-post"]) && $existingPost["id"] != $post["id"]) {
            array_push($errors, "The title is already exist"); // If the title already exist > error
        }

        if (isset($_POST["add-post"])) {
            array_push($errors, "The title is already exist"); // If the title already exist > error
        }
    }

    return $errors;
}