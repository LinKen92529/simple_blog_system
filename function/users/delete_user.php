<?php
function delete_user($user_sn) {
    global $mysqli, $is_admin, $now_user_sn; 
    if ($is_admin) {
        $sql = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        if ($user = $result->fetch_assoc()) {
            if ($user['user_right'] == 'top') {
                die('去旁邊玩沙Σ(*ﾟдﾟﾉ)ﾉ');
            }
        }
        $sql = "SELECT `user_name` FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $who = $result->fetch_assoc();
        $sql = "SELECT `user_name` FROM `users` WHERE `user_sn`='{$now_user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $user = $result->fetch_assoc();
        $user = $now_user_sn. '_' . $user['user_name'];
        $who = $user_sn . '_' . $who['user_name'];
        $time = date("Y-m-d H:i:s");
        del_user_log($user, $who, $time);
        $sql = "DELETE FROM `users` WHERE `user_sn`='{$user_sn}'";
        $mysqli->query($sql) or die($mysqli->connect_error);
        $path = "./uploads/users/{$user_sn}";
        delete_file($path, "folder");
    }
}