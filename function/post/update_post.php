<?php
function update_post($post_sn) {
    global $mysqli, $is_top;
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    if (!$is_top and $_SESSION['user_sn'] != $post['post_owner']) {
        die('你沒有權限修改文章喔 廠廠⧸⎩⎠⎞͏(・∀・)⎛͏⎝⎭⧹');
    }
    $sql = "UPDATE `post` SET
    `post_title`='{$post_title}',
    `post_content`='{$post_content}',
    `post_tag`='{$post_tag}'
    WHERE `post_sn`='{$post_sn}'";
    if ($mysqli->query($sql) or die($mysqli->connect_error)) {
        save_post_pic($post_sn);
        insert_post_content($_FILES['post_content'], $post_sn);
    }
}