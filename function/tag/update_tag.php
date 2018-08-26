<?php
function update_tag() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("想不到吧(*´ω`)人(´ω`*)");
    }
    $tag_sn = $mysqli->real_escape_string($_POST['tag_sn']);
    $tag_name = $mysqli->real_escape_string($_POST['tag_name']);
    $sql = "SELECT * FROM `tag` WHERE `tag_name`='{$tag_name}'";
    $find_result = $mysqli->query($sql) or die($mysqli->connect_error);
    if ($tag = $find_result->fetch_assoc() and $tag != '') {
        $result = "re";
        echo $result;
        return;
    }
    $sql = "UPDATE `tag` SET `tag_name`='{$tag_name}' WHERE `tag_sn`='{$tag_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $result = "true";
    echo $result;
    return;
}