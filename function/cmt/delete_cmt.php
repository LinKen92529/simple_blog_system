<?php
function delete_cmt($cmt_sn) {
    global $mysqli, $is_top;
    $sql = "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $cmt = $result->fetch_assoc();
    if (!$is_top and $_SESSION['user_sn'] != $cmt['user_sn']) {
        die('揍凱尼沒權限(／‵Д′)／~ ╧╧');
    }
    if (empty($cmt)) {
        return;
    }
    $sql = "DELETE FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $sql = "DELETE FROM `cmt` where `reply_sn`='{$cmt_sn}'";
    $mysqli->query($sql) or die($mysqli->connecy_error);
}