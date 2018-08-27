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
    $each_tag = explode(";", $post_tag);
    $tag_name = '';
    foreach ($each_tag as $tag_sn) {
        $sql  = "SELECT * FROM `tag` WHERE `tag_sn`='{$tag_sn}'";
        $result = $mysqli->query($sql) or die($mysqli->connect_error);
        $tag = $result->fetch_assoc();
        if (!empty($tag)) {
            $tag_name = $tag_name . $tag['tag_name'] . ";";
        }
    }
    $sql = "INSERT INTO `post` (`post_title`,
    `post_content`,
    `post_date`,
    `post_owner`,
    `post_counter`,
    `post_tag`,
    `tag_name`) VALUES ('{$post_title}',
    '{$post_content}',
    '{$post_date}',
    '{$_SESSION['user_sn']}',
    '0',
    '{$post_tag}',
    '{$tag_name}')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post_sn = $mysqli->insert_id;
    save_post_pic($post_sn);
    return $post_sn;
}