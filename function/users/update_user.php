<?php
function update_user() {
    global $mysqli, $is_admin, $is_user;
    if ($_COOKIE['token'] === $_SESSION['token'] or $is_admin) {
        foreach ($_POST as $var_title => $var_value) {
            $var_title = $mysqli->real_escape_string($_POST[$var_title]);
        }
        $user_sn = $is_admin ? $user_sn : $_SESSION['user_sn'];
        $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $user   = $result->fetch_assoc();
        if (!empty($user)) {
            $pw_update = '';
            if(!empty($_POST['user_pw'])) {
                $user_pw   = password_hash($_POST['user_pw'], PASSWORD_DEFAULT);
                $pw_update = "`user_pw`='{$user_pw}',";
            }
            $sql = "UPDATE `users` SET
            `user_name`='{$user_name}',
            `user_id`='{$user_id}',
            {$pw_update}
            `user_email`='{$user_email}'
            WHERE `user_sn`='{$user_sn}'";
            $mysqli->query($sql) or die($mysqli->connect_error);
            save_user_pic($user_sn);
            return true;
        }
        return false;
    }
}