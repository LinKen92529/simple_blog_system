<?php
function update_cmt($cmt_sn) {
    global $mysqli, $is_top;
    if (!$is_top and $now_user_sn != $cmt['user_sn']) {
        die('你沒有權限修改留言><');
    }
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    $sql = "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $cmt = $mysqli->query($sql) or die($mysqli->connect_error);
    $sql = "UPDATE `cmt` SET `cmt_content`='{$cmt_content}' WHERE `cmt_sn`='{$cmt_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}