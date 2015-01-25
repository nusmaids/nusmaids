<?php

if (isset($_POST)) {
    include("sample-connect.php");
    $email = pg_escape_string($_POST['registerEmail']);
    $password= password_hash(pg_escape_string($_POST['registerPassword']), PASSWORD_DEFAULT);
    $contact =  pg_escape_string($_POST['registerContactNumber']);
    $first_name= pg_escape_string($_POST['registerFirstName']);
    $last_name = pg_escape_string($_POST['registerLastName']);
    $name = $first_name . " " .  $last_name;

    $sql = "INSERT INTO nusmaids.users (name, address, contact,  password)
        VALUES ('" . $name . "', '" . $email . "',
            '" . $contact . "', '" . $password . "')
            RETURNING *;
        ";
    }

$result = pg_fetch_assoc(pg_query($db, $sql));
echo $result;
echo var_dump($_POST);
?>