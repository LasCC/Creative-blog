<?php 

function validateCategorie($categories)
{
    $errors = array();

    if (empty($categories["name"])) {
        array_push($errors, "Name is required");
    }
    
    $existingCategorie = selectOneInTable("categories", ["name" => $categories["name"]]);
    if ($existingCategorie) {
        if (isset($_POST["update-categorie"]) && $existingCategorie["id"] != $categories["id"]) {
            array_push($errors, "The catageorie already exist");
        } 

        if (isset($_POST["add-categorie"])) {
            array_push($errors, "The catageorie already exist");
        } 
    }

    return $errors;
}

