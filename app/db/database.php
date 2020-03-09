<?php
session_start();
require("connect.php");


/**
 * fuction displayContent
 * @param string Display the value in a <pre></pre> tag
 * @return string The request
 */
function displayContent($value)
{
    echo "<pre>" . print_r($value, true) . "</pre>";
    die();
}

/**
 * execQuery
 * Execute the query in the database
 * @param  string $sql
 * @param  string $data
 *
 * @return void
 */
function execQuery($sql, $data)
{
    global $conn;
    $fetcher = $conn->prepare($sql);
    $values  = array_values($data);
    $types   = str_repeat("s", count($values));
    $fetcher->bind_param($types, ...$values);
    $fetcher->execute();
    return $fetcher;
}

/**
 * selectAllInTable
 * Select all the data in the database that the user gives
 * @param  string $table
 * @param  bool $conditions
 *
 * @return array
 */
function selectAllInTable($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $fetcher = $conn->prepare($sql);
        $fetcher->execute();
        $payload = $fetcher->get_result()->fetch_all(MYSQLI_ASSOC);
        return $payload;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $fetcher = execQuery($sql, $conditions);
        $payload = $fetcher->get_result()->fetch_all(MYSQLI_ASSOC);
        return $payload;
    }
}



/**
 * selectOneInTable
 * Select one object in the table that the user gives
 * @param  string $table
 * @param  bool $conditions
 *
 * @return void
 */
function selectOneInTable($table, $conditions)
{
    global $conn;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql     = $sql . " LIMIT 1"; //Limit with just one
    $fetcher = execQuery($sql, $conditions);
    $payload = $fetcher->get_result()->fetch_assoc();
    return $payload;
}


/**
 * createTable
 * Create user in the database
 * @param  string $table
 * @param  string $data
 *
 * @return void
 */
function createTable($table, $data)
{
    // we want to automate this INSERT INTO users SET user_name=?, admin=? , email=? , password=?
    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    
    $fetcher = execQuery($sql, $data);
    $id      = $fetcher->insert_id;
    return $id;
}


/**
 * updateTable
 * Update the user in the database
 * @param  string $table
 * @param  int $id
 * @param  string $data
 *
 * @return void
 */
function updateTable($table, $id, $data)
{
    // we want to au UPDATE users SET user_name=?, admin=? , email=? , password=? WHERE id=?
    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data["id"]    = $id;
    $fetcher = execQuery($sql, $data);
    return $fetcher->affected_rows;
}


/**
 * deleteTable
 * Delete user in the database with his ID
 * @param  string $table
 * @param  int $id
 *
 * @return void
 */
function deleteTable($table, $id)
{
    // we want to DELETE FROM users WHERE id=?
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $fetcher = execQuery($sql, ["id" => $id]);
    return $fetcher->affected_rows;
}

/**
 * getPublishedPost
 * Select all the post published (1)
 * @return string
 */
function getPublishedPosts()
{
    // SELECT * FROM posts WHERE published = 1
    global $conn;
    $sql = "SELECT p.*, u.user_name FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published = ?";
    
    $fetcher = execQuery($sql, ["published" => 1 ]);
    $payload = $fetcher->get_result()->fetch_all(MYSQLI_ASSOC);
    return $payload;
}
/**
 * getUnblishedPost
 * Select all the unpublished posts
 * @return string
 */
function getUnpublishedPosts()
{
    // SELECT * FROM posts WHERE published = 1
    global $conn;
    $sql = "SELECT p.*, u.user_name FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published = ?";
    
    $fetcher = execQuery($sql, ["published" => 0 ]);
    $payload = $fetcher->get_result()->fetch_all(MYSQLI_ASSOC);
    return $payload;
}