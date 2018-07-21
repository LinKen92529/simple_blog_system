<?php
function delete_user($user_sn) {
    global $mysqli, $is_admin;
    
    if ($is_admin) {
        $sql = "DELETE FROM `users` WHERE `user_sn`='{$user_sn}'";
        $mysqli->query($sql) or die($mysqli->connect_error);
        $path = "./uploads/users/{$user_sn}";
        delete_file($path, "folder");
    }
}