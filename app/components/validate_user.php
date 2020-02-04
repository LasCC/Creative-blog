<?php 
    /**
     * function validateUser
     * @param String $user
     * @return void
     */
    function validateUser($user)
    {
        $errors = array();

        if (empty($user["user_name"])) {
            array_push($errors, "Username is required");
        }

        if (empty($user["email"])) {
            array_push($errors, "Email is required");
        }

        if (empty($user["password"])) {
            array_push($errors, "Password is required");
        }

        if (empty($user["password_confirm"])) {
            array_push($errors, "Password confirmation is required");
        }

        if ($user["password_confirm"] !== $user["password"]) {
            array_push($errors, "Password is not the same");
        }

        $existingUser = selectOneInTable("users", ["email" => $user["email"]]);
        if ($existingUser) {
            if (isset($_POST["update-user"]) && $existingUser["id"] != $user["id"]) {
                array_push($errors, "The user already exist");
            } 

            if (isset($_POST["create-admin"])) {
                array_push($errors, "The user already exist");
            } 
        }

        return $errors;
    }

    /**
     * fuction validateLogin
     *
     * @param string $user Username and password of the user
     * @return string Check if the username and the passsword is empty
     */
    function validateLogin($user)
    {
        $errors = array();

        if (empty($user["user_name"])) {
            array_push($errors, "Username is required");
        }

        if (empty($user["password"])) {
            array_push($errors, "Password is required");
        }
        
        return $errors;
    }

?>