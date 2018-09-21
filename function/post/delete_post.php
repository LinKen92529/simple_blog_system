<?php
function delete_post($post_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die('揍凱尼不肆管理員(／‵Д′)／~ ╧╧');
    }
    $sql = "UPDATE `post` SET `post_display`='disable' WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
} 