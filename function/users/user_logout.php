<?php
function user_logout() {
    global $is_user;
    if(!$is_user) {
        die("請先登入");
    }
    setcookie("token", $token, time()-216000);
    unset($_SESSION ['user_sn']);
    unset($_SESSION['user']);
    unset($_SESSION['token']);
}