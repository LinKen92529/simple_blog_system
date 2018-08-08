<?php
function delete_post($post_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die('揍凱尼不肆管理員(／‵Д′)／~ ╧╧');
    }
    $sql = "DELETE FROM `post` WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $sql = "DELETE FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $path = "./uploads/post/{$post_sn}";
    delete_file($path, "folder");
    //delete cmt
    $sql = "SELECT * FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $reply_cmt = [];
    while ($reply = $result->fetch_assoc()) {
        err_log($reply['reply_sn']);
        array_push($reply_cmt, $reply['cmt_sn']);
    }
    $sql = "DELETE FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    foreach ($reply as $reply_sn) {
        $sql = "DELETE FROM `cmt` WHERE `reply_sn`='{$reply_sn}'";
        $mysqli->query($sql) or die($mysqli->connect_error);
    }
} 