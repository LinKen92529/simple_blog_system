<?php
function insert_cmt($post_sn) {
    global $mysqli, $is_user;
    if (!$is_user) {
        die("請先登入!!!");
    }
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $cmt_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `cmt` (`cmt_content`,
    `post_sn`,
    `reply_sn`,
    `user_sn`,
    `cmt_date`) VALUES ('{$cmt_content}',
    '{$post_sn}',
    '0',
    '{$_SESSION['user_sn']}',
    '{$cmt_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $cmt_sn = $mysqli->insert_id;
    return true;
}