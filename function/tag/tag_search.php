<?php
function tag_search() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die('不給你找哩( ﾟ∀ﾟ)o彡ﾟ');
    }
    $tag_name = $mysqli->real_escape_string($_POST['tag_name']);
    $sql = "SELECT * FROM `tag` WHERE `tag_name` LIKE '%{$tag_name}%' LIMIT";
    $find_result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($tag = $result->fetch_assoc()) {
        $result[$i] = $tag;
    }
}