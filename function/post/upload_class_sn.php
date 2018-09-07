<?php
function upload_class_sn($post_sn, $class_sn) {
    global $mysqli, $is_admin;
    err_log("test");
    if (!$is_admin) {
       die("咕嚕靈波（●´∀｀）ノ♡"); 
    }
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $seach_result = $mysqli->query($sql) or die($mysqli->connect_error);
    if (empty($seach_result)) return;
    $sql = "UPDATE `post` SET `class_sn`='{$class_sn}' WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}