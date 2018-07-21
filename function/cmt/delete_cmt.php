<?php
function delete_cmt($cmt_sn) {
    global $mysqli, $is_admin;
    $sql = "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $cmt = $result->fetch_assoc();
    if (empty($cmt)) {
        err_log("false");
        return;
    }
    if (!$is_admin and $_SESSION['user_sn'] != $cmt['user_sn']) {
        die('揍凱尼沒權限(／‵Д′)／~ ╧╧');
    }
    err_log($cmt_sn);
    $sql = "DELETE FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}