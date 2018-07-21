<?php
function cmt_form($cmt_sn) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $cmt = $result->fetch_assoc();
    $smarty->assign("cmt", $cmt);
}