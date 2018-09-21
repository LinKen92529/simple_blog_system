<?php
function insert_user() {
    global $mysqli, $admin_array, $top_array;
    $user_id = $mysqli->real_escape_string($_POST['user_id']);
    $user_pw = $mysqli->real_escape_string($_POST['user_pw']);
    $user_email = $mysqli->real_escape_string($_POST['user_email']);
    $user_name  = $mysqli->real_escape_string($_POST['user_name']);
    if ($user_id===Null or $user_name===Null or $user_pw===Null or $user_email===Null) {
        $msg = "有些東西似乎是空的呢,例如你的腦袋(;ﾟдﾟ)";
        return false;
    }
    $user_id_len = strlen($user_id);
    $user_pw_len = strlen($user_pw);
    if ($user_id_len < 6 or $user_id_len > 16 or $user_pw_len < 6 or $user_pw_len > 16) {
        die('還有後端你改不到d(`･∀･)b');
    }
    $sql     = "SELECT * FROM `users` WHERE  `user_id`='{$user_id}'";
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);
    $user    = $result->fetch_assoc();
    if (!empty($user)) {
        die("使用者已存在QAQ");
        return false;
    }
    $sql     = "SELECT * FROM `users` WHERE  `user_email`='{$user_email}'";
    $result  = $mysqli->query($sql) or die($mysqli->connect_error);
    $user    = $result->fetch_assoc();
    if (!empty($user)) {
        die("信箱已存在QAQ");
        return false;
    }
    $user_pw = password_hash($_POST['user_pw'], PASSWORD_DEFAULT);
    if (in_array($user_id, $top_array)) {
        $user_right = "top";
    } else if (in_array($user_id, $admin_array)) {
        $user_right = "admin";
    } else {
        $user_right = "user";
    }
    $sql = "INSERT INTO `users` (`user_id`,
    `user_pw`,
    `user_name`,
    `user_email`,
    `user_right`) VALUES ('{$user_id}',
    '{$user_pw}',
    '{$user_name}',
    '{$user_email}',
    '{$user_right}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $user_sn = $mysqli->insert_id;
    $_SESSION['user_sn'] = $user_sn;
    $_SESSION['user_right'] = $user_right;
    $_POST['user_sn'] = $user_sn;
    $_SESSION['user'] = $_POST;
    $_SESSION['token'] = password_hash(date("Y-m-d H:i:s"), PASSWORD_DEFAULT);
    setcookie("token", $_SESSION['token'], time()+2160000);
    mkdir("./uploads/users/{$user_sn}", 0777);
    // if (isset($_POST['cms_register'])) {
    //     cms_register($user_id, $_POST['user_pw'], $user_sn);
    // }
    return $user_sn;
}