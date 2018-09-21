<?php
function user_email_judge($user_email) {
    global $mysqli;
    $sql = "SELECT * FROM `users` WHERE `user_email`='{$user_email}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    if (empty($user)) {
        return "true";
    } else {
        return "false";
    }
}