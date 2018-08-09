<?php
function cmt_reply($cmt_sn) {
    global $mysqli, $is_user;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    if (!$is_user) {
        die ('請先登入Σ(ﾟωﾟ)');
    }
    $cmt_date = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `cmt` (`cmt_content`,
    `user_sn`,
    `post_sn`,
    `reply_sn`,
    `cmt_date`) VALUES ('{$cmt_content}',
    '{$_SESSION['user_sn']}',
    '0',
    '{$cmt_sn}',
    '{$cmt_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $mysqli->insert_id;
}