<?php
function insert_post($class_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("請先獲得管理員權限ヾ(●゜▽゜●)♡");
    }
    if (!empty($_POST['post_content_html'])) {
        $post_content = $mysqli->real_escape_string($_POST['post_content_html']);
    } else if (!empty($_POST['post_content_md'])) {
        include 'plugin/Parsedown.php';
        $parsedown = new Parsedown;
        $parsedown->setMarkupEscaped(true);
        $parsedown->setSafeMode(true);
        $post_content_html = $parsedown->text($_POST['post_content_md']);
        $post_content = $mysqli->real_escape_string($post_content_html);
    } else {
        die('在忙啦幹');
    }
    $post_title = $mysqli->real_escape_string($_POST['post_title']);
    $post_date = date("Y-m-d H:i:s");
    $post_tag = $mysqli->real_escape_string($_POST['post_tag']);
    $sql = "INSERT INTO `post` (`post_title`,
    `post_content`,
    `post_date`,
    `post_owner`,
    `post_counter`,
    `post_tag`,
    `class_sn`) VALUES ('{$post_title}',
    '{$post_content}',
    '{$post_date}',
    '{$_SESSION['user_sn']}',
    '0',
    '{$post_tag}',
    '{$class_sn}')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post_sn = $mysqli->insert_id;
    save_post_pic($post_sn);
    return $post_sn;
}