<?php
function add_tag() {
    global $mysqli, $is_admin;
    $tag_name = $_POST['tag_name'];
    $sql = "SELECT * FROM `tag` WHERE `tag_name`='{$tag_name}'";
    $find_result = $mysqli->query($sql) or die($mysqli->connect_error);
    if ($tag = $find_result->fetch_assoc()) {
        $result = "re";
        echo $result;
        return;
    }
    $sql = "INSERT INTO `tag` (`tag_name`) VALUES ('{$tag_name}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $tag_sn = $mysqli->insert_id;
    $result = "true_" . $tag_sn . '_' . $tag_name . '_end';
    echo $result;
    return; 
}