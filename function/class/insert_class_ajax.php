<?php
function insert_class_ajax() {
    global $mysqli, $is_admin;
    if (!$is_admin) die('cout << Hello world! << endl');
    $class_name = $mysqli->real_escape_string($_POST['class_name']);
    $sql = "INSERT INTO `class` (`class_name`, `class_display`) VALUES ('{$class_name}', 'enable')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $class_sn = $mysqli->insert_id;
    $result = $class_sn . '_' . $class_name;
    echo $result;
}