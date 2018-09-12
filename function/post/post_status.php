<?php
function post_status($post_sn) {
    global $mysqli, $is_admin, $now_user_sn;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    if (!empty($post)) {
        if ($now_user_sn != $post['post_owner']  && !$is_admin) {
            $change_result = "permission denide";
            echo $change_result;
            return false;
        }
        $post_status = $mysqli->real_escape_string($_POST['post_status']);
        $sql = "UPDATE `post` SET `post_display`='{$post_status}' WHERE `post_sn`='{$post_sn}'";
        $mysqli->query($sql) or die($mysqli->connect_error);
        $change_result = 'success';
        echo $change_result;
        return true;
    }
    $change_result = "empty post";
    echo $change_result;
    return false;
}