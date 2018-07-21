<?php
function insert_user() {
    global $mysqli, $admin_array;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    if ($user_id===Null or $user_name===Null or $user_pw===Null or $user_email===Null) {
        $msg = "有些東西似乎是空的呢,例如你的腦袋(;ﾟдﾟ)";
        return false;
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
    if (in_array($user_id, $admin_array)) {
        $user_right = 'admin';
    } else {
        $user_right = 'user';
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
    return $user_sn;
}