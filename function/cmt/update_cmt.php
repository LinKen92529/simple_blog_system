<?php
function update_cmt($cmt_sn) {
    global $mysqli, $is_top;
    if (!$is_top and $now_user_sn != $cmt['user_sn']) {
        die('你沒有權限修改留言><');
    }
    $_POST['cmt_content'] = htmlspecialchars($_POST['cmt_content'], ENT_QUOTES);
    $cmt_content = $mysqli->real_escape_string($_POST['cmt_content']);
    $sql = "UPDATE `cmt` SET `cmt_content`='{$cmt_content}' WHERE `cmt_sn`='{$cmt_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}