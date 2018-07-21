<?php
function insert_post() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("請先獲得管理員權限ヾ(●゜▽゜●)♡");
    }
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $post_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `post` (`post_title`,
    `post_date`,
    `post_owner`,
    `post_counter`,
    `post_tag`) VALUES ('{$post_title}',
    '{$post_date}',
    '{$_SESSION['user_sn']}',
    '0',
    '{$post_tag}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $post_sn = $mysqli->insert_id;
    save_post_pic($post_sn);
    insert_post_content($_FILES['post_content'], $post_sn);
    return $post_sn;
}