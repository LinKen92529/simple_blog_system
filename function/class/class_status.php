<?php
function class_status($class_sn) {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        $result = 'permissiondenied';
        echo $result;
        return false;
    }
    $class_status = $mysqli->real_escape_string($_POST['class_status']);
    if ($class_status != 'enable' and $class_status != 'disable') {
        $result = 'not_allow';
        echo $result;
        return false;
    }
    $sql = "UPDATE `class` SET `class_display`='{$class_status}' WHERE `class_sn`='{$class_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $result = 'success';
    echo $result;
}