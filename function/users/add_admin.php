<?php
function add_admin($user_sn) {
    global $mysqli, $is_top;
    if (!$is_top) {
        die("你沒有權限喔(|||ﾟдﾟ)");
    }
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    if ($user['user_right'] == 'top') {
        die('你想幹嘛啊(ﾟ∀。)');
    }
    $sql = "UPDATE `users` SET `user_right`='admin' WHERE `user_sn`='{$user_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}