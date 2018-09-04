<?php
function class_list() {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `class` ORDER BY `class_sn` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($class = $result->fetch_assoc()) {
        if ($class['class_display'] == 'enable') {
            $all_class[$i] = $class;
            $i ++;
        }
    }
    $smarty->assign('all_class', $all_class);
} 