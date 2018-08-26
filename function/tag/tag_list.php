<?php
function tag_list() {
    global $mysqli, $smarty, $is_admin;
    if (!$is_admin) {
        die("不給你看勒(◔౪◔)");
    }
    $sql = "SELECT * FROM `tag` ORDER BY `tag_sn` DESC";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while($tag = $result->fetch_assoc()) {
        $all_tag[$i] = $tag;
        $i++; 
    }
    $smarty->assign('all_tag', $all_tag);
}