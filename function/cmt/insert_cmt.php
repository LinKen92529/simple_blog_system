<?php
function insert_cmt($post_sn) {
    global $mysqli, $is_user;
    if (!$is_user) {
        die("請先登入!!!");
    }
    $cmt_content = $mysqli->real_escape_string($_POST['cmt_content']);
    $post_sn = $mysqli->real_escape_string($_POST['post_sn']);
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
    return $cmt_sn;
}