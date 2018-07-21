<?php
function post_display($post_sn) {
    global $mysqli, $smarty;
    $sql = "SELECT * FROM `post` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $post = $result->fetch_assoc();
    $post['pic'] = get_pic_path("./uploads/post/{$post_sn}/normal_post_pic.png", "./img/normal_get_pic.jpg");
    $post['tag'] = explode(";", $post['post_tag']);
    $sql = "SELECT * FROM `users` WHERE `user_sn`='{$post['post_owner']}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    if ($user = $result->fetch_assoc()) {
        $post['post_owner'] = $user['user_name'];
    } else {
        $post['post_owner'] = "不明";
    }
    if (!file_exists("uploads/post/{$post_sn}/{$post_sn}.html")) {
        copy("templates/default.html", "uploads/post/{$post_sn}/{$post_sn}.html");
    }
    $sql = "SELECT * FROM `cmt` WHERE `post_sn`='{$post_sn}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;
    while ($cmt=$result->fetch_assoc()) {
        $post["cmt"][$i] = $cmt;
        $ssql = "SELECT * FROM `users` WHERE `user_sn`='{$cmt['user_sn']}'";
        $rresult = $mysqli->query($ssql) or die($mysqli->connect_error);
        $owner = $rresult->fetch_assoc();
        $post["cmt"][$i]["user_sn"] = $owner['user_sn'];
        $post["cmt"][$i]["user_name"] = $owner['user_name'];
        $post["cmt"][$i]["user_pic"] = get_pic_path("./uploads/users/{$cmt['user_sn']}/thumb_user_pic.png", "./img/thumb_get_pic.jpg");
        $i++;
    }
    $smarty->assign("post", $post);
    $sql = "UPDATE `post` SET
    `post_counter`=`post_counter`+1
    WHERE `post_sn`='{$post_sn}'";
    $mysqli->query($sql) or die($mysqli->connect_error);
}