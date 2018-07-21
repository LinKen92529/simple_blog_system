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
} 