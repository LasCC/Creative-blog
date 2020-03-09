<?php

/**
 * fonction validateCategories
 *
 * @param string $categories The categorie name
 * @return string Check if the categories if already exist or not
 */
function validateCategorie($categories)
{
    $errors = array();

    if (empty($categories["name"])) {
        array_push($errors, "Name is required"); // Check if the name is empty or not
    }
    
    $existingCategorie = selectOneInTable("categories", ["name" => $categories["name"]]);
    if ($existingCategorie) {
        if (isset($_POST["update-categorie"]) && $existingCategorie["id"] != $categories["id"]) {
            array_push($errors, "The catageorie already exist"); // If the categorie exist > display error
        }

        if (isset($_POST["add-categorie"])) {
            array_push($errors, "The catageorie already exist"); // If the categorie exist > display error
        }
    }

    return $errors;
}