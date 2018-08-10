<?php
function delete_post($post_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die('揍凱尼不肆管理員(／‵Д′)／~ ╧╧');
    }
    $sql = "DELETE FROM `post` WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $path = "./uploads/post/{$post_sn}";
    delete_file($path, "folder");
    //delete cmt
    $sql = "SELECT * FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    while ($reply = $result->fetch_assoc()) {
        $ssql = "DELETE FROM `cmt` WHERE `reply_sn`='{$reply['cmt_sn']}'";
        $mysqli->query($ssql) or die($mysqli->connect_error);
    }
    $sql = "DELETE FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
} 