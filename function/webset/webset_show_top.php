<?php
function webset_show_top() {
    global $is_top, $mysqli, $smarty;
    if (!$is_top) {
        die('有智障把我鎖在門外我現在很不爽==');
    }
    $sql = "SELECT `user_name`, `user_sn` FROM `users` WHERE `user_right`='top'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($top = $result->fetch_assoc()) {
        $all_top[$i] = $top;
        $i++; 
    }
    $smarty->assign('all_top', $all_top);
}