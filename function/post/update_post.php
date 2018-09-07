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
    err_log($sql);
    if ($mysqli->query($sql)) {
        save_post_pic($post_sn);
    } else {
        die(mysqli_error($mysqli));
    }
}