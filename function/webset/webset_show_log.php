<?php
function webset_show_log() {
    global $mysqli, $smarty, $is_top;
    if (!$is_top) {
        die('今天剛換鍵盤WWWWW');
    }
    $sql = "SELECT * FROM `log` ORDER BY `log_date` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($log = $result->fetch_assoc()) {
        $all_log[$i] = $log;
        $i++;
    }
    err_log('test');
    $smarty->assign("all_log", $all_log);
}