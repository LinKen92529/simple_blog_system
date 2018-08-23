<?php
function cmt_form($cmt_sn) {
    global $mysqli, $smarty, $is_user;
    if (!$is_user) {
        die('你想幹嘛呢Σ(ﾟωﾟ)');
    }
    $sql = "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $cmt = $result->fetch_assoc();
    $sql= "SELECT * FROM `cmt` WHERE `cmt_sn`='{$cmt['reply_sn']}'" ;
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $origin_cmt = $result->fetch_assoc();
    $cmt['post_sn'] = $origin_cmt['post_sn'];
    $smarty->assign("cmt", $cmt);
}