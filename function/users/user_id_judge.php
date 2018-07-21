<?php
function user_id_judge($user_id) {
    global $mysqli;
    $sql    = "SELECT * FROM `users` WHERE  `user_id`='{$user_id}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    if (empty($user)) {
        return "true";
    } else {
        return "false";
    }
}