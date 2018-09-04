<?php
function class_function() {
    err_log('test');
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `class` ORDER BY `class_sn` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($class = $result->fetch_assoc()) {
        $all_class[$i] = $class;
        $i ++;
    }
    $smarty->assign('class_function', $all_class);
} 