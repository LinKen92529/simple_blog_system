<?php
function delete_post($post_sn) {
    global $mysqli, $is_admin, $now_user_sn;
    if (!$is_admin) {
        die('揍凱尼不肆管理員(／‵Д′)／~ ╧╧');
    }
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    $post = $post['post_sn'] . '_' . $post['post_title'];
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$now_user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    $user = $user['user_sn'] . '_' . $user['user_name'];
    $time = date("Y-m-d H:i:s");
    del_post_log($post, $user, $time);
    $sql = "UPDATE `post` SET `post_display`='disable' WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
} 