<?php
function update_post($post_sn) {
    global $mysqli, $is_admin;
    foreach ($_POST as $var_title => $var_value) {
       $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    $sql = "UPDATE `post` SET
    `post_title`='{$post_title}',
    `post_content`='{$post_content}',
    `post_tag`='{$post_tag}'
    WHERE `post_sn`='{$post_sn}'";
    if ($mysqli->query($sql) or die($mysqli->connect_error)) {
        save_post_pic($post_sn);
    }
}