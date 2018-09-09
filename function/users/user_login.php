<?php
function user_login($user_id) {
    global $mysqli;
    if (empty($user_id) or empty($_POST['user_pw'])) {
        die("請輸入帳號,以免他跟你空空的大腦一樣(ﾒﾟДﾟ)ﾒ");
        return false;
    }
    err_log($user_id);
    err_log($_POST['user_pw']);
    $sql    = "SELECT * FROM `users` WHERE `user_id`='{$user_id}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    if (!empty($user)) {
        if (password_verify($_POST['user_pw'], $user['user_pw'])) {
            $_SESSION['user_right'] = $user['user_right'];
            $_SESSION['user_sn'] = $user['user_sn'];
            $_SESSION['user'] = $user;
            $user_sn = $_SESSION['user_sn'];
            $_SESSION['token'] = password_hash(date("Y-m-d H:i:s"), PASSWORD_DEFAULT);
            setcookie("token", $_SESSION['token'], time()+2160000);
            return true;
        }
        return false;
    }
    return false;
}