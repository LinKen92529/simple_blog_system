<?php
function update_user($user_sn) {
    global $mysqli, $is_admin, $is_user, $now_user_sn;
    if ($_COOKIE['token'] == $_SESSION['token'] or $is_admin) {
        $user_name = $mysqli->real_escape_string($_POST['user_name']);
        $user_id = $mysqli->real_escape_string($_POST['user_id']);
        $user_email = $mysqli->real_escape_string($_POST['user_email']);
        $user_id_len = strlen($user_id);
        if ($user_id_len < 6 or $user_id_len > 16) {
            die('還有後端你改不到d(`･∀･)b');
        }
        $user_sn = $is_admin ? $user_sn : $_SESSION['user_sn'];
        $sql    = "SELECT * FROM `users` WHERE `user_email`='{$user_email}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $email_judge = $result->fetch_assoc();
        if (!empty($email_judge) and $email_judge != '' and $email_judge['user_sn'] != $user_sn) {
            die('信箱重複了騷年(●▼●;)');
        }
        $sql = "SELECT * FROM `users` WHERE `user_id`='{$user_id}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $id_judge = $result->fetch_assoc();
        if (!empty($id_judge) and $id_judge != '' and $id_judge['user_sn'] != $user_sn) {
            die('帳號重複了喔 哭哭( • ̀ω•́ )');
        }
        $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $user   = $result->fetch_assoc();
        if ($user['user_right'] == 'top' and $now_user_sn != $user['user_sn']) {
            die ('母湯喔(╬☉д⊙)');
        }
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