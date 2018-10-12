<?php
function insert_class() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die('我現在很想睡覺懶得想幹話');
    }
    $class_name = $mysqli->real_escape_string($_POST['class_name']);
    if (!empty($_POST['default_post'])) {
        $default_post = $mysqli->real_escape_string($_POST['default_post']);
    } else {
        $default_post = '';
    }
    $sql = "INSERT INTO `class` (`class_name`, `class_display`) VALUES ('{$class_name}', 'enable')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $class_sn = $mysqli->insert_id;
    if (!empty($default_post)) {
        $each_post_sn = explode(";", $default_post);
        foreach ($each_post_sn as $post_sn) {
            $sql = "SELECT * FROM `post` WHERE `class_sn`='{$class_sn}'";
            $result = $mysqli->query($sql) or die($mysqli->connect_error);
            if (!empty($result)) {
                $sql = "UPDATE `post` SET `class_sn`='{$class_sn}' WHERE `post_sn`='{$post_sn}'";
                $mysqli->query($sql) or die($mysqli->connect_error);
            }
        }
    } else {
        return $class_sn;
    }
}