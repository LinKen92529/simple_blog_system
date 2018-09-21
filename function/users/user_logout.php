<?php
function user_logout() {
    global $is_user;
    if(!$is_user) {
        die("還沒登入就要登出 邏輯大師4ni(ﾟдﾟ≡ﾟдﾟ)");
    }
    setcookie("token", $token, time()-216000);
    unset($_SESSION ['user_sn']);
    unset($_SESSION['user']);
    unset($_SESSION['token']);
}