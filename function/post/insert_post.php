<?php
function insert_post() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("請先獲得管理員權限ヾ(●゜▽゜●)♡");
    }
    $post_title = $mysqli->real_escape_string($_POST['post_title']);
    $post_content = $mysqli->real_escape_string($_POST['post_content']);
    $post_date = date("Y-m-d H:i:s");
    $post_tag = $mysqli->real_escape_string($_POST['post_tag']);
    $sql = "INSERT INTO `post` (`post_title`,
    `post_content`,
    `post_date`,
    `post_owner`,
    `post_counter`,
    `post_tag`) VALUES ('{$post_title}',
    '{$post_content}',
    '{$post_date}',
    '{$_SESSION['user_sn']}',
    '0',
    '{$post_tag}')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post_sn = $mysqli->insert_id;
    save_post_pic($post_sn);
    return $post_sn;
}