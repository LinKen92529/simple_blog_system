<?php
function delete_tag() {
    global $mysqli, $is_admin;
    if (!$is_admin) {
        die("真白我婆(o´・ω・`)σ)Д`)\n好吧其實我想不到要說甚麼了(ｏﾟﾛﾟ)┌┛Σ(ﾉ´*ω*`)ﾉ");
    }
    $tag_sn = $mysqli->real_escape_string($_POST['tag_sn']);
    $sql = "SELECT * FROM `tag` WHERE `tag_sn`='{$tag_sn}'";
    $find_result = $mysqli->query($sql) or die($mysqli->connect_error);
    if ($tag = $find_result->fetch_assoc() and $tag != '') {
        $sql = "DELETE FROM `tag` WHERE `tag_sn`='{$tag_sn}'";
        $mysqli->query($sql) or die($mysqli->connect_error);
        $result = "true";
        echo $result;
        return;
    } else {
        $result = "empty";
        echo $result;
    }
    
}