<?php
function update_post($post_sn) {
    global $mysqli, $is_top;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
    $post = $result->fetch_assoc();
    if (!$is_top and $_SESSION['user_sn'] != $post['post_owner']) {
        die('你沒有權限修改文章喔 廠廠⧸⎩⎠⎞͏(・∀・)⎛͏⎝⎭⧹');
    }
    $post_title = $mysqli->real_escape_string($_POST['post_title']);
    $post_content = $mysqli->real_escape_string($_POST['post_content']);
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
    $sql = "UPDATE `post` SET
    `post_title`='{$post_title}',
    `post_content`='{$post_content}',
    `post_tag`='{$post_tag}'
    WHERE `post_sn`='{$post_sn}'";
    if ($mysqli->query($sql)) {
        save_post_pic($post_sn);
    } else {
        die(mysqli_error($mysqli));
    }
}