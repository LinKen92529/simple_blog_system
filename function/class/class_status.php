<?php
function class_status($class_sn) {
    global $mysqli, $is_admin, $now_user_sn;
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
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$now_user_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user = $result->fetch_assoc();
    $sql = "SELECT * FROM `class` WHERE `class_sn`='{$class_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $class = $result->fetch_assoc();
    $user = $user['user_sn'] . '_' . $user['user_name'];
    $class = $class_sn . '_' . $class['class_name'];
    $date = date("Y-m-d H:i:s");
    $status = $class_status;
    change_class_log($status, $class, $user, $date);
    $sql = "UPDATE `class` SET `class_display`='{$class_status}' WHERE `class_sn`='{$class_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $result = 'success';
    echo $result;
}