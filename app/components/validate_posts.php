<?php 

function validatePost($post)
{
    $errors = array();

    if (empty($post["title"])) {
        array_push($errors, "A title is required");
    }

    if (empty($post["body"])) {
        array_push($errors, "Put some content for the post");
    }

    if (empty($post["categorie_id"])) {
        array_push($errors, "Please select a categorie");
    }
    
    $existingPost = selectOneInTable("posts", ["title" => $post["title"]]);
    if ($existingPost) {
        if (isset($_POST["update-post"]) && $existingPost["id"] != $post["id"]) {
            array_push($errors, "The title is already exist");
        } 

        if (isset($_POST["add-post"])) {
            array_push($errors, "The title is already exist");
        } 
    }

    return $errors;
}