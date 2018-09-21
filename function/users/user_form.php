<?php
function user_form($user_sn) {
    global $mysqli, $is_admin, $smarty;
    
    $sql    = "SELECT * FROM `users` WHERE `user_sn`='{$user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    if (empty($user)) {
        return false;
    }
    if (!$is_admin) {
        if ($_COOKIE['token'] !== $_SESSION['token']) {
            return false;
        }
    }
    $user['pic'] = get_pic_path("uploads/users/{$user_sn}/normal_user_pic.png", "img/thumb_user_pic.jpg");
    $smarty->assign('user', $user);
}