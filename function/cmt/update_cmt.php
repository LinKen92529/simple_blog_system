<?php
function update_cmt($cmt_sn) {
    global $mysqli, $is_admin;
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    err_log($cmt_sn);
    $sql = "UPDATE `cmt` SET `cmt_content`='{$cmt_content}' WHERE `cmt_sn`='{$cmt_sn}'";
    err_log("test");
    $mysqli->query($sql) or die($mysqli->connect_error);
    err_log("test2");
}