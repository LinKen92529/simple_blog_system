<?php
function update_post($post_sn) {
    global $mysqli, $is_top;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post = $result->fetch_assoc();
    if (!$is_top and $_SESSION['user_sn'] != $post['post_owner']) {
        die('你沒有權限修改文章喔 廠廠⧸⎩⎠⎞͏(・∀・)⎛͏⎝⎭⧹');
    }
    if (!empty($_POST['post_content_html'])) {
        $post_content = $mysqli->real_escape_string($_POST['post_content_html']);
    } else if (!empty($_POST['post_content_md'])) {
        $parsedown = new Parsedown;
        $parsedown->setMarkupEscaped(true);
        $parsedown->setSafeMode(true);
        $post_content_html = $parsedown->text($_POST['post_content_md']);
        $post_content = $mysqli->real_escape_string($post_content_html);
    } else {
        die('在忙啦幹');
    }
    if (empty($class_sn)) {
        $class_sn = "0";
    }
    $post_title = $mysqli->real_escape_string($_POST['post_title']);
    $post_tag = $mysqli->real_escape_string($_POST['post_tag']);
    if (isset($_POST['class_sn'])) {
        $class_sn = $mysqli->real_escape_string($_POST['class_sn']);
        $class_sn_sql = "`class_sn`='{$class_sn}',";
    } else {
        $class_sn_sql = '';
    }
    $sql = "UPDATE `post` SET
    `post_title`='{$post_title}',  
    {$class_sn_sql}
    `post_content`='{$post_content}',
    `post_tag`='{$post_tag}'
    WHERE `post_sn`='{$post_sn}'";
    if ($mysqli->query($sql)) {
        save_post_pic($post_sn);
    } else {
        die(mysqli_error($mysqli));
    }
}