<?php
function search_result($keyword) {
    global $mysqli, $smarty;
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
       err_log($$var_title);
    }
    if (isset($post_tag)) {
        $sql = "SELECT * FROM `post` WHERE `post_tag` LIKE '%{$keyword}%'";
    } else if (isset($post_title)) {
        $sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%{$keyword}%'";
    } else if (isset($user_name)) {
        $sql = "SELECT * FROM `users` WHERE `user_name` LIKE '%{$keyword}%'";
    }
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
}