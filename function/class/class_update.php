<?php
function class_update($class_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("LALALA 你知道幹話很難想嗎?٩(｡・ω・｡)﻿و");
    }
    $class_name = $mysqli->real_escape_string($_POST['class_name']);
    $sql = "UPDATE `class` SET `class_name`='{$class_name}' WHERE `class_sn`='{$class_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $result = "success";
    echo $result;
}