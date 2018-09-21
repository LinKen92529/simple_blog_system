<?php
function update_post($post_sn, $class_sn) {
    global $mysqli, $is_top;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post = $result->fetch_assoc();
    if (!$is_top and $_SESSION['user_sn'] != $post['post_owner']) {
        die('你沒有權限修改文章喔 廠廠⧸⎩⎠⎞͏(・∀・)⎛͏⎝⎭⧹');
    }
    $post_content = $mysqli->real_escape_string($_POST['post_content']);
    $post_title = $mysqli->real_escape_string($_POST['post_title']);
    $post_tag = $mysqli->real_escape_string($_POST['post_tag']);
    if (empty($class_sn)) {
        $class_sn = "0";
    }
    $sql = "UPDATE `post` SET `post_title`='{$post_title}',  
    `class_sn`='{$class_sn}',
    `post_content`='{$post_content}',
    `post_tag`='{$post_tag}'
    WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
    save_post_pic($post_sn);
}