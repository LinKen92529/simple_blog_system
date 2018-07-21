<?php
function delete_admin($user_sn) {
    global $mysqli, $is_top;
    if (!$is_top) {
        die("你沒有權限喔(|||ﾟдﾟ)");
    }
    $sql = "UPDATE `users` SET `user_right`='user' WHERE `user_sn`='{$user_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}